<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">
	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>adminassets/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="http://ableproadmin.com/6.1/html/files/images/favicon.ico" type="image/x-icon">
	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url();?>adminassets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/icon/icofont/css/icofont.css">
	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/bootstrap/css/bootstrap.min.css">
	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/plugins/waves/css/waves.min.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/main.css">
	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/responsive.css">
	<!--color css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adminassets/css/color/color-6.css" id="color"/>
</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material">
						<div class="text-center">
							<img src="<?php echo base_url();?>adminassets/images/logo-blue.png">
						</div>
						<h3 class="text-center txt-primary">
							Sign In to your account
						</h3>
						<div class="md-input-wrapper">
							<input type="email" class="md-form-control" />
							<label>Email</label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" class="md-form-control" />
							<label>Password</label>
						</div>
						<div class="row">
							<div class="col-sm-6  text-right forgot-phone">
								<a href="forgot-password.html" class="f-w-600"> Forgot Password?</a>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-10">
								<button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center">LOGIN</button>
							</div>
						</div>
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>
<!-- Required Jqurey -->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/jquery-ui/js/jquery-ui.min.js"></script>
<!-- tether.js -->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/popper.js/js/popper.min.js"></script>
<!-- waves effects.js -->
<script src="<?php echo base_url();?>adminassets/plugins/waves/js/waves.min.js"></script>
<!-- Required Framework -->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url();?>adminassets/pages/elements.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url();?>adminassets/js/common-pages.min.js"></script> -->
</body>
</html>
