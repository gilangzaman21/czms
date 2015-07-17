<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>HalloWorld | Customized Management System version 1.1.0</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url('assets'); ?>/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets'); ?>/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets'); ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets'); ?>/plugins/DataTables/css/data-table.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets'); ?>/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed in gradient-enabled">
		<!-- begin #header -->
			<?php $this->load->view('templates/admin/header'); ?>
		<!-- begin #sidebar -->
			<?php $this->load->view('templates/admin/sidebar'); ?>

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Dashboard <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">

				<?php echo $contents;?>

			</div>
			<!-- end row -->
		</div>
		<!-- end #content -->

		<!-- begin #footer -->
		<div id="footer" class="footer">
		    &copy; 2015 CzMS <a href="http://czms-id.com" title="">Customized Management System</a>. All Rights Reserved
		</div>
		<!-- end #footer -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->

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
	<script src="<?php echo base_url('assets'); ?>/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url('assets'); ?>/js/dashboard.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/js/apps.min.js"></script>

	<!-- Datatables -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('assets'); ?>/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url('assets'); ?>/plugins/DataTables/js/dataTables.tableTools.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
			<?php if ($this->session->flashdata('message_text') != NULL): ?>
	            handleDashboardGritterNotification();
			<?php endif; ?>
			TableManageCombine.init();
			
			// Dashboard.init();
		});
	</script>
	<script>

      var handleDashboardGritterNotification=function(){
      	$(window).load(function(){
      		setTimeout(function(){
      			$.gritter.add({
      				title:"Message!",
      				text:"<?= $this->session->flashdata('message_text'); ?>",
      				// image:"<?php echo base_url('assets'); ?>/img/user-2.jpg",
      				sticky:false,
      				time:"",
      				class_name:"my-sticky-class"})
      		},1e3)}
      	)};
    </script>
</body>
</html>
