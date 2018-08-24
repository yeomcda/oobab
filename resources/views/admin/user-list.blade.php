@extends('layouts.master')

@section('title')
    유저 관리
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
                <h1> 전체 유저 </h1>
                <hr>
                @if(count($users) != 0)
                    <div class="list-group">
                        @foreach($users as $user)
                            {{--<div class="input-group">--}}
                                <a href="{{ route('admin.userEdit', ['id' => $user->id]) }}" class="list-group-item btn-default">
                                    {{ $user->id }})
                                    {{ $user->username }}
                                    {{ $user->email }}
                                    @if($user->roles->first()->id == 1)
                                        <span class="label label-success pull-right">{{ $user->roles->first()->name }}</span>
                                    @elseif($user->roles->first()->id == 2)
                                        <span class="label label-primary pull-right">{{ $user->roles->first()->name }}</span>
                                    @else($user->roles->first()->id == 3)
                                        <span class="label label-danger pull-right">{{ $user->roles->first()->name }}</span>
                                    @endif
                                </a>
                                {{--<div class="input-group-btn">
                                    <a href="{{ Route('admin.userEdit', ['id' => $user->id]) }}" class="btn btn-danger btn-sm">수정</a>
                                </div>--}}
                            {{--</div>--}}
                        @endforeach
                    </div>
                @else
                    <p><i class="fa fa-times-circle" aria-hidden="true"></i>가입 한 유저가 없어요!</p>
                @endif
                {{-- pagination 페이징 위함. --}}
                {{ $users->links() }}
            </div>
        </div>
@endsection