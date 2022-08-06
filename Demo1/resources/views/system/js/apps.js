/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 1.5.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v1.5/admin/
    ----------------------------
        APPS CONTENT TABLE
    ----------------------------

    <!-- ======== GLOBAL SCRIPT SETTING ======== -->
    01. Handle Scrollbar

    02. Handle Sidebar - Menu
    03. Handle Sidebar - Mobile View Toggle
    04. Handle Sidebar - Minify / Expand
    05. Handle Page Load - Fade in
    06. Handle Panel - Remove / Reload / Collapse / Expand
    07. Handle Panel - Draggable
    08. Handle Tooltip & Popover Activation
    09. Handle Scroll to Top Button Activation

    <!-- ======== Added in V1.2 ======== -->
    10. Handle Theme & Page Structure Configuration
    11. Handle Theme Panel Expand
    12. Handle After Page Load Add Class Function - added in V1.2

    <!-- ======== Added in V1.5 ======== -->
    13. Handle Save Panel Position Function - added in V1.5
    14. Handle Draggable Panel Local Storage Function - added in V1.5
    15. Handle Reset Local Storage - added in V1.5
    16. Handle Ajax Page Load - added in V1.5
    17. Handle Ajax Page Load Url - added in V1.5
    18. Handle Ajax Sidebar Toggle Content - added in V1.5
    19. Handle Url Hash Change - added in V1.5
    20. Handle Pace Page Loading Plugins - added in V1.5

    <!-- ======== APPLICATION SETTING ======== -->
    Application Controller
*/


/* 01. Handle Scrollbar
------------------------------------------------ */
var handleSlimScroll = function() {
    "use strict";
    $('[data-scrollbar=true]').each( function() {
        generateSlimScroll($(this));
    });
};
var generateSlimScroll = function(element) {
    var dataHeight = $(element).attr('data-height');
        dataHeight = (!dataHeight) ? $(element).height() : dataHeight;

    var scrollBarOption = {
        height: dataHeight,
        alwaysVisible: true
    };
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        scrollBarOption.wheelStep = 3;
        scrollBarOption.touchScrollStep = 100;
    }
    $(element).slimScroll(scrollBarOption);
};


/* 02. Handle Sidebar - Menu
------------------------------------------------ */
var handleSidebarMenu = function() {
    "use strict";
    $('.sidebar .nav > .has-sub > a').click(function() {
        var target = $(this).next('.sub-menu');
        var otherMenu = '.sidebar .nav > li.has-sub > .sub-menu';

        if ($('.page-sidebar-minified').length === 0) {
            $(otherMenu).not(target).slideUp(250, function() {
                $(this).closest('li').removeClass('expand');
            });
            $(target).slideToggle(250, function() {
                var targetLi = $(this).closest('li');
                if ($(targetLi).hasClass('expand')) {
                    $(targetLi).removeClass('expand');
                } else {
                    $(targetLi).addClass('expand');
                }
            });
        }
    });
    $('.sidebar .nav > .has-sub .sub-menu li.has-sub > a').click(function() {
        if ($('.page-sidebar-minified').length === 0) {
            var target = $(this).next('.sub-menu');
            $(target).slideToggle(250);
        }
    });
};


/* 03. Handle Sidebar - Mobile View Toggle
------------------------------------------------ */
var handleMobileSidebarToggle = function() {
    var sidebarProgress = false;
    $('.sidebar').on('click touchstart', function(e) {
        if ($(e.target).closest('.sidebar').length !== 0) {
            sidebarProgress = true;
        } else {
            sidebarProgress = false;
            e.stopPropagation();
        }
    });
    $(document).on('click touchstart', function(e) {
        if ($(e.target).closest('.sidebar').length === 0) {
            sidebarProgress = false;
        }
        if (!e.isPropagationStopped() && sidebarProgress !== true) {
            if ($('#page-container').hasClass('page-sidebar-toggled')) {
                $('#page-container').removeClass('page-sidebar-toggled');
            }
            if ($(window).width() < 979) {
                if ($('#page-container').hasClass('page-with-two-sidebar')) {
                    $('#page-container').removeClass('page-right-sidebar-toggled');
                }
            }
        }
    });
    $('[data-click=right-sidebar-toggled]').click(function(e) {
        e.stopPropagation();
        var targetContainer = '#page-container';
        var targetClass = 'page-right-sidebar-collapsed';
            targetClass = ($(window).width() < 979) ? 'page-right-sidebar-toggled' : targetClass;
        if ($(targetContainer).hasClass(targetClass)) {
            $(targetContainer).removeClass(targetClass);
        } else {
            $(targetContainer).addClass(targetClass);
        }
        if ($(window).width() < 480) {
            $('#page-container').removeClass('page-sidebar-toggled');
        }
    });
    $('[data-click=sidebar-toggled]').click(function(e) {
        e.stopPropagation();
        var sidebarClass = 'page-sidebar-toggled';
        var targetContainer = '#page-container';
        if ($(targetContainer).hasClass(sidebarClass)) {
            $(targetContainer).removeClass(sidebarClass);
        } else {
            $(targetContainer).addClass(sidebarClass);
        }
        if ($(window).width() < 480) {
            $('#page-container').removeClass('page-right-sidebar-toggled');
        }
    });
};


