
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
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles-responsive.css">
    
    <style>
        .modal-dialog{
            z-index: 9999;
        }
    </style>
</head>
<body>
<!-- start: BODY -->
<body class="login">
<div class="row">
    <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="logo">
<!--            <img src="./images/logo.png">-->
        </div>
        <!-- start: LOGIN BOX -->
        
        <!-- X 軸旋轉特效 class="animated flipInX" -->
        <div class="box-login animated flipInX">
            <h3>Sign in to your account</h3>
            <p>
                Please enter your name and password to log in.
            </p>
            <form class="form-login" method="POST" action="">

                <div class="errorHandler alert alert-danger no-display" >
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.</div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" name="account" placeholder="Username">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="glyphicon glyphicon-lock"></i>
                             </span>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-green pull-right" onclick="location.href='/test_admin/'" data-toggle="ajax">
                            Login <i class="glyphicon glyphicon-circle-arrow-right"></i>
                        </button>
                    </div>

                </fieldset>
            </form>
            <!-- start: COPYRIGHT -->
            <div class="copyright">
                2017 &copy; JJ Management Platform.
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- end: LOGIN BOX -->

    </div>

</body>
</html>
