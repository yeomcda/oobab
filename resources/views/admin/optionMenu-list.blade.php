@extends('layouts.master')

@section('title')
    메뉴 관리
@endsection

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right label-danger" style="color: white;">관리자 전용</p>
                @include('admin.category-bar', ['selectedCategory' => 'optionMenu'])

                <h1> 전체 옵션메뉴 </h1>
                <a href="{{ route('admin.optionMenuCreate') }}" class="btn btn-warning" role="button">추가</a>
                <hr>
                @if(count($optionMenus) != 0)
                    <div class="list-group">
                        @foreach($optionMenus as $optionMenu)
                            <div class="input-group">
                                <a href="{{ route('admin.optionMenuShow', ['id' => $optionMenu->id]) }}" class="list-group-item btn-default">
                                    {{ $optionMenu->id }})
                                    {{ $optionMenu->title }}
                                    <span class="label label-success">{{ $optionMenu->price }}</span>
                                    <div class="pull-right">{{ $optionMenu->updated_at->format('y/m/d H:i:s') }}</div>
                                </a>
                                <div class="input-group-btn">
                                    <a href="{{ Route('admin.optionMenuDelete', ['id' => $optionMenu->id]) }}" class="btn btn-danger btn-sm">삭제</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p><i class="fa fa-times-circle" aria-hidden="true"></i>등록 된 옵션메뉴가 없어요!</p>
                @endif
                {{-- pagination 페이징 위함. --}}
                {{ $optionMenus->links() }}
            </div>
        </div>
@endsection