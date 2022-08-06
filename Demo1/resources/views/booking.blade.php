@extends('layouts/common')
@section('content')
    <div class="container-fluid page_banner">
        <div class="banner_img"><img src="images/s-banner.jpg" alt=""></div>
    </div>


    <div class="container text-center page_contact">
        <br><br>
        <div class="title">
            <h2>預約表單</h2>
        </div>
        <hr class="hr_pink">
        <br><br>
        <div>
            <table class="inquire_item ">
                <tr class="product_title">
                    <th class="product_name">產品名稱</th>
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
        <br><br>
        <hr>
        <br><br>
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-12 form_area ">
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
