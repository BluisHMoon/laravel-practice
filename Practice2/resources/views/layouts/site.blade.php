<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : "首頁"; }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mobile.css') }}" media="screen and (max-width : 568px)">
    <script type="text/javascript" src="{{ asset('js/mobile.js') }}"></script>
</head>

<body>
    <div id="header">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="">
        </a>
        <ul id="navigation">
            <li class="selected">
                <a href="{{ url('/') }}">首頁</a>
            </li>
            <li>
                <a href="{{ url('about') }}">關於我們</a>
            </li>
            <li>
                <a href="{{ url('gallery') }}">圖片迴廊</a>
            </li>
            <li>
                <a href="{{ url('blog') }}">部落格</a>
            </li>
            <li>
                <a href="{{ url('contact') }}">聯絡我們</a>
            </li>
        </ul>
    </div>
    <div id="body">
        @yield('content');
    </div>
    <div id="footer">
        <div>
            <p>{!! isset($copyright) ? $copyright : '&copy; '. date("Y") .' by Mustacchio. All rights reserved.' !!}</p>
            <ul>
                <li>
                    <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
                </li>
                <li>
                    <a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
                </li>
                <li>
                    <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
                </li>
                <li>
                    <a href="http://pinterest.com/fwtemplates/" id="pinterest">pinterest</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
