@extends('layouts.master')

@section('title')
    주문내역
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1> 주문내역 </h1>
            <p class="pull-right">order no: #{{$order['id']}}</p>
            <hr>
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
                    <hr>
                @endforeach
            </ul>
            <div class="row">
                <p class="pull-right"><strong>합 계: {{ number_format($order->cart->totalPrice) }} 원</strong></p>
            </div>

            @if($order['pay_id'] == 0)
                <div class="row">
                    <a href="{{ route('order.cancel', ['id'=>$order['id']]) }}" type="button" class="btn btn-danger pull-right">주문 취소</a>
                </div>
            @endif
        </div>
    </div>
@endsection