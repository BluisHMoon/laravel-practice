@extends('layouts/common')
@section('content')
    <div class="container-fluid page_banner">
        <div class="banner_img"><img src="images/s-banner.jpg" alt=""></div>
    </div>


    <div class="container text-center page_about">
        <br><br><br><br>
        <div class="title">
            <h2>這裡放介紹</h2>
        </div>
        <hr class="hr_pink">

        <div class="row justify-content-center">
            <div class="col-lg-7 text-left">

                <br>
                <p>一般人對於“看護”的印象多是提供長時間照護服務。但在許多情況下，人們會可能臨時需要短暫的專業照護服務。像是意外後被迫暫時休養，希望有照護人員輔助生活起居與陪同就醫。或是家庭照顧者想紓解照顧壓力，需要暫時的居家喘息服務。甚至是等待外籍看護交班的空窗期，迫切需要短時間的照顧服務員、看護前來照顧。「優照護」所提供的短期居家照護服務，即是因應這種急迫卻又短時間的照顧需求，讓有需求的家庭，能即時的找尋到合適且願意提供短期的照顧服務員、看護來進行照護服務。
                </p>
                <br>
                <button class="button-main" data-toggle="modal" data-target="#inquirement">立即預約</button>
            </div>
            <div class="col-lg-5 img_box"><img src="images/introduction_1.png" alt=""></div>



        </div>
        <br><br><br><br>
        <br><br>
    </div>



    <!-- 詢價視窗 -->
    <div class="modal fade" id="inquirement" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        詢問清單
                    </h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times-circle close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="rwd-table">
                        <tr class="product_title">
                            <th class="product_name">預約名稱</th>
                            <th class="remove_icon">移除</th>
                        </tr>
                        <tr>
                            <td>項目1111</td>
                            <td class="remove_icon"><i class="fas fa-trash-alt"></i></td>
                        </tr>

                        <tr>
                            <td>項目2222</td>
                            <td class="remove_icon"><i class="fas fa-trash-alt"></i></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <a href="booking.html"><button class="button-main">開始預約</button></a>
                    <a href="service_page.html"><button class="button-main">繼續查看</button></a>
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
