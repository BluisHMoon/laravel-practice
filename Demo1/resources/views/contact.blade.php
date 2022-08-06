@extends('layouts/common')
@section('content')
    <div class="container-fluid page_banner">
        <div class="banner_img"><img src="images/s-banner.jpg" alt=""></div>
    </div>


    <div class="container text-center page_contact">
        <br><br>
        <div class="title">
            <h2>聯絡我們</h2>
        </div>
        <hr class="hr_pink">

        <h5 class="text_cont">
            一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。
        </h5>
        <br><br><br><br>
        <div class="row">
            <div class="col-lg-6 col-12 form_area">
                <form class="text-left">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputname"> 姓名</label>
                            <input type="name" class="form-control" id="inputname" placeholder="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputphone">電話</label>
                            <input type="phone" class="form-control" id="inputphone" placeholder="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputmail">信箱</label>
                        <input type="text" class="form-control" id="inputmail" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">地址</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">留言</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <a href=""><button class="button-main">送 出</button></a>
                    </div>
                </form>
                <br><br>
            </div>
            <div class="col-lg-6  col-12 map page_address">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116476.22896914139!2d120.61847167799407!3d24.175865338082588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693cd1b5ba3d03%3A0xfeef2081512e413e!2z6Z2S546J6Kit6KiI!5e0!3m2!1szh-TW!2stw!4v1546912337075"
                    width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="address_info text-center">
                    <i class="fas fa-map-marker-alt"><span>@{{ address }}</span></i><br>

                    <i class="fas fa-mobile-alt">
                        <span>@{{ phone }}</span>
                    </i><br>
                    <i class="fas fa-envelope"><span>@{{ mail }}</span></i>

                </div>
                <br>

            </div>



        </div>

        <br><br>
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
