@extends('layouts.master')

@section('title')
    정산내역
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> 전체 정산내역 </h1>
            <hr>
            @if(count($checkoutLists) != 0)
                <div class="list-group">
                    @foreach($checkoutLists as $checkout)
                        <a href="{{ route('admin.checkoutShow', ['id' => $checkout->id]) }}" class="list-group-item btn-default">
                            @if($checkout->created_at->format('y-m-d') == Carbon\Carbon::now()->format('y-m-d'))
                                <span class="label label-success pull-right">Today</span>
                            @endif
                            @if( ($checkout->orders()->where('checkout_id', '=', '0')->first()) )
                                <span class="label label-danger pull-right">미입금</span>
                            @else
                                <span class="label label-primary pull-right">입금완료</span>
                            @endif
                            {{ $checkout->created_at->format('y/m/d H:i') }}
                            <span class="pull-right">{{ number_format($checkout->total_price) }}원</span>
                        </a>
                    @endforeach
                </div>
            @else
                <p><i class="fa fa-times-circle" aria-hidden="true"></i>정산 한 내역이 없어요!</p>
            @endif
            {{-- pagination 페이징 위함. --}}
            {{ $checkoutLists->links() }}
        </div>
    </div>
@endsection