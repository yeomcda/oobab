@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
            <h1> {{empty($menu) ? '메뉴 생성' : '메뉴 수정'}} </h1>
            <hr>
            {!! Form::model($menu, ['route' => empty($menu) ? 'admin.menuCreate' : ['admin.menuUpdate', $menu->id], 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    {{ Form::label('category', '카테고리') }}
                    {{ Form::select('category', $categorySelectBox, empty($menu) ? null : $menu->category, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('title', '메뉴이름') }}
                    {{ Form::text('title', empty($menu) ? '' : $menu->title, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('description', '설명') }}
                    {{ Form::textarea('description', empty($menu) ? '' : $menu->description, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('price', '가격(원)') }}
                    {{ Form::text('price', empty($menu) ? '' : $menu->price, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('imagePath', '이미지 url') }}
                    {{ Form::text('imagePath', empty($menu) ? '' : $menu->imagePath, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('optionMenu', '옵션메뉴') }}
                    @foreach($optionMenus as $optionMenu)
                        {{ Form::checkbox('option_menus[]', $optionMenu->id, in_array($optionMenu->id, $selectedOptionMenus)) }}
                        {{ $optionMenu->title }}
                    @endforeach
                </div>
                <div class="form-group pull-right">
                    {{ link_to_route('admin.menuList', '취소', [], ['class' => 'btn btn-danger']) }}
                    {{ Form::submit(empty($menu) ? '생성' : '수정', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection