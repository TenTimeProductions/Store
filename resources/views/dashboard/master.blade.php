<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>teste</title>
    @include('dashboard.base.header')
    @yield('header')
</head>
<body>
    @include('dashboard.base.topbar')

    <div id="wrapper">
        @include('dashboard.base.sidebar-menu')
        @yield('content')
        @include('dashboard.features.chat')
        @include('dashboard.base.footer')
    </div>

    @yield('footer')
</body>
</html>