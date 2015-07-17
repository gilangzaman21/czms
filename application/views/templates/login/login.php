<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Customized Management System | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('assets'); ?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/theme/default.css" rel="stylesheet" id="theme" />
    <link href="<?php echo base_url('assets'); ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets'); ?>/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="<?php echo base_url('assets'); ?>/img/login-bg/bg-7.jpg" data-id="login-cover-image" alt="" />
                </div>

                <div class="news-caption">
                    <div class="pull-left">
                        <span class="fa-stack fa-3x text-success">
                            <i class="fa fa-circle-o-notch fa-stack-2x"></i>
                            <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <h4 class="caption-title">
                        &nbsp; Customized Management System
                    </h4>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Easy Way For Web Based Application Environment.</p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="fa-stack fa-1x text-success pull-left">
                            <i class="fa fa-circle-o-notch fa-stack-2x"></i>
                            <i class="fa fa-paint-brush fa-stack-1x"></i>
                        </span>
                        &nbsp;CzMS Login
                        <small>&nbsp;&nbsp;Customized Login System</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="<?php base_url('login'); ?>" method="POST" class="margin-bottom-0">
                        <div class="form-group m-b-15">
                            <input type="text" class="form-control input-lg" name="username" placeholder="Email Address/Username" />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" class="form-control input-lg" name="password" placeholder="Password" />
                        </div>
                        <div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" /> Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            Not a member yet? Click <a href="<?= base_url('register');?> " class="text-success">here</a> to register.
                        </div>
                        <hr />
                        <p class="text-center text-inverse">
                            &copy; CzMS All Right Reserved 2015
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('assets'); ?>/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url('assets'); ?>/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url('assets'); ?>/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url('assets'); ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/jquery-cookie/jquery.cookie.js"></script>

	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('assets'); ?>/js/apps.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/gritter/js/jquery.gritter.js"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
            <?php  if ($this->session->flashdata('message_text') != NULL): ?>
            handleDashboardGritterNotification();
            <?php endif; ?>
		});
	</script>
	<script>
      var handleDashboardGritterNotification=function(){
        $(window).load(function(){
            setTimeout(function(){
                $.gritter.add({
                    title:"Message!",
                    text:"<?= $this->session->flashdata('message_text'); ?>",
                    sticky:false,
                    time:"",
                    class_name:"my-sticky-class"})
            },1e3)}
        )};
    </script>
</body>

</html>
