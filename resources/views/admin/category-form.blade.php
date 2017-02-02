@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> {{empty($category) ? '카테고리 생성' : '카테고리 수정'}} </h1>
            <hr>
            {!! Form::model($category, ['route' => empty($category) ? 'admin.categoryCreate' : ['admin.categoryUpdate', $category->id], 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('title', '카테고리이름') }}
                    {{ Form::text('title', empty($category) ? '' : $category->title, ['class' => 'form-control']) }}
                </div>
                <div class="form-group pull-right">
                    {{ link_to_route('admin.categoryList', '취소', [], ['class' => 'btn btn-danger']) }}
                    {{ Form::submit(empty($category) ? '생성' : '수정', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection