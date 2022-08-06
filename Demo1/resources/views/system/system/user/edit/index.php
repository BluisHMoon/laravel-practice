<link href="./plugins/switchery/switchery.min.css" rel="stylesheet" />
<link href="./plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
<style>.superbox-list {width: 25%;}</style>
<!-- ================== END PAGE LEVEL STYLE ================== -->



<!-- begin #content -->
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li>Home</li>
    <li>系統設定</li>
    <li><a href="/test_admin#system/user">使用者管理</a></li>
    <li class="active">編輯</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">使用者管理 <small>登入系統管理後台資料的管理者</small></h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
<!-- begin col-6 -->
<div class="col-md-6">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="glyphicon glyphicon-resize-full"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="glyphicon glyphicon-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="glyphicon glyphicon-remove"></i></a>
            </div>
            <h4 class="panel-title">基本設定</h4>
        </div>
        <div class="panel-body panel-form">
            <form id="form-main" class="form-horizontal form-bordered" method="post" action="/sumi/system/user/update" data-parsley-validate="true">
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 使用者帳號</label>
                    <div class="col-md-9 control-label text-left">
                        <input type="text" name="account" class="form-control" placeholder="ex: judyyyy" placeholder="Required" data-parsley-required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 密碼</label>
                    <div class="col-md-9">
                        <input type="password" name="ipassword" id="password-indicator-default" placeholder="請至少輸入6碼數字+英文組合的密碼" class="form-control m-b-5" placeholder="Required" data-parsley-required="true" data-parsley-length="[6,20]"/>
                        <!-- 密碼強度 addClass is10, is20, is30 ...is100 -->
                        <div id="passwordStrengthDiv" class="is0 is20 m-t-5"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 密碼確認</label>
                    <div class="col-md-9">
                        <input type="password" name="ipassword_check" id="password-indicator-default" placeholder="請再次輸入相同密碼，確保密碼修改正確" class="form-control m-b-5" placeholder="Required" data-parsley-required="true" data-parsley-equalto="#password-indicator-default"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 暱稱</label>
                    <div class="col-md-9">
                        <input type="text" name="name" class="form-control" value="" placeholder="ex: 林兒霖" data-parsley-required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 電子信箱</label>
                    <div class="col-md-9">
                        <input type="text" name="email" class="form-control" value="" placeholder="ex: judy@gmail.com" data-parsley-required="true" data-parsley-type="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 操作權限</label>
                    <div class="col-md-9">
                        <select class="form-control required" name="author" id="form_author">
                            <option value="">請選擇群組設定</option>
                            <option value="1">系統管理權限</option>
                            <option value="2">商品上架權限</option>
                            <option value="3">網站管理權限</option>
                            <option value="4">訂貨</option>
                        </select>                    
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 頭像識別(50x50)</label>
                    <!--div class="col-md-9 control-label text-left">
                        需先儲存資料才可進行檔案上傳
                    </div-->
                    <div class="col-md-9">
                        <div class="files superbox">
                            <div class="superbox-list fileupload-preview fileupload-exists template-download fade in">
                                <a data-gallery>
                                    <img src="./images/2.jpg" class="superbox-img"/>
                                </a>
                                <a class="btn btn-xs btn-icon btn-circle btn-danger thumb-button delete">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>
                            </div>
                            <div>
                                 <span class="btn btn-inverse btn-xs btn-file" style="position:relative;margin-top: 5px">
                                    <i class="glyphicon glyphicon-picture"></i>
                                     選擇圖片                              
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">
                        <span class="required"></span>
                          狀態
                    </label>
                    <div class="col-md-4">
                        <input class="js-switch" type="checkbox" checked>
                        <span class="text-muted m-l-5">啟用</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-9">
                        <div class="btn-group btn-group-sm">
                            <a class="btn btn-white">取消</a>
                            <a class="btn btn-success save">儲存</a>
                            <a class="btn btn-success save">儲存並返回</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- end panel -->
</div>
<!-- end col-6 -->

<script>
    $(document).ready(function() {        
        App.restartGlobalFunction();
        
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
          var switchery = new Switchery(html);
        });
    });
</script>

</div>
<!-- end row -->

</div>
<!-- end #content -->
