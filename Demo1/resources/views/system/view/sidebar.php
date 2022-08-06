<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="images/2.jpg" alt="" /></a>
                </div>
                <div class="info">
                    使用者名稱<small>網站管理權限</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">功能選單</li>
            <li class="has-sub active">
                <a href="#dashboard" data-toggle="ajax">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="glyphicon glyphicon-cog"></i>
                    <span>系統設定</span>
                </a>
                <ul class="sub-menu">
                  <li><a href="#system/user" data-toggle="ajax"><span>使用者管理</span></a></li>
                  <li><a href="#system/author" data-toggle="ajax"><span>權限群組管理</span></a></li>
                  <li><a href="#system/message" data-toggle="ajax"><span>系統訊息檢視</span></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="glyphicon glyphicon-tasks"></i>
                    <span>網站設定</span>
                </a>
                <ul class="sub-menu">
                  <li><a href="#site/setting" data-toggle="ajax"><span>基本資料</span></a></li>
                  <li><a><span>入款銀行</span></a></li>
                  <li><a><span>首頁橫幅</span></a></li>
                  <li><a><span>最新消息</span></a></li>
                  <li><a href="#site/about" data-toggle="ajax"><span>關於我們</span></a></li>
                  <li><a><span>購物說明</span></a></li>
                  <li><a><span>商品說明</span></a></li>
                  <li><a ><span>尺寸說明</span></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="glyphicon glyphicon-user"></i>
                    <span>會員系統</span>
                </a>
                <ul class="sub-menu">
                    <li><a><span>會員資料</span></a></li>
                    <li><a><span>登入紀錄</span></a></li>
                    <li><a><span>入款通知</span></a></li>
                    <li><a><span>交易紀錄</span></a></li>
                    <li><a href="#member/message" data-toggle="ajax"><span>訊息管理</span></a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="glyphicon glyphicon-king"></i>
                    <span>廠商系統</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#" data-toggle="ajax"><span>廠商資料</span></a></li>
                    <li><a href="#" data-toggle="ajax"><span>登入紀錄</span></a></li>
                </ul>
            </li>
            
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="glyphicon glyphicon-briefcase"></i>
                    <span>產品系統</span>
                </a>
                <ul class="sub-menu">
                    <li class="has-sub ">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>類別管理</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#"><span>商城設定</span></a></li>
                            <li><a href="#"><span>品牌設定</span></a></li>
                            <li><a href="#"><span>主類設定</span></a></li>
                            <li><a href="#"><span>次類設定</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>元素管理</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#"><span>顏色設定</span></a></li>
                            <li><a href="#"><span>材質設定</span></a></li>
                            <li><a href="#"><span>售價轉換</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub hidden">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <span>履歷查詢</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#"><span>庫存異動</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span>商品管理</span></a></li>
                    <li><a href="#"><span>庫存管理</span></a></li>
                </ul>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="glyphicon glyphicon-shopping-cart"></i>
                        <span>銷售系統</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="has-sub ">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <span>狀態查詢</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#" data-toggle="ajax"><span>全部狀態</span></a></li>
                                <li><a href="#" data-toggle="ajax"><span>備貨中</span></a></li>
                                <li>
                                    <a href="#sumi/sell/order/detail?status=2" data-toggle="ajax">
                                        <span>已配貨</span>
                                        <i class="fa fa-tag text-theme m-l-5"></i>
                                    </a>
                                </li>
                                <li><a href="#sumi/sell/order/detail?status=3" data-toggle="ajax"><span>已入庫</span><i class="fa fa-sign-out text-theme m-l-5"></i></a></li>
                                <li><a href="#sumi/sell/order/detail?status=4" data-toggle="ajax"><span>待出貨</span></a></li>
                                <li><a href="#sumi/sell/order/detail?status=5" data-toggle="ajax"><span>已出貨</span></a></li>
                                <li><a href="#sumi/sell/order/detail?status=8" data-toggle="ajax"><span>已售完</span></a></li>
                                <li><a href="#sumi/sell/order/detail?status=9" data-toggle="ajax"><span>已取消</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#sumi/sell/order/status/stockin" data-toggle="ajax"><span>設定入庫</span></a></li>
                        <li class="has-sub ">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <span>預先下特</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="#sumi/sell/preorder/detail" data-toggle="ajax"><span>下訂清單</span></a></li>
                                <li><a href="#sumi/sell/preorder/schedule" data-toggle="ajax"><span>檔期設定</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#sumi/sell/order" data-toggle="ajax"><span>訂單管理</span></a></li>
                        <li><a href="#sumi/sell/shipping" data-toggle="ajax"><span>出貨管理</span></a></li>
                    </ul>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="glyphicon glyphicon-signal"></i>
                            <span>報表系統</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#sumi/report/order/picking" data-toggle="ajax"><span>已配統計</span></a></li>
                            <li><a href="#sumi/report/income/profit" data-toggle="ajax"><span>收支報表</span></a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;">
                            <b class="caret pull-right"></b>
                            <i class="glyphicon glyphicon-stats"></i>
                            <span>成本系統</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#sumi/income/costs" data-toggle="ajax"><span>成本管理</span></a></li>
                        </ul>
                    </li>    
                    <!-- begin sidebar minify button -->
                    <li>
                        <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify">  
                            <i class="glyphicon glyphicon-menu-left"></i>
                        </a>
                    </li>
                    <!-- end sidebar minify button -->
                </ul>
                <!-- end sidebar nav -->
            </div>
            <!-- end sidebar scrollbar -->
        </div>
    <div class="sidebar-bg"></div>