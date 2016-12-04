@extends('layouts.master')

@section('title')
    정산 내역
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1> 전체 정산내역 </h1>
            <hr>
            @if(count($orders) != 0)
                <div class="list-group">
                    @foreach($orders as $order)
                        <a href="{{ route('checkout.show', ['id' => $order->make_checkout_id]) }}" class="list-group-item btn-default">
                            @if( ($order->checkout_id == 0) )
                                <span class="label label-danger pull-right">미입금</span>
                            @else
                                <span class="label label-primary pull-right">입금완료</span>
                            @endif
                            <span class="pull-right">{{ number_format($order->total_price) }}원 </span>
                            {{ $order->created_at->format('y-m-d') }} ~ {{ \App\MakeCheckout::find($order->make_checkout_id)->created_at->format('y-m-d') }}
                        </a>
                    @endforeach
                </div>
            @else
                <p><i class="fa fa-times-circle" aria-hidden="true"></i>정산 내역이 없어요!</p>
            @endif
            {{-- pagination 페이징 위함. --}}
            {{ $orders->links() }}
        </div>
    </div>
@endsection