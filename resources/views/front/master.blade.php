<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @yield('title')
    @include('front.base.header')

    @yield('header')
</head>
<body class="nav-is-fixed">
@include('front.base.menu')


    <div class="ui page grid main" style="background: #F7F7F7;">
        <div class="four column row">
            @yield('content')
            @yield('details')
            @yield('suggestion')
        </div>
    </div>
    @include('front.base.footer')

@yield('footer')
</body>
</html>