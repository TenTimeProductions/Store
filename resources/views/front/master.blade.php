<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loja</title>
    @include('front.base.header')

    @yield('header')
</head>
<body>
@include('dashboard.base.topbar')

    @yield('content')
    @include('dashboard.base.footer')

@yield('footer')
</body>
</html>