@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> {{empty($optionMenu) ? '옵션메뉴 생성' : '옵션메뉴 수정'}} </h1>
            <hr>
            {!! Form::model($optionMenu, ['route' => empty($optionMenu) ? 'admin.optionMenuCreate' : ['admin.optionMenuUpdate', $optionMenu->id], 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('title', '옵션메뉴 이름') }}
                    {{ Form::text('title', empty($optionMenu) ? '' : $optionMenu->title, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('price', '가격(원)') }}
                    {{ Form::text('price', empty($optionMenu) ? '' : $optionMenu->price, ['class' => 'form-control']) }}
                </div>
                <div class="form-group pull-right">
                    {{ link_to_route('admin.optionMenuList', '취소', [], ['class' => 'btn btn-danger']) }}
                    {{ Form::submit(empty($optionMenu) ? '생성' : '수정', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection