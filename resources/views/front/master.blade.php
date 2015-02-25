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


    <div class="ui page grid main">
        <div class="row">
            <div class="column">
                <div class="ui message main">
                    <h1 class="ui header">Hello, world!</h1>
                    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    <a class="ui blue button">Learn more »</a>
                </div>
            </div>
        </div>

        <div class="four column row">
            @yield('content')
        </div>
    </div>
    @include('front.base.footer')

@yield('footer')
</body>
</html>