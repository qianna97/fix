<!DOCTYPE html>
<html>
<head>
	<title>Login - Lilin</title>
	<!--Import CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css" />
	<!--Meta Tag-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="splash">
	<!--Start Preloader-->
	<div class="preloader">
		<div class="preloader-wrapper small active">
		  <div class="spinner-layer spinner-blue">
			<div class="circle-clipper left">
			  <div class="circle"></div>
			</div><div class="gap-patch">
			  <div class="circle"></div>
			</div><div class="circle-clipper right">
			  <div class="circle"></div>
			</div>
		  </div>

		  <div class="spinner-layer spinner-red">
			<div class="circle-clipper left">
			  <div class="circle"></div>
			</div><div class="gap-patch">
			  <div class="circle"></div>
			</div><div class="circle-clipper right">
			  <div class="circle"></div>
			</div>
		  </div>

		  <div class="spinner-layer spinner-yellow">
			<div class="circle-clipper left">
			  <div class="circle"></div>
			</div><div class="gap-patch">
			  <div class="circle"></div>
			</div><div class="circle-clipper right">
			  <div class="circle"></div>
			</div>
		  </div>

		  <div class="spinner-layer spinner-green">
			<div class="circle-clipper left">
			  <div class="circle"></div>
			</div><div class="gap-patch">
			  <div class="circle"></div>
			</div><div class="circle-clipper right">
			  <div class="circle"></div>
			</div>
		  </div>
		</div>
	</div>
	<!--End Preloader-->
	
	<!--Start Content-->
	<div class="loader">
		<div class="container login center-align">
			<div class="row">
			<a href="#!" class="brand-logo">
				<img src="<?php echo base_url()."assets/"; ?>images/logo.png">
			</a>
			<!--Untuk dialog error
			<p class="login_error">
				Kata sandi yang Anda masukan salah
			</p>
			-->
				<form class="col s12" method="POST" action="<?php echo base_url()."index.php/login/do_login/"; ?>">
				  <div class="row">
					<div class="input-field col s12">
						<input name="username" id="username" type="text">
						<label for="username">USERNAME</label>
					</div>
					<div class="input-field col s12">
						<input name="password" type="password">
						<label for="password">PASSWORD</label>
					</div>
				  </div>
				  				<a href="dashboard.html"><button class="btn waves-effect waves-light" type="submit" name="action">LOGIN
					<i class="material-icons right">&#xE890;</i>
				  </button></a>
				</form>

				<p class="underform">Belum punya akun? <a href="<?php echo base_url()."Register/index"; ?>">Daftar sekarang</a></p>
			</div>
		</div>
	</div>
	<!--End Content-->
	<!--Import jQuery-->
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/main.js"></script>
</body>
</html>