/* 04. Handle Sidebar - Minify / Expand
------------------------------------------------ */
var handleSidebarMinify = function() {
    $('[data-click=sidebar-minify]').click(function(e) {
        e.preventDefault();
        var sidebarClass = 'page-sidebar-minified';
        var targetContainer = '#page-container';
        if ($(targetContainer).hasClass(sidebarClass)) {
            $(targetContainer).removeClass(sidebarClass);
            if ($(targetContainer).hasClass('page-sidebar-fixed')) {
                generateSlimScroll($('#sidebar [data-scrollbar="true"]'));
            }
        } else {
            $(targetContainer).addClass(sidebarClass);
            if ($(targetContainer).hasClass('page-sidebar-fixed')) {
                $('#sidebar [data-scrollbar="true"]').slimScroll({destroy: true});
                $('#sidebar [data-scrollbar="true"]').removeAttr('style');
            }
            // firefox bugfix
            $('#sidebar [data-scrollbar=true]').trigger('mouseover');
        }
        $(window).trigger('resize');
    });
};


/* 05. Handle Page Load - Fade in
------------------------------------------------ */
var handlePageContentView = function() {
    "use strict";
    $.when($('#page-loader').addClass('hide')).done(function() {
        $('#page-container').addClass('in');
    });
};


/* 06. Handle Panel - Remove / Reload / Collapse / Expand
------------------------------------------------ */
var handlePanelAction = function() {
    "use strict";

    // remove
    $('[data-click=panel-remove]').hover(function() {
        $(this).tooltip({
            title: 'Remove',
            placement: 'bottom',
            trigger: 'hover',
            container: 'body'
        });
        $(this).tooltip('show');
    });
    $('[data-click=panel-remove]').click(function(e) {
        e.preventDefault();
        $(this).tooltip('destroy');
        $(this).closest('.panel').remove();
    });

    // collapse
    $('[data-click=panel-collapse]').hover(function() {
        $(this).tooltip({
            title: 'Collapse / Expand',
            placement: 'bottom',
            trigger: 'hover',
            container: 'body'
        });
        $(this).tooltip('show');
    });
    $('[data-click=panel-collapse]').click(function(e) {
        e.preventDefault();
        $(this).closest('.panel').find('.panel-body').slideToggle();
    });

    // reload
    $('[data-click=panel-reload]').hover(function() {
        $(this).tooltip({
            title: 'Reload',
            placement: 'bottom',
            trigger: 'hover',
            container: 'body'
        });
        $(this).tooltip('show');
    });
    $('[data-click=panel-reload]').click(function(e) {
        e.preventDefault();
        var target = $(this).closest('.panel');
        if (!$(target).hasClass('panel-loading')) {
            var targetBody = $(target).find('.panel-body');
            var spinnerHtml = '<div class="panel-loader"><span class="spinner-small"></span></div>';
            $(target).addClass('panel-loading');
            $(targetBody).prepend(spinnerHtml);
            if(typeof($('#data-table').dataTable()) !== 'undefined') {
                tableReLoad(true);
            }
            setTimeout(function() {
                $(target).removeClass('panel-loading');
                $(target).find('.panel-loader').remove();
            }, 2000);
        }
    });

    // expand
    $('[data-click=panel-expand]').hover(function() {
        $(this).tooltip({
            title: 'Expand / Compress',
            placement: 'bottom',
            trigger: 'hover',
            container: 'body'
        });
        $(this).tooltip('show');
    });
    $('[data-click=panel-expand]').click(function(e) {
        e.preventDefault();
        var target = $(this).closest('.panel');
        var targetBody = $(target).find('.panel-body');
        var targetTop = 40;
        if ($(targetBody).length !== 0) {
            var targetOffsetTop = $(target).offset().top;
            var targetBodyOffsetTop = $(targetBody).offset().top;
            targetTop = targetBodyOffsetTop - targetOffsetTop;
        }

        if ($('body').hasClass('panel-expand') && $(target).hasClass('panel-expand')) {
            $('body, .panel').removeClass('panel-expand');
            $('.panel').removeAttr('style');
            $(targetBody).removeAttr('style');
        } else {
            $('body').addClass('panel-expand');
            $(this).closest('.panel').addClass('panel-expand');

            if ($(targetBody).length !== 0 && targetTop != 40) {
                var finalHeight = 40;
                $(target).find(' > *').each(function() {
                    var targetClass = $(this).attr('class');

                    if (targetClass != 'panel-heading' && targetClass != 'panel-body') {
                        finalHeight += $(this).height() + 30;
                    }
                });
                if (finalHeight != 40) {
                    $(targetBody).css('top', finalHeight + 'px');
                }
            }
        }
        $(window).trigger('resize');
    });
};


