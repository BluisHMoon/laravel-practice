@extends('layouts/common')
@section('content')
    <div class="container-fluid page_banner">
        <div class="banner_img"><img src="images/s-banner.jpg" alt=""></div>
    </div>

    <div class="container text-center page_news">
        <br><br>
        <div class="title">
            <h2>最新消息</h2>
        </div>
        <hr class="hr_pink">
        <br>
        <div class="row  justify-content-center news_list text-left">
            <div class="col-lg-2 col-12 date">2018.7.12</div>
            <a href="news_page.html" class="col-lg-5 col-12">新聞新聞大標題放置區區區...</a>
        </div>
        <div class="row  justify-content-center news_list text-left">
            <div class="col-lg-2 col-12 date">2018.7.12</div>
            <a href="" class="col-lg-5 col-12">新聞新聞新聞大標題放置區區區...</a>
        </div>
        <div class="row  justify-content-center news_list text-left">
            <div class="col-lg-2 col-12 date">2018.7.12</div>
            <a href="" class="col-lg-5 col-12">新聞新聞新聞新聞大標題放置區區區...</a>
        </div>
        <div class="row  justify-content-center news_list text-left">
            <div class="col-lg-2 col-12 date">2018.7.12</div>
            <a href="" class="col-lg-5 col-12">新聞新聞新聞大標題放置區區區...</a>
        </div>

        <br><br><br>
    </div>

    <div class="container-fluid ad_box">
        <section class="variable slider carousel-center">
            <img src="images/ad.png">
            <img src="images/ad.png">
            <img src="images/ad.png">
            <img src="images/ad.png">
            <img src="images/ad.png">
            <img src="images/ad.png">
        </section>
    </div>
@endsection
