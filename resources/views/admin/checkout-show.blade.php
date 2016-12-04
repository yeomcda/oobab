@extends('layouts.master')

@section('title')
    정산 청구
@ENDSECTION

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> 유저별 정산내역 </h1>
            <hr>
            <div class="list-group">
                @foreach($orders as $order)
                    <a href="#" class="list-group-item btn-default">
                        @if( ($order->checkout_id == 0) )
                            <span class="label label-danger pull-right">미입금</span>
                        @else
                            <span class="label label-primary pull-right">입금완료</span>
                        @endif
                        <i class="fa fa-user" aria-hidden="true"></i> {{ $order->username }}
                        <span class="pull-right">{{ number_format($order->total_price) }}원 </span>
                    </a>
                @endforeach
            </div>
            @if(count($orders) != 0)
                <hr>
                <div class="row">
                    <p class="pull-right"><strong>합 계: {{ number_format($totalPrice) }} 원</strong></p>
                </div>
                @if($makeCheckoutID == 0)
                    <div class="row">
                        <a href="{{ route('admin.checkoutMake') }}" type="button" class="btn btn-success pull-right">정산 청구</a>
                    </div>
                @endif
            @else
                <p><i class="fa fa-times-circle" aria-hidden="true"></i>정산 할 내역이 없어요!</p>
            @endif
        </div>
    </div>
@endsection