<ul class="nav nav-tabs">
    <li role="presentation" class="{{$selectedCategory == "category" ? "active" : ""}}"><a href="{{route('admin.categoryList')}}">카테고리 관리</a></li>
    <li role="presentation" class="{{$selectedCategory == "menu" ? "active" : ""}}"><a href="{{route('admin.menuList')}}">메뉴 관리</a></li>
    <li role="presentation" class="{{$selectedCategory == "optionMenu" ? "active" : ""}}"><a href="{{route('admin.menuList')}}">옵션메뉴 관리</a></li>
</ul>