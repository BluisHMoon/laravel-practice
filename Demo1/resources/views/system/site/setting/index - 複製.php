
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="./plugins/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" />
<link href="./plugins/bootstrap-editable/inputs-ext/address/address.css" rel="stylesheet" />

<link href="./plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="./plugins\bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
<link href="./plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
<link href="./plugins/select2/select2.css" rel="stylesheet" />
<style>
    /*樣式衝突調整*/
   .form-horizontal.form-bordered .editableform .form-group > div {padding: 0;border-left: 0 solid #fff;}
   .panel-form .wysihtml5-toolbar {padding:0;}
</style>
<!-- ================== END PAGE LEVEL STYLE ================== -->



<!-- begin #content -->
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li>Home</li>
    <li>網站設定</li>
    <li>基本資料</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">基本資料 <small>網站標題、公司資料、電話地址，維護設定等資料設定</small></h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
<!-- begin col-6 -->
<div class="col-md-6">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">基本設定</h4>
        </div>
        <div class="panel-body panel-form">
            <div id="form-main" class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 網站標題</label>
                    <div class="col-md-9">
                        <a class="editable" data-type="text" data-name="meta.title" data-pk="1" data-original-title="網站標題">
                            韓爸有衣                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 電話號碼</label>
                    <div class="col-md-9">
                        <a class="editable" data-type="text" data-name="meta.tel" data-pk="1" data-original-title="電話">
                            04-2512-0212                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">傳真號碼</label>
                    <div class="col-md-9">
                        <a class="editable" data-type="text" data-name="meta.fax" data-pk="1" data-original-title="傳真">
                            04-2522-2083                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 手機號碼</label>
                    <div class="col-md-9">
                        <a class="editable" data-type="text" data-name="meta.phone" data-pk="1" data-original-title="手機">
                            0986-526516                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 電子郵件</label>
                    <div class="col-md-9">
                        <a class="editable" href="javascript:;" data-type="text" data-name="meta.email" data-pk="1" data-original-title="電子郵件">
                            r79789@gmail.com                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">LINE ID</label>
                    <div class="col-md-9">
                        <a class="editable" data-type="text" data-name="meta.line" data-pk="1" data-original-title="LINE ID">
                            r79789                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">地址</label>
                    <div class="col-md-9">
                        <a class="editable" href="javascript:;" data-type="text" data-name="meta.address" data-pk="1" data-original-title="地址">
                            420 台中市豐原區中陽東街68號                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 版權說明</label>
                    <div class="col-md-9">
                        <a class="editable" href="javascript:;" data-type="text" data-name="meta.copyright" data-pk="1" data-original-title="版權說明">
                            韓劇童星品牌童裝☆韓爸有衣☆批發網                        </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">網站關鍵字</label>
                    <div class="col-md-9">
                        <a class="editable" href="javascript:;" data-type="text" data-name="meta.keyword" data-pk="1" data-original-title="網站關鍵字">
                            首爾連線批發網,韓劇童星品牌童裝                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end panel -->
</div>
<!-- end col-6 -->

<!-- begin col-6 -->
<div class="col-md-6">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">維護設定</h4>
        </div>
        <div class="panel-body panel-form">
            <div id="form-sub" class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 網站狀態</label>
                    <div class="col-md-9">
                        <a class="editable" href="javascript:;" data-type="select" data-name="maintenance.online" data-pk="1" data-value="1" data-original-title="網站狀態"></a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 維護說明內容<br/><a id="edit-repair-content"><i class="fa fa-pencil"></i> 修改</a></label>
                    <div class="col-md-9">
                        <div data-original-title="Enter notes" data-toggle="manual" data-name="maintenance.content" data-type="wysihtml5" data-pk="1" id="repair-content" class="editable" tabindex="-1">親愛的韓爸有衣會員您好：<br>為了提升資料品質，目前正在進行資料維護，<br>預計於19:15結束，造成您的不便敬請見諒</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">IP白名單</label>
                    <div class="col-md-9">
                        <a href="javascript:;" data-type="select2" data-pk="1" data-name="maintenance.true_ip" data-original-title="Enter tags" class="editable editable-click">
                                                    </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">IP黑名單</label>
                    <div class="col-md-9">
                        <a href="javascript:;" data-type="select2" data-pk="1" data-name="maintenance.false_ip" data-original-title="Enter tags" class="editable editable-click">
                                                        223.27.34.232                                                    </a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">系統偵測</label>
                    <div class="col-md-9">
                        您目前的IP為「36.234.5.101」
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end panel -->
</div>
<!-- end col-6 -->

    <!-- begin col-6 -->
    <div class="col-md-6">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">爬蟲程式</h4>
            </div>
            <div class="panel-body panel-form">
                <div id="form-tree" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><span class="required"></span> 網址</label>
                        <div class="col-md-9">
                            <a class="editable" href="javascript:;" data-type="text" data-name="sync.domain" data-pk="1" data-value="http://product.littledream.co.kr/doctorzzang/" data-original-title="網址">
                                http://product.littledream.co.kr/doctorzzang/                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><span class="required"></span> 帳號</label>
                        <div class="col-md-9">
                            <a class="editable" href="javascript:;" data-type="text" data-name="sync.account" data-pk="1" data-value="doctorzzang" data-original-title="帳號">
                                doctorzzang                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><span class="required"></span> 密碼</label>
                        <div class="col-md-9">
                            <a class="editable" href="javascript:;" data-type="text" data-name="sync.password" data-pk="1" data-value="ekrxj!#%" data-original-title="密碼">
                                ekrxj!#%                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end panel -->
    </div>
    <!-- end col-6 -->

</div>
<!-- end row -->

</div>
<!-- end #content -->
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script>
    App.restartGlobalFunction();
    App.setPageTitle('網站系統/基本資料');

    $.getScript('./plugins/bootstrap-editable/js/bootstrap-editable.min.js').done(function() {
        $.getScript('./plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js').done(function() {
             $.getScript('./plugins/select2/select2.min.js').done(function() {
                 
                           
                                $.getScript('http://kr8851.com/assets/sumi/plugins/bootstrap3-editable/inputs-ext/wysihtml5/wysihtml5.js').done(function() {
                        $.getScript('http://kr8851.com/assets/sumi/plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js').done(function() {
            $.getScript('./plugins/moment/moment.min.js').done(function() {
                var form = $('#form-main,#form-sub,#form-tree');
                form.find('.editable[data-type="text"]').editable({
                    url: form.attr('action')
                });
                 form.find('.editable[data-type="select"]').editable({
                    url: form.attr('action'),
                    source: [
                        {value: 1, text: '正常啟用'},
                        {value: 0, text: '網站維護'}
                    ],
                    display: function(value, sourceData) {
                        var colors = {1: "green", 0: "red"},
                            elem = $.grep(sourceData, function(o){return o.value == value;});
                        if(elem.length) {
                            $(this).text(elem[0].text).css("color", colors[value]);
                        } else {
                            $(this).empty();
                        }
                    }
                });
                form.find('.editable[data-type="combodate"]').editable({
                    url: form.attr('action'),
                    placement: 'left',
                    combodate: {
                        firstItem: 'name',
                        minYear: 2014,
                        maxYear: 2020,
                        minuteStep: 1
                    }
                });
//
                form.find('.editable[data-type="select2"]').editable({
                    url: form.attr('action'),
                    inputclass: 'input-large',
                    select2: {
                        tags: ['223.143.204.81', '114.35.45.224', '223.27.34.232'],
                        tokenSeparators: [",", " "]
                    }
                });
                form.find('#edit-repair-content').click(function(e) {
                    e.stopPropagation();
                    e.preventDefault();
                    form.find('#repair-content').editable('toggle');
                });});

            }); }); });
        });
    });



</script>
<!-- ================== END PAGE LEVEL JS ================== -->