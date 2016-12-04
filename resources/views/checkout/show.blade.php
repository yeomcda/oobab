@extends('layouts.master')

@section('title')
    정산 내역
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1> 정산내역 </h1>
            <hr>
            @if(count($orders) != 0)
                <div class="row">
                    @if($isCheckout == 0)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>입금 계좌정보</strong></h3>
                            </div>
                            <div class="panel-body">
                                <p>국민은행 642602-01-111866 예금주: 김영호</p>
                                <p>정산 기간: {{ $startDate->format('y-m-d') }} ~ {{ $endDate->format('y-m-d') }}</p>
                                <strong>합 계: {{ $totalPrice }} 원</strong>
                                <a href="{{ route('checkout.complete', ['id' => $make_checkout_id]) }}" type="button" class="btn btn-primary pull-right">입금 완료</a>
                                <p><i class="fa fa-info-circle" aria-hidden="true"></i>입금 후 입금 완료 버튼을 눌러주세요~!</p>
                            </div>
                        </div>
                    @else
                        <p>정산 기간: {{ $startDate->format('y-m-d') }} ~ {{ $endDate->format('y-m-d') }}</p>
                        <strong>합 계: {{ $totalPrice }} 원</strong>
                        <p><i class="fa fa-info-circle" aria-hidden="true"></i>입금 완료된 정산이에요.</p>
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