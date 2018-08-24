@extends('layouts.master')

@section('title')
    유저 관리
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> {{$user->username}}님 정보 수정 </h1>
            <hr>

            {!! Form::model($user, ['route' => ['admin.userUpdate', $user->id], 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('username', '이름') }}
                    {{ Form::text('username', $user->username, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('email', '이메일') }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('password', '비밀번호') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('role', '권한') }}
                    {{ Form::select('role', $roleSelectBox, $user->roles->first()->id, ['class' => 'form-control']) }}
                </div>
                <div class="form-group pull-right">
                    {{ link_to_route('admin.userList', '취소', [], ['class' => 'btn btn-danger']) }}
                    {{ Form::submit('수정', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection