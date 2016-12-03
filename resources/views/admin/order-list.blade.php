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
                <div class="list-group">
                    @foreach($pays as $pay)
                        <a href="{{ route('admin.orderShow', ['id' => $pay->id]) }}" class="list-group-item btn-default">
                            {{ $pay->created_at->format('y/m/d H:i') }}
                            @if($pay->created_at->format('y-m-d') == Carbon\Carbon::now()->format('y-m-d'))
                                <span class="label label-success pull-right">Today</span>
                            @endif
                            <span class="pull-right"><i class="fa fa-credit-card" aria-hidden="true"></i> {{ $pay->user->username }}</span>
                        </a>
                    @endforeach
                </div>

                {{-- pagination 페이징 위함. --}}
                {{ $pays->links() }}
            </div>
        </div>
@endsection