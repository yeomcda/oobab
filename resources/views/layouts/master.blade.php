<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{!! asset('src/css/application.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/lightslider.css') !!}">
    {!! Charts::assets() !!}
    @yield('styles')
</head>
<body>
    @include('partials.header')
    <div class="container" style="margin-bottom: 100px;">
        @include('partials.error-message')
        @yield('content')
    </div>
    @include('partials.bottom')

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/707f3bee88.js"></script>
    <script type="text/javascript" src="{!! asset('js/lightslider.js') !!}"></script>
    @yield('scripts')
</body>
</html>