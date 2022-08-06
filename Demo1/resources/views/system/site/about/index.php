
<!-- begin #ajax-content -->
<div id="content" class="content">
    <ol class="breadcrumb pull-right">
        <li>Home</li>
        <li>網站設定</li>
        <li>關於我們</li>
    </ol>
    <h1 class="page-header">關於我們
        <small>介紹關於公司成立資訊、經營理念等等訊息</small>
    </h1>
    <!--begain row-->
    <div class="row">
        <div class="col-md-12 ui-sortable">
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><span class="glyphicon glyphicon glyphicon glyphicon glyphicon-resize-full"></span></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><span class="glyphicon glyphicon glyphicon glyphicon-minus"></span></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><span class="glyphicon glyphicon glyphicon-remove"></span></a>                        
                    </div>
                    <h4 class="panel-title">內容</h4>
                </div>
                <div class="panel-body panel-form">
                    <form id="form-main" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" width="100%">文字編輯器區塊</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-3 control-label"></span>
                            <div class="col-sm-9">
                                <div class="btn-group btn-group-sm">
                                    <a class="btn btn-success save">儲存</a>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- end #ajax-content -->



<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script>
    App.restartGlobalFunction();
    App.setPageTitle('網站系統/關於我們');
</script>
<!-- ================== END PAGE LEVEL JS ================== -->