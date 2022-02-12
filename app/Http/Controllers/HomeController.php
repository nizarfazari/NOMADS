<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.frontend.home', [
            'items' => $items
        ]);
    }
}
