@extends('layouts.master')

@section('title')
    우주인 주문목록
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-5 col-md-5 col-sm-offset-1 col-md-offset-1">
            <h1> 우주인 주문목록 </h1>
            <p class="pull-right">{{$date}}</p>
            <hr>
            @foreach($orders as $order)
                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $order->username }}</p>
                <ul class="list-group">
                    @foreach($order->cart->items as $product)
                        <li class="list-group-item">
                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success">{{ $product['price'] }}</span>
                        </li>
                        @if( !empty($product['optionItems']) )
                            @foreach($product['optionItems'] as $index => $optionItem)
                                <li class="list-group-item">
                                    <span class="badge">추가</span>
                                    <strong>{{ $optionItem['title'] }}</strong>
                                    <span class="label label-primary">{{ $optionItem['price'] }}</span>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
                <hr>
            @endforeach
        </div>
        <div class="col-sm-5 col-md-5 col-sm-offset-1 col-md-offset-1">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> 메뉴 별 묶음 </h1>
            <hr>
            <ul class="list-group">
                @if(!empty($mergeNoOptOrders))
                    <p> 단품 주문 </p>
                    @foreach($mergeNoOptOrders as $mergeNoOptOrder)
                        <li class="list-group-item">
                            <span class="badge">{{ $mergeNoOptOrder['qty'] }}</span>
                            <strong>{{ $mergeNoOptOrder['item']['title'] }}</strong>
                            <span class="label label-success">{{ $mergeNoOptOrder['price'] }}</span>
                        </li>
                    @endforeach
                @endif
                @if(!empty($mergeExistOptOrders))
                    <hr>
                    <p> 옵션 추가 주문 </p>
                    @foreach($mergeExistOptOrders as $mergeExistOptOrder)
                        @foreach($mergeExistOptOrder as $order)
                            <li class="list-group-item">
                                <span class="badge">{{ $order['qty'] }}</span>
                                <strong>{{ $order['item']['title'] }}</strong>
                                <span class="label label-success">{{ $order['price'] }}</span>
                            </li>
                            @if( !empty($order['optionItems']) )
                                @foreach($order['optionItems'] as $index => $optionItem)
                                    <li class="list-group-item">
                                        <span class="badge">추가</span>
                                        <strong>{{ $optionItem['title'] }}</strong>
                                        <span class="label label-primary">{{ $optionItem['price'] }}</span>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
                @endif
            </ul>
            <hr>
            @if($totalQty != 0)
                <div class="row">
                    <p class="pull-right"><strong>총 주문: {{ $totalQty }} 개</strong></p>
                </div>
                <div class="row">
                    <p class="pull-right"><strong>합 계: {{ number_format($totalPrice) }} 원</strong></p>
                </div>
                @if($pay_id == 0)
                    <div class="row">
                        <a href="{{ route('admin.orderComplete') }}" type="button" class="btn btn-danger pull-right">주문 완료</a>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection