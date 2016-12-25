@extends('layouts.master')

@section('title')
    정산 내역
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> <i class="fa fa-user" aria-hidden="true"></i> {{$userName}}님 정산내역 </h1>
            <hr>
            @if(count($orders) != 0)
                <div class="row">
                    <p>정산 기간: {{ $startDate->format('y-m-d') }} ~ {{ $endDate->format('y-m-d') }}</p>
                    <strong>합 계: {{ number_format($totalPrice) }} 원</strong>
                    @if($isCheckout == 0)
                        <span class="label label-danger pull-right">미입금</span>
                    @else
                        <span class="label label-primary pull-right">입금완료</span>
                    @endif
                        <hr>
                </div>
                <div class="list-group">
                    @foreach($orders as $order)
                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ $order->created_at->format('y-m-d H:i') }}</p>
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
                    @endforeach
                </div>
            @else
                <p><i class="fa fa-times-circle" aria-hidden="true"></i>정산 정보가 없네요...</p>
            @endif
        </div>
    </div>
@endsection