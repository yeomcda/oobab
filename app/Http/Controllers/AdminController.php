<?php

namespace App\Http\Controllers;

use App\Checkout;
use App\MakeCheckout;
use App\Order;
use App\Pay;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getOrderList(){
        $pays = Pay::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.order-list', ['pays' => $pays]);
    }

    public function getOrderShow($id = 0){
        if($id == 0) {
            $orders = Order::all()->where('pay_id', '=', 0);
            $date = Carbon::now();
        }
        else{
            $pay = Pay::find($id);
            $orders = $pay->orders;
            $date = $pay->created_at;
        }

        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        $mergeNoOptOrders = [];
        $mergeExistOptOrders = [];
        foreach($orders as $order)
        {
            foreach($order->cart->items as $item)
            {
                if(empty($item['optionItems']))
                {
                    if( array_key_exists($item['item']['id'], $mergeNoOptOrders) )
                    {
                        $mergeNoOptOrders[$item['item']['id']]['qty'] += $item['qty'];
                        $mergeNoOptOrders[$item['item']['id']]['price'] += $item['price'];
                    }
                    else
                        $mergeNoOptOrders[$item['item']['id']] = $item;
                }
                else
                {
                    if( array_key_exists($item['item']['id'], $mergeExistOptOrders) )
                    {
                        array_push( $mergeExistOptOrders[$item['item']['id']], $item);
                    }
                    else
                        $mergeExistOptOrders[$item['item']['id']] = array($item);
                }
            }
        }
        $totalQty = $orders->sum('total_qty');
        $totalPrice = $orders->sum('total_price');

        $adminUsers = User::whereHas('roles', function($q){
            $q->where('name', 'Manager')->orWhere('name', 'Admin');
        })->get();

        return view('admin.order-show', ['orders' => $orders, 'totalQty' => $totalQty, 'totalPrice' => $totalPrice, 'mergeNoOptOrders' => $mergeNoOptOrders, 'mergeExistOptOrders' => $mergeExistOptOrders, 'pay_id' => $id, 'date' => $date, 'adminUsers' => $adminUsers]);
    }

    public function postOrderComplete(Request $request){
        $orders = Order::where('pay_id', '=', 0);
        $totalPrice = $orders->sum('total_price');
        $payUserID = $request->input('pay-user');
        $pay = new Pay([
            'total_price' => $totalPrice
        ]);
        User::find($payUserID)->pays()->save($pay);

        $orders->update(['pay_id' => $pay->id]);

        return redirect()->route("admin.orderList");
    }

    public function getCheckoutList()
    {
        $checkoutLists = MakeCheckout::orderBy('created_at', 'desc')->paginate(15);
        foreach ($checkoutLists as $checkout)
        {
            $checkout["isToday"] = $checkout->created_at->format('y-m-d') == Carbon::now()->format('y-m-d') ? true : false;
            $checkout["isCheckout"] = count($checkout->orders()->where('checkout_id', '=', '0')->first()) == 0 ? true : false;
        }
        return view('admin.checkout-list', ['checkoutLists' => $checkoutLists]);
    }

    public function getCheckoutShow($makeCheckoutID = 0)
    {
        if($makeCheckoutID == 0) {
            $orders = DB::table('orders')
                        ->select('user_id', 'username', 'checkout_id', DB::raw('sum(total_price) as total_price'), DB::raw('min(created_at) as startDate'), DB::raw('max(created_at) as endDate'))
                        ->where('pay_id', '<>', 0)
                        ->where('make_checkout_id', '=', '0')
                        ->groupBy('user_id')
                        ->groupBy('username')
                        ->groupBy('checkout_id')
                        ->get();
        }
        else{
            $orders = DB::table('orders')
                ->select('user_id', 'username', 'checkout_id', DB::raw('sum(total_price) as total_price'), DB::raw('min(created_at) as startDate'), DB::raw('max(created_at) as endDate'))
                ->where('pay_id', '<>', 0)
                ->where('make_checkout_id', '=', $makeCheckoutID)
                ->groupBy('user_id')
                ->groupBy('username')
                ->groupBy('checkout_id')
                ->get();
        }

        foreach($orders as $order)
        {
            $payPrice = 0;
            $user_id = $order->user_id;
            if(User::find($user_id)->hasRole("Manager"))
            {
                $checkoutOrders = Order::select('pay_id')->where('make_checkout_id', '=', $makeCheckoutID)->groupBy('pay_id')->get();
                foreach ($checkoutOrders as $checkoutOrder)
                {
                    $pay = $checkoutOrder->pay;
                    if($pay->user_id == $user_id)
                        $payPrice += $pay->total_price;
                }
            }
            $order->total_price -= $payPrice;
        }

        $totalPrice = $orders->sum('total_price');

        return view('admin.checkout-show', ['orders' => $orders, 'totalPrice' => $totalPrice, 'makeCheckoutID' => $makeCheckoutID]);
    }

    public function getUserCheckoutShow($make_checkout_id = 0, $user_id = 0){
        $orders = User::find($user_id)
            ->orders()
            ->where('make_checkout_id', '=', $make_checkout_id)
            ->get();

        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });

        $payPrice = 0;
        if(User::find($user_id)->hasRole("Manager"))
        {
            $checkoutOrders = Order::select('pay_id')->where('make_checkout_id', '=', $make_checkout_id)->groupBy('pay_id')->get();
            foreach ($checkoutOrders as $order)
            {
                $pay = $order->pay;
                if($pay->user_id == $user_id)
                    $payPrice += $pay->total_price;
            }
        }

        $userName = $orders->first()->username;
        $isCheckout = $orders->first()->checkout_id;
        $startDate = $orders->first()->created_at;
        $endDate = $make_checkout_id == 0 ? Carbon::now() : MakeCheckout::find($make_checkout_id)->created_at;
        $totalPrice = $orders->sum('total_price');

        return view('admin.user-checkout-show', ['userName' => $userName, 'orders' => $orders, 'isCheckout' => $isCheckout, 'startDate' => $startDate, 'endDate' => $endDate,'totalPrice' => $totalPrice, 'payPrice' => $payPrice]);
    }

    public function getCheckoutMake()
    {
        $orders = Order::where('pay_id', '<>', 0)->where('make_checkout_id', '=', 0);
        $totalPrice = $orders->sum('total_price');
        $makeCheckout = new MakeCheckout([
            'total_price' => $totalPrice
        ]);
        $makeCheckout->save();

        $orders->update(['make_checkout_id' => $makeCheckout->id]);

        return redirect()->route('admin.checkoutList');
    }
}
