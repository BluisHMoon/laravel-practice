<link href="plugins/switchery/switchery.min.css" rel="stylesheet" />
<link href="plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
<style>.superbox-list {width: 25%;}</style>
<!-- ================== END PAGE LEVEL STYLE ================== -->



<!-- begin #content -->
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li>Home</li>
    <li>系統設定</li>
    <li><a href="/test_admin#/system/author">權限群組管理</a></li>
    <li class="active">編輯</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">權限群組管理 <small>將權限設定至權限群組後，可直接在使用者管理可直接依照該設定直接套用</small></h1>
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
            <form id="form-main" class="form-horizontal form-bordered" method="post" action="/sumi/system/author/update" data-parsley-validate="true">
                                <div class="form-group">
                    <label class="col-md-3 control-label"><span class="required"></span> 權限群組名稱</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" placeholder="ex: 系統管理員" placeholder="Required" data-parsley-required="true" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">群組設定</label>
                    <div class="col-md-9">
                        <div id="jstree_demo_div" class=""></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">狀態</label>
                    <div class="col-md-4">
                        <input class="js-switch" type="checkbox" checked>
                        <span class="text-muted m-l-5">啟用</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-9">
                        <div class="btn-group btn-group-sm">
                            <a href="/sumi#sumi/system/author" class="btn btn-white">取消</a>
                            <a class="btn btn-success save" method="reload">儲存</a>
                            <a class="btn btn-success save" method="return">儲存並返回</a>
                                                    </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- end panel -->
</div>
<!-- end col-6 -->


</div>
<!-- end row -->


</div>
<!-- end #content -->

<script>
    $(document).ready(function() {        
        App.restartGlobalFunction();
        
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
          var switchery = new Switchery(html);
        });

        $('#jstree_demo_div').jstree({'plugins':["wholerow","checkbox"], 'core' : {
            'data' : [
               { "id" : "ajson1", "parent" : "#", "text" : "系統設定", "icon" : "glyphicon glyphicon-cog" },
               { "id" : "ajson1-1", "parent" : "ajson1", "text" : "使用者管理", "icon" : "glyphicon glyphicon-folder-close" },
               { "id" : "ajson1-2", "parent" : "ajson1", "text" : "權限群組管理", "icon" : "glyphicon glyphicon-folder-close"  },
               { "id" : "ajson1-3", "parent" : "ajson1", "text" : "系統訊息檢視", "icon" : "glyphicon glyphicon-folder-close"  },
               { "id" : "ajson1-4", "parent" : "ajson1", "text" : "附屬應用程式", "icon" : "glyphicon glyphicon-folder-close"  },
               { "id" : "ajson1-5", "parent" : "ajson1", "text" : "系統維護紀錄", "icon" : "glyphicon glyphicon-folder-close"  },
               { "id" : "ajson2", "parent" : "#", "text" : "網站設定", "icon" : "glyphicon glyphicon-tasks" },
               { "id" : "ajson3", "parent" : "#", "text" : "會員系統", "icon" : "glyphicon glyphicon-user" },
               { "id" : "ajson4", "parent" : "#", "text" : "廠商系統", "icon" : "glyphicon glyphicon-king" },
               { "id" : "ajson5", "parent" : "#", "text" : "產品系統", "icon" : "glyphicon glyphicon-briefcase" },
               { "id" : "ajson6", "parent" : "#", "text" : "銷售系統", "icon" : "glyphicon glyphicon-shopping-cart" },
               { "id" : "ajson7", "parent" : "#", "text" : "報表系統", "icon" : "glyphicon glyphicon-signal" },
               { "id" : "ajson8", "parent" : "#", "text" : "成本系統", "icon" : "glyphicon glyphicon-stats" }
            ]
        }});
        
        
    });
</script>
</div>
<!-- end row -->

</div>
<!-- end #content -->
