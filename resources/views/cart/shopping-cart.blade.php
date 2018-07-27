@extends('layouts.master')

@section('title')
    장바구니
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h1><i class="fa fa-shopping-cart" aria-hidden="true"></i></h1>
                <hr>
                <ul class="list-group">
                    @foreach($products as $product)
                        <div class="dropdown">
                            <div class="input-group">
                                <li class="btn-default list-group-item dropdown-toggle" data-toggle="dropdown">
                                    <span class="badge">{{ $product['qty'] }}</span>
                                    <strong>{{ $product['item']['title'] }}</strong>
                                    <span class="label label-success">{{ $product['price'] }}</span>
                                </li>

                                <div class="input-group-btn">
                                    @if( !$product['item']['option_menus']->isEmpty() )
                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">옵션 <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            @foreach($product['item']['option_menus'] as $optionItem)
                                                <li><a href="{{ Route('cart.addOptionItem', ['menu_id' => $product['item']['id'], 'option_id' => $optionItem['id']]) }}">{{$optionItem->title}} <span class="label label-primary">{{$optionItem->price}}</span></a></li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <button type="button" class="btn btn-default btn-sm disabled">추가 옵션 <i class="fa fa-times" aria-hidden="true"></i></button>
                                    @endif
                                </div>
                                <div class="input-group-btn">
                                    <a href="{{ Route('cart.deleteItem', ['id' => $product['item']['id']]) }}" class="btn btn-danger btn-sm">삭제</a>
                                </div>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img class="media-object" src="{{ $product['item']['imagePath'] }}" style="width: 128px; height: 128px;">
                                            </div>
                                            <div class="media-body well">
                                                <h4 class="media-heading">{{ $product['item']['title'] }}</h4>
                                                <p>{{ $product['item']['description'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @if( !empty($product['optionItems']) )
                            @foreach($product['optionItems'] as $index => $optionItem)
                                <div class="input-group">
                                    <li class="list-group-item pull-right">
                                        <span class="badge">추가</span>
                                        <strong>{{ $optionItem['title'] }}</strong>
                                        <span class="label label-primary">{{ $optionItem['price'] }}</span>
                                    </li>

                                    <div class="input-group-btn">
                                        <a href="{{ Route('cart.deleteOptionItem', ['menu_id' => $product['item']['id'], 'option_id' => $optionItem['id'], 'option_index' => $index]) }}" class="btn btn-danger btn-sm">삭제</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <hr>
                <a href="{{ route('cart.emptyCart') }}" class="pull-left">모두 비우기</a>
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <p class="pull-right"><strong>합 계: {{ number_format($totalPrice) }} 원</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <hr>
                <a href="{{ route('cart.checkout') }}" type="button" class="btn btn-success pull-right">주문</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>골라~ 골라~ 메뉴를 골라~ Ba:-b</h2>
            </div>
        </div>
    @endif
@endsection