@extends('layouts.master')

@section('title')
    배고픈 우주인
@endsection

@section('content')
    <nav class="navbar navbar-default">
        <ul class="nav nav-pills">
            @foreach($categories as $category)
                <li role="presentation" class="{{ $category->category == $select_category ? "active" : "" }}"><a href="{{ route('menu.index').'/'.$category->category }}">{{$category->title}}</a></li>
            @endforeach
        </ul>
    </nav>

    @foreach($menus->chunk(4) as $menuChunk)
        <div class="row">
            @foreach($menuChunk as $menu)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $menu->imagePath }}" alt="...">
                        <div class="caption">
                            <div class="thumb-menu-title">
                                <p>{{ $menu->title }}</p>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left price">{{ $menu->price }} 원</div>
                                <a href="{{ route('cart.addItem', ['id'=>$menu->id]) }}" class="btn btn-warning pull-right" role="button">담기</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection