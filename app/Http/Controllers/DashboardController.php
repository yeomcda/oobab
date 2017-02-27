<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getIndex()
    {
        $notCheckoutOrders = Auth::user()
            ->orders()
            ->select('id')
            ->where('make_checkout_id', '<>', 0)
            ->where('checkout_id', '=', 0)
            ->first();

        return view('dashboard.index', ['notCheckoutOrders'=>$notCheckoutOrders]);
    }
}
