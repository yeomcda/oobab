@extends('layouts.master')

@section('title')
    배고픈 우주인
@endsection

@section('content')
    <h1>DashBoard</h1>
    @if(!is_null($notCheckoutOrders))
        <a href="{{ route('checkout.index') }}">
            <div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                미입금된 정산내역이 존재합니다. 클릭하여 확인해 주세요 :-ㅇ
            </div>
        </a>
    @endif

    <!-- 즐겨찾기 메뉴 표시. -->
    <div class="row">
        @if(!($bookmarkMenus->isEmpty()))
            <h4>즐겨찾는 메뉴</h4>
        @endif
        <ul id="lightSlider">
            @foreach($bookmarkMenus as $menu)
                <li>
                    <div class="thumbnail">
                        <img src="{{ $menu->imagePath }}" alt="...">
                        <div class="caption">
                            <div class="thumb-menu-title">
                                <p>{{ $menu->title }}</p>
                            </div>
                            <div class="clearfix">
                                <div class="pull-left price">{{ $menu->price }} 원</div>
                                <div class="pull-right">
                                    @php
                                        if($menu["isBookmark"])
                                        {
                                            $linkUrl = route('menu.deleteBookmark', ['id'=>$menu->id]);
                                            $bookmarkClassName = "fa-star";
                                        }
                                        else
                                        {
                                            $linkUrl = route('menu.addBookmark', ['id'=>$menu->id]);
                                            $bookmarkClassName = "fa-star-o";
                                        }
                                    @endphp
                                    <a href="{{$linkUrl}}"><i class="fa fa-lg {{$bookmarkClassName}}" aria-hidden="true" style="color: #f0ad4e;"></i></a>
                                    <a href="{{ route('cart.addItem', ['id'=>$menu->id]) }}" class="btn btn-warning " role="button">담기</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- 정산, 미청구 주문 차트 표시. -->
    {!! $checkoutChart->render() !!}
    {!! $orderChart->render() !!}

    <!-- javascript -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightSlider").lightSlider(
                {
                    item:5,
                    slideMove:5,
                    speed:600,
                    responsive : [
                        {
                            breakpoint:800,
                            settings: {
                                item:3,
                                slideMove:1,
                                slideMargin:6
                            }
                        },
                        {
                            breakpoint:480,
                            settings: {
                                item:2,
                                slideMove:1
                            }
                        }
                    ]
                }
            );
        });
    </script>
@endsection