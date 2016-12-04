@extends('layouts.master')

@section('title')
    주문내역
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
                <h1> 전체 주문내역 </h1>
                <hr>
                @if(count($pays) != 0)
                    <div class="list-group">
                        @foreach($pays as $pay)
                            <a href="{{ route('admin.orderShow', ['id' => $pay->id]) }}" class="list-group-item btn-default">
                                @if($pay->created_at->format('y-m-d') == Carbon\Carbon::now()->format('y-m-d'))
                                    <span class="label label-success pull-right">Today</span>
                                @endif
                                {{ $pay->created_at->format('y/m/d H:i') }}
                                <span class="pull-right">{{ number_format($pay->total_price) }}원 <i class="fa fa-credit-card" aria-hidden="true"></i> {{ $pay->user->username }}</span>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p><i class="fa fa-times-circle" aria-hidden="true"></i>주문 한 내역이 없어요!</p>
                @endif
                {{-- pagination 페이징 위함. --}}
                {{ $pays->links() }}
            </div>
        </div>
@endsection