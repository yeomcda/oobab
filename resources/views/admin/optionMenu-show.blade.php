@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
                <h1> {{$optionMenu->id}} 옵션메뉴 상세 보기 </h1>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>{{$optionMenu->title}}</b></h4></div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-body">
                                <p><b>{{$optionMenu->title}}</b></p>
                                <div class="pull-right"><b>가격: {{ number_format($optionMenu->price) }} 원</b></div>
                            </div>
                        </div>
                        <a href="{{ route('admin.optionMenuEdit', ['id'=>$optionMenu->id]) }}" class="btn btn-warning pull-right" role="button">수정</a>
                    </div>
                </div>
            </div>
        </div>
@endsection