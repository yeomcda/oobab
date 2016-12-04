@extends('layouts.master')

@section('title')
    주문내역
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h1> 전체 주문내역 </h1>
                <hr>
                <div class="list-group">
                    @foreach($orders as $order)
                        <a href="{{ route('order.show', ['id' => $order->id]) }}" class="list-group-item btn-default">
                            @if($order->created_at->format('y-m-d') == Carbon\Carbon::now()->format('y-m-d'))
                                <span class="label label-success pull-right">Today</span>
                            @endif
                            @if($order->pay_id == 0)
                                <span class="label label-warning pull-right">주문 대기</span>
                            @else
                                <span class="label label-danger pull-right">주문 완료</span>
                            @endif
                            {{ $order->created_at->format('y/m/d H:i') }}
                            <span class="pull-right">{{ number_format($order->total_price) }}원</span>
                        </a>
                    @endforeach
                </div>

                @if(count($orders) == 0)
                    <p><i class="fa fa-times-circle" aria-hidden="true"></i>주문 한 내역이 없어요!</p>
                @endif
                {{-- pagination 페이징 위함. --}}
                {{ $orders->links() }}
            </div>
        </div>
@endsection