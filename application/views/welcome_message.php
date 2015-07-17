<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Welcome To CZMS ~ Customized Management System</title>
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
    <link href="<?php echo base_url('assets'); ?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
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
		<!-- begin #content -->
		<div class="content">
			<div class="row">
				<div class="col-md-9">
					<!-- begin panel -->
				    <div class="panel panel-inverse" data-sortable-id="ui-widget-1">
				        <div class="panel-heading">
				            <div class="panel-heading-btn">
				                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				                <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a> -->
				                <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a> -->
				            </div>
				            <h4 class="panel-title">Welcome To CZMS ~ Customized Management System</h4>
				        </div>
				        <div class="panel-body">
					        <div class="note note-info">
								<h4>Selamat Datang di Customized Management System!</h4>
								<p>
								    Customized Management System, Merupakan CMS (Content Management System) Yang Dapat di Modifikasi
								    dan di kembangkan oleh programmer ataupun developer, cocok untuk membuat prototype dan metode agile/metode cepat
								    pengembangan system berbasis web, di lengkapi dengan generator CRUD yang mudah di gunakan, dengan engine Codeigniter 3
								    salah satu framework dengan model MVC (Model View Controller) yang cukup baik dan performa luar biasa.
					            </p>
							</div>
								<p>Jika anda ingin mengganti halaman ini, silahkan edit pada:</p>
								<code>application/views/welcome_message.php</code>
								<br><br>
								<p>Dan untuk controller nya dapat anda temukan di:</p>
								<code>application/controllers/Welcome.php</code>
								<br><br>
								<p>Untuk halaman admin anda bisa menggunakan salah satu user berikut :</p>
								<code>
								| username : root | username : admin | username : user<br>
								| password : root | password : admin | password : user
								</code>
								<br><br>
								<a href="<?= base_url('login');  ?>" title="">Klik di Sini</a> Untuk Login Halaman Admin.
								<br><br>
								<p>Untuk melihat dokumentasi lengkap silahkan <a href="<?php base_url('documentation') ?>" title="Dokumentasi">Klik Di Sini!</a></p>

								<hr>
							<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CZMS Version <strong> 1.1.0 </strong>' : '' ?></p>
				        </div>
				    </div>
				    <!-- end panel -->
				</div>
			</div>
		</div>
		<!-- end #content -->

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
	<script src="<?php echo base_url('assets'); ?>/js/dashboard.min.js"></script>
	<script src="<?php echo base_url('assets'); ?>/js/apps.min.js"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
            handleDashboardGritterNotification();
			// Dashboard.init();
		});
	</script>
	<script>

      var handleDashboardGritterNotification=function(){
      	$(window).load(function(){
      		setTimeout(function(){
      			$.gritter.add({
      				title:"Hallo!",
      				text:"Selamat Datang di Customized Management System",
      				image:"<?php echo base_url('assets'); ?>/img/user-2.jpg",
      				sticky:false,
      				time:"",
      				class_name:"my-sticky-class"})
      		},1e3)}
      	)};
    </script>
</body>
</html>
