@extends('layouts/common')
@section('content')
    <div class="container-fluid page_banner">
        <div class="banner_img"><img src="images/s-banner.jpg" alt=""></div>
    </div>
    <div class="container">
        <ul class="nav nav-pills mb-3 justify-content-center " id="pills-tab" role="tablist">
            <li class="nav-item ">
                <a class="button-main" data-toggle="pill" href="#about_1">關於我們1</a>
            </li>
            <li class="nav-item">
                <a class="button-main" data-toggle="pill" href="#about_2">關於我們2</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="about_1">
                <div class="text-center page_about">
                    <div class="title">
                        <h2>AAAAAAAA</h2>
                    </div>
                    <hr class="hr_pink">

                    <h5 class="text_cont text-left">
                        一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                        <br>
                        <br>
                        一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                    </h5>
                    <br><br><br><br>
                    <div class="row">
                        <img src="images/introduction_1.png" alt="" class="col-lg-4">
                        <img src="images/introduction_2.png" alt="" class="col-lg-4">
                        <img src="images/introduction_3.png" alt="" class="col-lg-4">
                    </div>
                    <br><br><br><br><br><br>
                </div>
            </div>


            <div class="tab-pane fade" id="about_2">
                <div class="text-center page_about">
                    <div class="title">
                        <h2>BBBBBBBB</h2>
                    </div>
                    <hr class="hr_pink">

                    <h5 class="text_cont text-left">
                        一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                        <br>
                        <br>
                        一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                    </h5>
                    <br><br><br><br>
                    <div class="row">
                        <img src="images/introduction_1.png" alt="" class="col-lg-4">
                        <img src="images/introduction_2.png" alt="" class="col-lg-4">
                        <img src="images/introduction_3.png" alt="" class="col-lg-4">
                    </div>
                    <br><br><br><br><br><br>
                </div>
            </div>
        </div>
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
