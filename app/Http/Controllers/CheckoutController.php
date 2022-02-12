<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Transaction;
use App\TravelPackage;
use App\TransactionDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['details', 'travel_package', 'user'])->findOrFail($id);

        return view('pages.frontend.checkout', [
            'item' => $item
        ]);
    }

    public function process(Request $request, $id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transactions_total' => $travel_package->price,
            'transactions_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYear(5)
        ]);

        return redirect()->route('checkout', $transaction->id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transaction_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        if ($request->is_visa) {
            $transaction->transactions_total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->transactions_total += $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route('checkout', $id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details', 'travel_package'])->findOrFail($item->transaction_id);

        if ($request->is_visa) {
            $transaction->transactions_total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->transactions_total -= $transaction->travel_package->price;

        $transaction->save();
        $item->delete();
        return redirect()->route('checkout', $item->transaction_id);
    }
    public function succes(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transactions_status = 'PENDING';
        $transaction->save();
        return view('pages.frontend.succes');
    }
}
