<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('dashboard.index') }}" style="font-size: 40px;">OoBa:-b</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('menu.index') }}"><i class="fa fa-cutlery" aria-hidden="true"></i> 메뉴</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="btn-warning">
                    <a href="{{ route('cart.list') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> 주문
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->username }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('user.profile') }}">계정 관리</a></li>
                            <li><a href="{{ route('order.index') }}">주문 내역</a></li>
                            <li><a href="{{ route('checkout.index') }}">정산 내역</a></li>
                            <li role="separator" class="divider"></li>
                            @if(Auth::user()->hasAnyRole(['Manager','Admin']))
                                <li class="dropdown-header list-group-item-danger">관리자 전용</li>
                                <li><a href="{{ route('admin.orderShow') }}">오늘의 주문</a></li>
                                <li><a href="{{ route('admin.orderList') }}">주문 내역</a></li>
                                @if(Auth::user()->hasAnyRole(['Admin']))
                                    <li><a href="{{ route('admin.checkoutShow') }}">정산 청구</a></li>
                                    <li><a href="{{ route('admin.checkoutList') }}">정산 내역</a></li>
                                @endif
                                <li role="separator" class="divider"></li>
                            @endif
                            <li><a href="{{ route('user.logout') }}">로그아웃</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('user.signin') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> 로그인</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>