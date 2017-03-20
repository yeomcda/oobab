<?php

namespace App\Http\Controllers;

use App\Menu;
use ConsoleTVs\Charts\Facades\Charts;
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

        # 정산 차트.
        $checkouts = Auth::user()
            ->checkouts()
            ->get();

        $labels = [];
        $priceData = [];
        foreach ($checkouts as $checkout) {
            array_push($labels, $checkout->created_at);
            array_push($priceData, $checkout->total_price);
        }
        $checkoutChart = Charts::create('line', 'highcharts')
            ->title("정산 내역")
            ->elementLabel('입금액')
            ->labels($labels)
            ->values($priceData)
            ->dimensions(0,400);

        # 미정산 내역 차트.
        $orders = Auth::user()
            ->orders()
            ->where('make_checkout_id', '=', 0)
            ->get();

        $labels = [];
        $priceData = [];
        $notCheckoutOrderTotalPrice = 0;
        foreach ($orders as $order) {
            array_push($labels, $order->created_at);
            array_push($priceData, $order->total_price);
            $notCheckoutOrderTotalPrice += $order->total_price;
        }

        $orderChart = Charts::create('bar', 'highcharts')
            ->title("미청구 주문 내역 (합계: ".number_format($notCheckoutOrderTotalPrice)."원)")
            ->elementLabel('주문 금액')
            ->labels($labels)
            ->values($priceData)
            ->dimensions(0,400)
            ->oneColor(true);

        # 즐겨찾는 메뉴.
        $bookmarks = Auth::user()->bookmarks()->get();
        $bookmarkMenuIDs = [];
        foreach ($bookmarks as $bookmark)
        {
            array_push($bookmarkMenuIDs, $bookmark->menu_id);
        }
        $bookmarkMenus = Menu::find($bookmarkMenuIDs);
        foreach($bookmarkMenus as $bookmarkMenu)
        {
            $bookmarkMenu["isBookmark"] = true;
        }

        return view('dashboard.index', ['notCheckoutOrders'=>$notCheckoutOrders, 'checkoutChart'=>$checkoutChart, 'orderChart'=>$orderChart, 'bookmarkMenus'=>$bookmarkMenus]);
    }
}