/* 07. Handle Panel - Draggable
------------------------------------------------ */
var handleDraggablePanel = function() {
    "use strict";
    var target = $('.panel').parent('[class*=col]');
    var targetHandle = '.panel-heading';
    var connectedTarget = '.row > [class*=col]';

    $(target).sortable({
        handle: targetHandle,
        connectWith: connectedTarget,
        stop: function(event, ui) {
            ui.item.find('.panel-title').append('<i class="fa fa-refresh fa-spin m-l-5" data-id="title-spinner"></i>');
            handleSavePanelPosition(ui.item);
        }
    });
};


/* 08. Handle Tooltip & Popover Activation
------------------------------------------------ */
var handelTooltipPopoverActivation = function() {
    "use strict";
    $('[data-toggle=tooltip]').tooltip();
    $('[data-toggle=popover]').popover();
};


/* 09. Handle Scroll to Top Button Activation
------------------------------------------------ */
var handleScrollToTopButton = function() {
    "use strict";
    $(document).scroll( function() {
        var totalScroll = $(document).scrollTop();

        if (totalScroll >= 200) {
            $('[data-click=scroll-top]').addClass('in');
        } else {
            $('[data-click=scroll-top]').removeClass('in');
        }
    });

    $('[data-click=scroll-top]').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });
};


/* 10. Handle Theme & Page Structure Configuration - added in V1.2
------------------------------------------------ */


/* 11. Handle Theme Panel Expand - added in V1.2
------------------------------------------------ */

/* 12. Handle After Page Load Add Class Function - added in V1.2
------------------------------------------------ */
var handleAfterPageLoadAddClass = function() {
    if ($('[data-pageload-addclass]').length !== 0) {
        $(window).load(function() {
            $('[data-pageload-addclass]').each(function() {
                var targetClass = $(this).attr('data-pageload-addclass');
                $(this).addClass(targetClass);
            });
        });
    }
};


/* 13. Handle Save Panel Position Function - added in V1.5
------------------------------------------------ */
var handleSavePanelPosition = function(element) {
    "use strict";
    if ($('.ui-sortable').length !== 0) {
        var newValue = [];
        var index = 0;
        $.when($('.ui-sortable').each(function() {
            var panelSortableElement = $(this).find('[data-sortable-id]');
            if (panelSortableElement.length !== 0) {
                var columnValue = [];
                $(panelSortableElement).each(function() {
                    var targetSortId = $(this).attr('data-sortable-id');
                    columnValue.push({id: targetSortId});
                });
                newValue.push(columnValue);
            } else {
                newValue.push([]);
            }
            index++;
        })).done(function() {
            var targetPage = window.location.href;
                targetPage = targetPage.split('?');
                targetPage = targetPage[0];
            localStorage.setItem(targetPage, JSON.stringify(newValue));
            $(element).find('[data-id="title-spinner"]').delay(500).fadeOut(500, function() {
                $(this).remove();
            });
        });
    }
};


