<?php

namespace App\Http\Controllers;
use App\Transaction;
use App\Product;
use App\Customer;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.dashboard',
        [
            'revenues' => Transaction::select('transaction_total')->count(),
            'sales' => Transaction::count(),
            'products' => Product::count(),
            'customers' => Customer::count()
        ]);
    }
}
