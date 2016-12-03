<?php

namespace App\Http\Controllers;

use App\Order;
use App\Pay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function getOrderList(){
        $pays = Pay::orderBy('created_at', 'desc')->paginate(15);;

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

        return view('admin.order-show', ['orders' => $orders, 'totalQty' => $totalQty, 'totalPrice' => $totalPrice, 'mergeNoOptOrders' => $mergeNoOptOrders, 'mergeExistOptOrders' => $mergeExistOptOrders, 'pay_id' => $id, 'date' => $date]);
    }

    public function getOrderComplete(){
        $pay = new Pay();
        Auth::user()->pays()->save($pay);

        Order::where('pay_id', '=', 0)->update(['pay_id' => $pay->id]);

        return redirect()->back();
    }
}
