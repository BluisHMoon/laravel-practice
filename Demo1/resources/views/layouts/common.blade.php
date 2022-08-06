<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sample_6.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css"
        integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/slider_3.css') }}">
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel='stylesheet' href="{{ asset('css/slider_1.css') }}">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg  navbar-light sticky-top text-center">
        <a class="navbar-brand" href="/"><img :src="logo" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown" v-for="option in options">
                    <a class="nav-link" :href="option.link" :class="{ 'dropdown-toggle': option.dropdowm == 'true' }"
                        :data-toggle="option.toggle">@{{ option.option }}</a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" :href="dropdowmOption.link"
                            v-for="dropdowmOption in option.dropdowmOptions">@{{ dropdowmOption.item }}</a>
                    </div>
                </li>
            </ul>
            <div class="contect_phone">預約專線：@{{ phone }}</div>
        </div>
    </nav>

    @yield('content')
    @extends('layouts/footer')

</body>


</html>
