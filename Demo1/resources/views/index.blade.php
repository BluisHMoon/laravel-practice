@extends('layouts/common')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/banner_1.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner-02.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/banner-03.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container-fluid section_2 text-center">
        <br>
        <br>
        <br>
        <h2>台中居家看護首選</h2>
        <hr class="hr_white">
        <div>
            預約前可先瀏覽照護人員個人資料與評價推薦，清楚透明的資訊讓您放心<br><br>
            給您更多居家照護的選擇
        </div>

        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="container-fluid section_3">
        <div class="container text-center">
            <br>
            <br>
            <br>
            <h2 data-bottom-top="transform: translateY(-50px);opacity: 0">創新的預約居家照護服務，能自由安排照護人員的時間</h2>
            <br>
            <br>
            <br>
            <div class="row icon">
                <div class="col-lg-4 col-12 info"><img src="images/icon-1.svg" alt="">
                    <br>
                    <br>
                    <h3>最優秀的照護職人</h3>
                    <hr class="icon_hr">
                    <p>品牌培訓專業照護員品牌培訓專業照護員品牌培訓專業照護員</p>
                </div>
                <br><br>
                <div class="col-lg-4 col-12 info"><img src="images/icon-2.svg" alt="">
                    <br>
                    <br>
                    <h3>送出預約後立馬獲得回覆</h3>
                    <hr class="icon_hr">
                    <p>經歷過找不到照護人員的窘境，可一次預約多個時段，有急需時快速找人。</p>
                </div>
                <br><br>
                <div class="col-lg-4 col-12 info"><img src="images/icon-3.svg" alt="">
                    <br>
                    <br>
                    <h3>彈性安排使用短時數照護服務</h3>
                    <hr class="icon_hr">
                    <p>讓您可以彈性安排使用居家照護服務的時間，即使僅僅幾個小時的短期照護需求。</p>
                </div>
            </div>
            <br>
            <br>
            <button class="button-main" onclick="location.href=''">了解更多</button>
            <br>
            <br>
            <br>
            <br>

        </div>
    </div>
    <div class="container-fluid section_4">
        <div class="container text-center">
            <br>
            <br>
            <h2>除了外籍看護之外，給您更多居家照護的選擇</h2>
            <br>
            <br>
            <br>
            <div class="row justify-content-center">
                <div class="col-lg-7 text-left">
                    <h3>居家照護</h3>
                    <br>
                    <p>一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                    </p>
                    <br>
                    <a href=""><button class="button-main">了解更多</button></a>
                </div>
                <div class="col-lg-5 img_box"><img src="images/introduction_1.png" alt=""></div>


                <div class="col-lg-5 img_box"><img src="images/introduction_2.png" alt=""></div>
                <div class="col-lg-7 text-left">
                    <h3>居家照護</h3>
                    <br>
                    <p>一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                    </p>
                    <br>
                    <a href=""><button class="button-main">了解更多</button></a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
@endsection
