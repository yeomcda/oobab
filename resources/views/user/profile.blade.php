@extends('layouts.master')

@section('title')
    내 계정
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>{{ Auth::user()->username }}님 회원정보</h1>
        </div>
    </div>
@endsection