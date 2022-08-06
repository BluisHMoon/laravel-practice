
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li>Home</li>
        <li>系統設定</li>
        <li class="active">權限群組管理</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">權限群組管理 <small>將權限設定至權限群組後，可直接在使用者管理可直接依照該設定直接套用</small></h1>
    <!-- end page-header -->

    <!-- begin panel -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a type="button" class="btn btn-success btn-xs" href="#system/author/edit">新增</a>
                <a type="button" class="btn btn-danger btn-xs" onclick="handleDeleteConfirm()">刪除</a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="glyphicon glyphicon-resize-full"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="glyphicon glyphicon-repeat"></i></a>
            </div>
            <h4 class="panel-title">資料列表</h4>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div id="data-table_wrapper" class="dataTables_wrapper no-footer">
                    <div class="datatable-header"></div>
                    <div class="dtTables"></div>
                    <table id="data-table" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="data-table_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 10px;">
                                    <input type="checkbox" id="icheckAll" class="checkAll advanced"/> 
                                    <label for="icheckAll"><span></span></label>
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1">
                                    權限群組名稱
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 90px;">
                                    建立時間
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 90px;">
                                    更新時間
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 30px;">
                                    狀態
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 70px;">
                                    操作
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--odd row >> class="odd"-->
                            <tr role="row" class="odd">
                                <td>
                                    <input type="checkbox" class="advanced" id="i1" name="id"/> 
                                    <label for="i1"><span></span></label>
                                </td>
                                <td>
                                    系統管理權限
                                </td>
                                <td>2014-09-11 14:10:17</td>
                                <td>2014-09-11 14:10:17</td>
                                <td><span class="btn btn-xs btn-primary">啟用</span></td>
                                <td>
                                    <!--編輯按鈕-->
                                    <a class="btn btn-xs btn-success" href="/test_admin/#system/author/edit" data-toggle="ajax"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <!--刪除按鈕-->
                                    <a class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></a>
                                </td>                                
                            </tr>
                            <!--odd even >> class="even"-->
                            <tr role="row" class="even">
                                <td>
                                    <input type="checkbox" class="advanced" id="i2" name="id"/> 
                                    <label for="i2"><span></span></label>
                                </td>
                                <td>
                                    網站管理權限
                                </td>
                                <td>2014-09-11 14:10:17</td>
                                <td>2014-09-11 14:10:17</td>
                                <td><span class="btn btn-xs btn-primary">啟用</span></td>
                                <td>
                                    <a class="btn btn-xs btn-success" href="/test_admin/#system/author/edit" data-toggle="ajax"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <a class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></a>
                                </td>                                
                            </tr>
                            <!--odd row >> class="odd"-->
                            <tr role="row" class="odd">
                                <td>
                                    <input type="checkbox" class="advanced" id="i1" name="id"/> 
                                    <label for="i1"><span></span></label>
                                </td>
                                <td>
                                    系統管理權限
                                </td>
                                <td>2014-09-11 14:10:17</td>
                                <td>2014-09-11 14:10:17</td>
                                <td><span class="btn btn-xs btn-primary">啟用</span></td>
                                <td>
                                    <!--編輯按鈕-->
                                    <a class="btn btn-xs btn-success" href="/test_admin/#system/author/edit" data-toggle="ajax"><span class="glyphicon glyphicon-pencil"></span></a>
                                    <!--刪除按鈕-->
                                    <a class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></a>
                                </td>                                
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="datatable-footer">
                        <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">顯示第 1 至 5 項結果，共 5 項</div>
                        <div class="dataTables_paginate paging_full_numbers" id="data-table_paginate">
                            <a class="paginate_button first disabled" aria-controls="data-table" data-dt-idx="0" tabindex="0" id="data-table_first">頁首</a>
                            <a class="paginate_button previous disabled" aria-controls="data-table" data-dt-idx="1" tabindex="0" id="data-table_previous">&lt;</a>
                            <span><a class="paginate_button current" aria-controls="data-table" data-dt-idx="2" tabindex="0">1</a></span>
                            <a class="paginate_button next disabled" aria-controls="data-table" data-dt-idx="3" tabindex="0" id="data-table_next">&gt;</a>
                            <a class="paginate_button last disabled" aria-controls="data-table" data-dt-idx="4" tabindex="0" id="data-table_last">頁尾</a>
                        </div>
                        <div class="dataTables_length" id="data-table_length">
                            <label>
                                <span>每頁顯示筆數:</span> 
                                <select name="data-table_length" aria-controls="data-table" class="">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end panel -->
</div>
<!-- end #content -->
	
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script>
    
    App.restartGlobalFunction();
    App.setPageTitle('網站系統/權限群組管理');

</script>
<!-- ================== END PAGE LEVEL JS ================== -->