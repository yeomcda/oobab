<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;


class OrderController extends Controller
{
    public function getIndex(){
        $orders = Auth::user()->orders()->orderBy('created_at', 'desc')->paginate(15);
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        return view('order.index', ['orders' => $orders]);
    }

    public function getShow($id){
        $order = Auth::user()->orders()->find($id);
        $order->cart = unserialize($order->cart);

        return view('order.show', ['order' => $order]);
    }

    public function getCancel($id){
        $order = Auth::user()->orders()->find($id);

        if($order->pay_admin == 0)
            $order->delete();

        return redirect()->route('order.index');
    }
}
