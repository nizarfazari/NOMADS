<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\TravelPackage;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'travel_packages' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transactions_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transactions_status', 'SUCCESS')->count(),
        ]);
    }
}
