<?php

namespace App\Http\Controllers;

use App\Checkout;
use App\MakeCheckout;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function getCheckoutIndex()
    {
        $orders = Auth::user()
            ->orders()
            ->select('checkout_id', 'make_checkout_id', DB::raw('sum(total_price) as total_price'), DB::raw('min(created_at) as created_at'))
            ->where('make_checkout_id', '<>', 0)
            ->groupBy('checkout_id')
            ->groupBy('make_checkout_id')
            ->orderBy('created_at', 'desc')
            ->paginate(15);

        foreach($orders as $order)
        {
            $payPrice = 0;
            if(Auth::user()->hasRole("Manager"))
            {
                $checkoutOrders = Order::select('pay_id')->where('make_checkout_id', '=', $order->make_checkout_id)->groupBy('pay_id')->get();
                foreach ($checkoutOrders as $checkoutOrder)
                {
                    $pay = $checkoutOrder->pay;
                    if($pay->user_id == Auth::user()->id)
                        $payPrice += $pay->total_price;
                }
            }
            $order->total_price -= $payPrice;
        }

        return view('checkout.index', ['orders' => $orders]);
    }
    public function getCheckoutShow($make_checkout_id)
    {
        $orders = Auth::user()
            ->orders()
            ->where('make_checkout_id', '=', $make_checkout_id)
            ->get();

        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        $payPrice = 0;
        if(Auth::user()->hasRole("Manager"))
        {
            $checkoutOrders = Order::select('pay_id')->where('make_checkout_id', '=', $make_checkout_id)->groupBy('pay_id')->get();
            foreach ($checkoutOrders as $order)
            {
                $pay = $order->pay;
                if($pay->user_id == Auth::user()->id)
                    $payPrice += $pay->total_price;
            }
        }

        $isCheckout = $orders->first()->checkout_id;
        $startDate = $orders->first()->created_at;
        $endDate = MakeCheckout::find($make_checkout_id)->created_at;
        $totalPrice = $orders->sum('total_price');

        return view('checkout.show', ['make_checkout_id'=> $make_checkout_id, 'orders' => $orders, 'isCheckout' => $isCheckout, 'startDate' => $startDate, 'endDate' => $endDate,'totalPrice' => $totalPrice, 'payPrice' => $payPrice]);
    }

    public function getCheckoutComplete($make_checkout_id)
    {
        $orders = Auth::user()
            ->orders()
            ->where('make_checkout_id', '=', $make_checkout_id);

        $checkOut = new Checkout();
        $checkOut->save();

        $orders->update(['checkout_id' => $checkOut->id]);

        return redirect()->route('checkout.index');
    }
}
