@extends('layouts.master')

@section('title')
    내 계정
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>{{ $user->username }}님 회원정보</h1>
            <hr>

            {!! Form::model($user, ['route' => ['user.profileUpdate', $user->id], 'method' => 'post', 'class' => 'form-horizontal']) !!}
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
            <div class="form-group pull-right">
                {{ Form::submit('수정', ['class' => 'btn btn-primary']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection