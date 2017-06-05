<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title><?php print $title; ?></title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/style.css">

</head>
<body class="blank" style = "background-color:#8d652f;">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>DASAAC TRAVELS- Admin Panel</h1><p></p><div class="spinner"> <div class="rect1"></div> <div class="rect2"></div> <div class="rect3"></div> <div class="rect4"></div> <div class="rect5"></div> </div> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="color-line"></div>
<div class="login-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md" style = "color:white;">
                <h3>PLEASE LOGIN TO CONTINUE</h3>
            </div>
            <div class="hpanel">
                <div class="panel-body">
				 <p id="msg-container" class="help-block small"><?php if(isset($msg)){echo $msg;}?></p>
				<?php echo validation_errors();?>
                        <form   method="POST" action="<?php echo base_url(); ?>auth/login" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="example@gmail.com" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Your unique username</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" placeholder="******" required="" value="" name="pwd" id="pwd" class="form-control">
                                <span class="help-block small">Your strong password</span>
                            </div>
                            <div class="checkbox-primary">
                                <input type="checkbox" class="i-checks" checked>
                                     Remember login
                            </div>
                            <button class="btn btn-primary btn-block">Login</button>
                            <a class="btn btn-default btn-block" href="<?php echo base_url(); ?>">Cancel</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style = "color:white;">
            <strong>DASAAC TRAVELS</strong> - Admin Panel <br/> <?php echo date('Y'); ?> Copyright 4ELEVEN
        </div>
    </div>
</div>


<!-- Vendor scripts -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="<?php echo base_url(); ?>assets/scripts/homer.js"></script>
  <script>
            $(function () {
                var msgp = $('#msg-container');
                setTimeout(function () {
                    msgp.fadeOut('slow', function () {
                        $(this).text('').fadeIn();
                    });
                }, 20000);
            });
        </script>
</body>
</html>