
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Dashboard</a></li>
    <li class="active">Dashboard v2</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Dashboard v2 <small>header small text goes here...</small></h1>
<!-- end page-header -->
<!-- begin row -->
<div class="row">
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-green">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
            <div class="stats-title">ITEM ONLINE TOTAL</div>
            <div class="stats-number">0</div>
            <div class="stats-progress progress">
                <div class="progress-bar" style="width: 70.1%;"></div>
            </div>
            <div class="stats-desc">Better than last week (70.1%)</div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-blue">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-tags fa-fw"></i></div>
            <div class="stats-title">BRAND TOTAL</div>
            <div class="stats-number">0</div>
            <div class="stats-progress progress">
                <div class="progress-bar" style="width: 40.5%;"></div>
            </div>
            <div class="stats-desc">Better than last week (40.5%)</div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-purple">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-shopping-cart fa-fw"></i></div>
            <div class="stats-title">ORDERS TOTAL</div>
            <div class="stats-number">0</div>
            <div class="stats-progress progress">
                <div class="progress-bar" style="width: 76.3%;"></div>
            </div>
            <div class="stats-desc">Better than last week (76.3%)</div>
        </div>
    </div>
    <!-- end col-3 -->
    <!-- begin col-3 -->
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-black">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-comments fa-fw"></i></div>
            <div class="stats-title">MEMBER TOTAL</div>
            <div class="stats-number">0</div>
            <div class="stats-progress progress">
                <div class="progress-bar" style="width: 54.9%;"></div>
            </div>
            <div class="stats-desc">Better than last week (54.9%)</div>
        </div>
    </div>
    <!-- end col-3 -->
</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
    <div class="col-md-8">
        <div class="widget-chart with-sidebar bg-black">
            <div class="widget-chart-content">
                <h4 class="chart-title">
                    Visitors Analytics
                    <small>Where do our visitors come from</small>
                </h4>
                <div id="visitors-line-chart" class="morris-inverse" style="height: 260px;"></div>
            </div>
            <div class="widget-chart-sidebar bg-black-darker">
                <div class="chart-number">
                    1,225,729
                    <small>visitors</small>
                </div>
                <div id="visitors-donut-chart" style="height: 160px"></div>
                <ul class="chart-legend">
                    <li><i class="fa fa-circle-o fa-fw text-success m-r-5"></i> 34.0% <span>New Visitors</span></li>
                    <li><i class="fa fa-circle-o fa-fw text-primary m-r-5"></i> 56.0% <span>Return Visitors</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-inverse" data-sortable-id="index-1">
            <div class="panel-heading">
                <h4 class="panel-title">
                    Visitors Origin
                </h4>
            </div>
            <div id="visitors-map" class="bg-black" style="height: 252px;"></div>
            <div class="list-group">
                <a href="javascript:;" class="list-group-item list-group-item-inverse text-ellipsis">
                    <span class="badge badge-success">100%</span>
                    1. Taiwan
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<!-- begin row -->
<div class="row">
    <!-- begin col-4 -->
    <div class="col-md-8">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-2">
            <div class="panel-heading">
                <h4 class="panel-title">Chat History </h4>
            </div>
            <div class="panel-body bg-silver">
                <div data-scrollbar="true" data-height="200px">
                    <ul class="chats">
                                                <li class="left">
                            <span class="date-time">2017-08-18 18:33:59</span>
                            <a href="javascript:;" class="name">吳佩珊 V368</a>
                            <a href="javascript:;" class="image"><img alt="" src="images/2.jpg" /></a>
                            <div class="message">
                                <a href="/sumi#sumi/member/message/edit?sid=3471">請問這商品( KOS70702-001) 已於7/11 已配貨, 但遲遲未貨到, 是否會貨到, 請盡快確認, 謝謝~</a>
                            </div>
                        </li>
                                            </ul>
                </div>
            </div>

        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
    <!-- begin col-4 -->
    <div class="col-md-4">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-3">
            <div class="panel-heading">
                <h4 class="panel-title">Today's Schedule</h4>
            </div>
            <div id="schedule-calendar" class="bootstrap-calendar"></div>

        </div>
        <!-- end panel -->
    </div>
    <!-- end col-4 -->
</div>
<!-- end row -->
</div>
