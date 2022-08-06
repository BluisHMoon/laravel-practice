<div class="container-fluid footer text-center" id="footer">
    <br>
    <br>
    <div style="font-weight: 900; color: white">
        <img :src="logo" alt="">
    </div>
    <hr class="hr_white">
    <div class="row justify-content-center">
        <a :href="option.link" class="col-lg-1 col-3 footer_menu" v-for="option in options">
            <div>@{{ option.option }}</div>
        </a>
    </div>
    <br>
    <br>
    <div class="row contact  justify-content-center">
        <div class="col-lg-4 col-12 text-left" data-0="transform: translateX(-200px)"
            data-bottom="transform: translateY(0px)">
            <i class="fas fa-map-marker-alt"></i><span>@{{ address }}</span><br>
            <i class="fas fa-mobile-alt"></i><span>@{{ phone }}</span><br>
            <i class="fas fa-envelope"></i> <span>@{{ mail }}</span><br>


        </div>
        <div class="col-lg-4  col-12 message">
            <input class="form-control" type="text" placeholder="姓名">
            <input class="form-control" type="text" placeholder="電話">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="留言"></textarea>
            <div class=" text-center page-padding">
                <a><button class="button-white" data-toggle="modal" data-target="#successful">立即預約</button></a>
            </div>
        </div>

    </div>

</div>


<script src="{{ asset('js/Vue.v2.5.13.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/skrollr.js') }}"></script>
<script src="{{ asset('js/sample_6.js') }}"></script>
<script src='{{ asset('js/slider_2.js') }}'></script>
<script src='{{ asset('js/slider_1.js') }}'></script>