/* 14. Handle Draggable Panel Local Storage Function - added in V1.5
------------------------------------------------ */
/*var handleLocalStorage = function() {
    "use strict";
    if (typeof(Storage) !== 'undefined') {
        var targetPage = window.location.href;
            targetPage = targetPage.split('?');
            targetPage = targetPage[0];
        var panelPositionData = localStorage.getItem(targetPage);

        if (panelPositionData) {
            panelPositionData = JSON.parse(panelPositionData);
            var i = 0;
            $('.panel').parent('[class*="col-"]').each(function() {
                var storageData = panelPositionData[i];
                var targetColumn = $(this);
                $.each(storageData, function(index, data) {
                    var targetId = '[data-sortable-id="'+ data.id +'"]';
                    if ($(targetId).length !== 0) {
                        var targetHtml = $(targetId).clone();
                        $(targetId).remove();
                        $(targetColumn).append(targetHtml);
                    }
                });
                i++;
            });
        }
    } else {
        alert('Your browser is not supported with the local storage');
    }
};*/


/* 15. Handle Reset Local Storage - added in V1.5
------------------------------------------------ */
var handleResetLocalStorage = function() {
    "use strict";
    $('[data-click=reset-local-storage]').live('click', function(e) {
        e.preventDefault();

        var targetModalHtml = ''+
        '<div class="modal fade" data-modal-id="reset-local-storage-confirmation">'+
        '    <div class="modal-dialog">'+
        '        <div class="modal-content">'+
        '            <div class="modal-header">'+
        '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>'+
        '                <h4 class="modal-title"><i class="fa fa-refresh m-r-5"></i> Reset Local Storage Confirmation</h4>'+
        '            </div>'+
        '            <div class="modal-body">'+
        '                <div class="alert alert-info m-b-0">Would you like to RESET all your saved widgets and clear Local Storage?</div>'+
        '            </div>'+
        '            <div class="modal-footer">'+
        '                <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal"><i class="fa fa-close"></i> No</a>'+
        '                <a href="javascript:;" class="btn btn-sm btn-inverse" data-click="confirm-reset-local-storage"><i class="fa fa-check"></i> Yes</a>'+
        '            </div>'+
        '        </div>'+
        '    </div>'+
        '</div>';

        $('body').append(targetModalHtml);
        $('[data-modal-id="reset-local-storage-confirmation"]').modal('show');
    });
    $('[data-modal-id="reset-local-storage-confirmation"]').live('hidden.bs.modal', function() {
        $('[data-modal-id="reset-local-storage-confirmation"]').remove();
    });
    $('[data-click=confirm-reset-local-storage]').live('click', function(e) {
        e.preventDefault();
        var localStorageName = window.location.href;
            localStorageName = localStorageName.split('?');
            localStorageName = localStorageName[0];
        localStorage.removeItem(localStorageName);
        window.location.href = document.URL;
        location.reload();
    });
};


/* 16. Handle Ajax Page Load - added in V1.5
------------------------------------------------ */
var default_content = '<div class="p-t-40 p-b-40 text-center f-s-20 content"><i class="fa fa-warning fa-lg text-muted m-r-5"></i> <span class="f-w-600 text-inverse">Error 404! Page not found.</span></div>';

var handleLoadPage = function(hash) {
    Pace.restart();
    var targetUrl = hash.replace('#','');
    $('.jvectormap-label, .jvector-label, .AutoFill_border ,#gritter-notice-wrapper, .ui-autocomplete, .colorpicker, .FixedHeader_Header, .FixedHeader_Cloned .lightboxOverlay, .lightbox').remove();
    $.ajax({
        type: 'POST',
        url: targetUrl,	//with the page number as a parameter
        dataType: 'html',	//expect html to be returned
        success: function(data) {
            $('#ajax-content').html(data);
            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 250);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#ajax-content').html(default_content);
        }
    });
};


/* 17. Handle Ajax Page Load Url - added in V1.5
------------------------------------------------ */
var handleCheckPageLoadUrl = function(hash) {
    hash = (hash) ? hash : '#dashboard';
    if (hash === '') {
        $('#ajax-content').html(default_content);
    } else {
        handleLoadPage(hash);
        var last = hash.lastIndexOf("/edit");
        if(last != -1) hash = hash.substring(0, last);
        $('.sidebar [href="'+hash+'"][data-toggle=ajax]').trigger('click');
    }
};


