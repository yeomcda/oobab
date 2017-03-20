<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Menu;
use App\OptionMenu;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function getCart(){
        if(!Session::has('cart')){
            return view('cart.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('cart.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getAddItem(Request $request, $id){
        $menu = Menu::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($menu, $menu->id);

        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function getAddOptionItem($menu_id, $option_id){
        $optionMenu = OptionMenu::find($option_id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if($oldCart != null)
        {
            $oldCart->addOptionItem($optionMenu, $menu_id);
        }

        return redirect()->back();
    }

    public function getDeleteItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if($oldCart != null)
        {
            $oldCart->delete($id);
        }

        return redirect()->back();
    }

    public function getDeleteOptionItem($menu_id, $option_id, $option_index)
    {
        $optionMenu = OptionMenu::find($option_id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if($oldCart != null)
        {
            $oldCart->deleteOptionItem($optionMenu, $menu_id, $option_index);
        }

        return redirect()->back();
    }

    public function getEmptyCart()
    {
        Session::forget('cart');

        return redirect()->back();
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('cart.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $totalQty = $cart->totalQty;
        $totalPrice = $cart->totalPrice;

        $order = new Order();
        $order->username = Auth::user()->username;
        $order->cart = serialize($cart);
        $order->total_qty = $totalQty;
        $order->total_price = $totalPrice;

        Auth::user()->orders()->save($order);

        Session::forget('cart');

        return redirect()->route('order.show', ['id' => $order['id']]);
    }
}
