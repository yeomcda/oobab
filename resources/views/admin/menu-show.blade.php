@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
                <h1> {{$menu->id}} 메뉴 상세 보기 </h1>
                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><b>{{$menu->title}}</b></h4></div>
                    <div class="panel-body">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ $menu->imagePath }}" style="height: 250px">
                            </div>
                            <div class="media-body">
                                <p><b>카테고리: {{ is_null($menu->categories) ? "없음" : $menu->categories->title}}</b></p>
                                <p>{{$menu->description}}</p>
                                @if(!empty($optionMenus))
                                    <p><b>옵션 선택 메뉴</b>
                                        <ul>
                                            @foreach($optionMenus as $optionMenu)
                                                <li>{{$optionMenu->title}}</li>
                                            @endforeach
                                        </ul>
                                    </p>
                                @endif
                                <div class="pull-right"><b>가격: {{ number_format($menu->price) }} 원</b></div>
                            </div>
                        </div>
                        <a href="{{ route('admin.menuEdit', ['id'=>$menu->id]) }}" class="btn btn-warning pull-right" role="button">수정</a>
                    </div>
                </div>
            </div>
        </div>
@endsection