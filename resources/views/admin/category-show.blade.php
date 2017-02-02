@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
                <h1> {{$category->id}} 카테고리 상세 보기 </h1>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>{{$category->title}}</b></h4></div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <p><b>카테고리: {{$category->title}}</b></p>
                            </div>
                        </div>
                        <a href="{{ route('admin.categoryEdit', ['id'=>$category->id]) }}" class="btn btn-warning pull-right" role="button">수정</a>
                    </div>
                </div>
            </div>
        </div>
@endsection