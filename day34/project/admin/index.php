<?php
session_start();
if(isset($_SESSION['admin_id'])){
	header('Location:admin_master.php');
} 
require_once('../classes/Admin.php');
if(isset($_POST['login'])){
	$admin = new Admin();
	$message = $admin->adminLogin($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Hasib Kamal for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Hasib Kamal">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="assets/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="assets/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(assets/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h3 style="color:red"><?php echo (isset($message))?$message:''; ?></h3>
					<h2>Login to your account</h2>
					<form class="form-horizontal" action="" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="email_address" id="username" type="text" placeholder="type email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>

							<div class="button-login">	
								<button name="login" type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="assets/js/jquery-1.9.1.min.js"></script>
	<script src="assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="assets/js/modernizr.js"></script>
	
		<script src="assets/js/bootstrap.min.js"></script>
	
		<script src="assets/js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/jquery.flot.js"></script>
	<script src="assets/js/jquery.flot.pie.js"></script>
	<script src="assets/js/jquery.flot.stack.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="assets/js/jquery.chosen.min.js"></script>
	
		<script src="assets/js/jquery.uniform.min.js"></script>
		
		<script src="assets/js/jquery.cleditor.min.js"></script>
	
		<script src="assets/js/jquery.noty.js"></script>
	
		<script src="assets/js/jquery.elfinder.min.js"></script>
	
		<script src="assets/js/jquery.raty.min.js"></script>
	
		<script src="assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="assets/js/jquery.gritter.min.js"></script>
	
		<script src="assets/js/jquery.imagesloaded.js"></script>
	
		<script src="assets/js/jquery.masonry.min.js"></script>
	
		<script src="assets/js/jquery.knob.modified.js"></script>
	
		<script src="assets/js/jquery.sparkline.min.js"></script>
	
		<script src="assets/js/counter.js"></script>
	
		<script src="assets/js/retina.js"></script>

		<script src="assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
