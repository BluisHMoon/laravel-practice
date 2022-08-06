/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 1.5.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v1.5/admin/
*/
var tableCheckBoxAction = function() {
    "use strict";

    $('input[type="text"]','#form-search').keydown(function(e){
        if (e.keyCode == '13'){
            e.preventDefault();
            if($(this).attr('name') == undefined) return false;
            tableReLoad();
        }
    });

    /** 表格全選 **/
    $("#data-table").on("click",'.checkAll',function(){
        var check = $("input[name='id']");
        for (var i = 0; i < check.length; i++) {
            if (this.checked == true) {
                check[i].checked = true;
                check.parent().parent().addClass('selected');
            } else {
                check[i].checked = false;
                check.parent().parent().removeClass('selected');
            }
        }
    });

    /** 單選checkbox 背景顏色 **/
    $("#data-table").on("change","input[name='id']",function(){
        if (this.checked == true) {
            $(this).parent().parent().addClass('selected');
        }else{
            if ( $(this).parent().parent().hasClass('selected') ) {
                $(this).parent().parent().removeClass('selected');
            }
        }
    });
};

var tableReLoad = function(draw) {
    "use strict";
    oCache.iCacheLower = -1;
    if(draw==null) draw = false;
    $('#data-table').dataTable().fnDraw(draw);
};

var TableManageDefault = function () {
	"use strict";
    return {
        //main function
        init: function () {
            if ($('#data-table').length !== 0) {
                $.getScript('/assets/sumi/plugins/DataTables/js/jquery.dataTables.js').done(function() {
                    $.getScript('/assets/sumi/plugins/jquery.datatable/server.side.js').done(function() {
                        tableCheckBoxAction();
                        handleDataTableDefault();
                    });
                });
            }
        }
    };
}();