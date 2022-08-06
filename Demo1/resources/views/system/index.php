
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title id="page-title">網站系統</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->    
    <?php include_once('view/include_top.php'); ?>
    <!-- ================== END BASE CSS STYLE ================== -->
    
</head>
<body>
<!-- begin #page-loader -->
<!--div id="page-loader" class="fade in"><span class="spinner"></span></div-->
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">    
    <!-- begin #header -->
    <?php include_once('view/header.php'); ?>
    <!-- end #header -->

    <!-- begin #sidebar -->
    <?php include_once('view/sidebar.php'); ?>

    <!-- end #sidebar -->
    
    <!-- begin #ajax-content -->
    <div id="ajax-content"><?php include_once('view/index_content.php'); ?></div>
    <!-- end #ajax-content -->


    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->


<!-- ================== BEGIN BASE JS ================== -->
 <?php include_once('view/include_script.php'); ?>



</body>
</html>