/* 18. Handle Ajax Sidebar Toggle Content - added in V1.5
------------------------------------------------ */
var handleSidebarAjaxClick = function() {
    $('.sidebar [data-toggle=ajax]').click(function() {
        var targetLi = $(this).closest('li');
        var targetParentLi = $(this).parents();
        $('.sidebar li').not(targetLi).not(targetParentLi).removeClass('active');
        $(targetLi).addClass('active');
        $(targetParentLi).addClass('active');
    });
};


/* 19. Handle Url Hash Change - added in V1.5
------------------------------------------------ */
var handleHashChange = function() {
    $(window).hashchange(function() {
        handleLoadPage(window.location.hash);
    });
};


/* 20. Handle Pace Page Loading Plugins - added in V1.5
------------------------------------------------ */
var handlePaceLoadingPlugins = function() {
    Pace.on('hide', function(){
        $('.pace').addClass('hide');
    });
};


/* 21. 待發送訊息處理 - added in imagine
 ------------------------------------------------ */
var handleSendSystemMessage = function() {
    if (localStorage.getItem('message')) {
        $.gritter.add(JSON.parse(localStorage.getItem('message')));
        localStorage.removeItem('message');
    }
};

/* 22. 觸發刪除確認方法 - added in imagine
 ------------------------------------------------ */
var handleDeleteConfirm = function(sid) {
    sid = handleGetSelect(sid);
    if(sid === false) return false;
    var check = true;
    //刪除確認(避免誤刪)
    bootbox.dialog({
        message: '<div class="alert alert-danger m-b-0"><h4><i class="fa fa-info-circle"></i> 刪除確認</h4><p>您正在進行刪除資料，刪除後將無法復原，您確定要將選取的資料刪除嗎?</p></div>',
        buttons: {
            cancel: {
                label: "取消", className: "btn-white btn-sm",
                callback: function () {
                    bootbox.hideAll();
                }
            },
            success: {
                label: "確認刪除", className: "btn-danger btn-sm",
                callback: function () {
                    if (check == true) {check = false;}else{return false;} //防止重複送出
                    bootbox.hideAll();
                    if(location.hash.lastIndexOf("/edit") == -1){
                        var uri = location.hash.substring(1),method='reload';
                    }else{
                        var uri = location.hash.substring(1, location.hash.lastIndexOf("/edit")),method='return';
                    }
                    $.ajax({
                        url: uri + '/delete',type: "delete",
                        data: {sid: sid},dataType: 'json',
                        cache: false,async: false,
                        error: function (request, status, error) {$.gritter.add({title: 'Error',text: error});},
                        success: function (json) {
                            if(method == 'return'){
                                if(json['result'] =='success'){
                                    localStorage.setItem('message', JSON.stringify({title: json['result'], text: json['msg']}));
                                    location = '/#'+uri;
                                }
                            }else{
                                if(typeof($('#data-table').dataTable()) !== 'undefined') {
                                    tableReLoad(true);
                                }
                                if($('#icheckAll').length !== 0) $('#icheckAll').attr('checked', false);
                                $.gritter.add({title: json['result'], text: json['msg']});
                            }
                        }
                    });
                }
            }
        }
    });
};

/* 23. 取得資料表格鍵值/Checkbox方法 - added in imagine
 ------------------------------------------------ */
var handleGetSelect = function(sid){
    var checkBox = new Array();
    // 取得刪除的系統序號
    if (sid==null) {
        $('input:checkbox:checked[name="id"]').each(function (i) { checkBox[i] = this.value; }); //使用核取方塊選擇刪除
        //檢查必須選取一筆資料
        if (checkBox.length == 0) {
            $.gritter.add({title: 'warning',text: '請選擇項目'});
            return false;
        }
    } else {
        checkBox[0] = sid; //使用按鈕直接刪除
    }
    return JSON.stringify(checkBox);
};

/* 24. 重設表單送出事前處理 - added in imagine
 ------------------------------------------------ */
