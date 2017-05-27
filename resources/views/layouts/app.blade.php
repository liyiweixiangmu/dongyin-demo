<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '杭州东银网络科技') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', '杭州东银网络科技') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation" class="{{ Request::getPathInfo()== '/' ? 'active' : ''  }}"><a href="/">首页</a></li>
                        <li role="presentation" class="{{ Request::getPathInfo()== '/introduce' ? 'active' : ''  }}"><a href="introduce">公司介绍</a></li>
                        <li role="presentation" class="{{ Request::getPathInfo()== '/about' ? 'active' : ''  }}"><a href="about">关于我们</a></li>
                        <li role="presentation" class="{{ Request::getPathInfo()== '/products' ? 'active' : ''  }}"><a href="products">产品展示</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('li.tree-toggler > a').click(function() {
                $(this).parent().children('ul').toggle(300);
            })
        })
    </script>
</body>
</html>
