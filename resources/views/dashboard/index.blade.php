@extends('layouts.master')

@section('title')
    배고픈 우주인
@endsection

@section('content')
    <h1>DashBoard</h1>
    @if(!is_null($notCheckoutOrders))
        <a href="{{ route('checkout.index') }}">
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                미입금된 정산내역이 존재합니다. 클릭하여 확인해 주세요 :-ㅇ
            </div>
        </a>
    @endif
    {!! $checkoutChart->render() !!}
    {!! $orderChart->render() !!}
@endsection