var handleDeleteBeforeSubmit = function() {
    if(typeof(handleBeforeSubmit)!='undefined') delete handleBeforeSubmit;
};


/* 25. 系統登出確認 - added in imagine
 ------------------------------------------------ */

/*使用說明(將目前使用者從系統登出)
    5分鐘前跳出提示 登入期限10分鐘*/
/* 26. 系統登入逾時通知 - added in imagine
 ------------------------------------------------ */
/*var handleTimeoutDialog = function() {
    
    var expiration = localStorage.getItem('system.expiration');
    if(expiration==null){
        var expiration = new Date();
        expiration = (expiration.getTime()+(120*60*1000)); //120分鐘
        localStorage.setItem('system.expiration', expiration);
    }
    var now = new Date();
    //console.log((expiration - now.getTime()) / 1000);

    $.timeoutDialog({
        timeout:(expiration - now.getTime()) / 1000,
        countdown: 600,//(30*60)
        title:'登入有效期限即將到期，自動登出提示',
        message:'您將於 {0} 秒後自動登出系統',
        question:'請問您是否繼續操作?',
        keep_alive_button_text:'繼續操作',
        sign_out_button_text:'登出系統',
        keep_alive_url:'/sumi/keep',
        logout_redirect_url: '/sumi/logout',
        restart_on_yes: true
    });
};*/

/* 27. 貨幣千分位格式 - added in imagine
 ------------------------------------------------ */
var formatMoney = function(nStr) {
    nStr += '';
    var x = nStr.split('.'),
        x1 = x[0],
        x2 = x.length > 1 ? '.' + x[1] : '',
        rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
};

/* 28. 千分位與$與空白 轉一般數字 - added in imagine
 ------------------------------------------------ */
var removeComma = function(n){
    return n.replace(/[$ ,]+/g, '');
};

/* 29. 日期選擇套件
 ------------------------------------------------ */
var handleDatePlugins = function() {
    $.getScript('http://kr8851.com/assets/sumi/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js').done(function () {
        $.getScript('http://kr8851.com/assets/sumi/plugins/bootstrap-datepicker/js/locales/bootstrap-datepicker.zh-TW.js').done(function () {
            $('#ajax-content').on("mousemove", ".date:not(.hasDaterange)", function () {
                $(this).addClass('hasDaterange').datepicker({
                    todayHighlight: true,
                    format: "yyyy-mm-dd",
                    todayBtn: "linked",
                    language: "zh-TW",
                    forceParse: false
                });
            });
        });
    });
};

/* 29. 表單搜尋條件重設
 ------------------------------------------------ */
var reset = function(){
    document.getElementById("form-search").reset();
    $('.hasSelectpicker','#form-search').selectpicker('render');
};

/* 30. 訂單方法檢查
 ------------------------------------------------ */
var customOrderEditStatus = 0;



/* Application Controller
------------------------------------------------ */
var App = function () {
	"use strict";

	return {
		//main function
		init: function () {
		    // draggable panel & local storage
			handleDraggablePanel();
			//handleLocalStorage();
			handleResetLocalStorage();

			// slimscroll
			handleSlimScroll();

			// panel
			handlePanelAction();

			// tooltip
			handelTooltipPopoverActivation();

			// page load
			handlePageContentView();
			handleAfterPageLoadAddClass();
			handlePaceLoadingPlugins();

			// scroll to top
			handleScrollToTopButton();

            // sidebar
            handleSidebarMenu();
            handleMobileSidebarToggle();
            handleSidebarMinify();

            // theme configuration
            //handleThemePageStructureControl();
            //handleThemePanelExpand();

            // ajax
            handleSidebarAjaxClick();
            handleCheckPageLoadUrl(window.location.hash);
			handleHashChange();

            // plugins
            handleDatePlugins();

            // timeout Dialog
            //handleTimeoutDialog();

			// ajax cache setup
			$.ajaxSetup({
                cache: false
            });
		},
		setPageTitle: function(pageTitle) {
		    document.title = pageTitle;
		},
		restartGlobalFunction: function() {
			handleDraggablePanel();
			//handleLocalStorage();
			handleSlimScroll();
			handlePanelAction();
			handelTooltipPopoverActivation();
			handleAfterPageLoadAddClass();
            handleSendSystemMessage();
            handleDeleteBeforeSubmit();
		}
    };
}();