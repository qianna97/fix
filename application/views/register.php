<!DOCTYPE html>
<html>
<head>
	<title>Register - Lilin</title>
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
	<nav>
		<div class="nav-wrapper">
			<div class="nav-wrapper">
				<div class="container">
					<ul class="left">
						<li>
							<a href="javascript:history.back()"><i class="material-icons">&#xE5C4;</i></a>
						</li>
					</ul>
					<h1 href="#!" class="brand-logo center">
						Register
					</h1>
				</div>
			</div>
		</div>
	</nav>
	<div class="loader">
		<div class="container">
			<div class="register">
				<div class="row">
				<!--Untuk dialog error
				<p class="login_error">
					Kata sandi yang Anda masukan salah
				</p>
				-->
					<form class="col s12" style="margin: 0px 0px 50px auto" method="POST" action="<?php echo base_url()."register/do_create/"; ?>">
					<div class="row">
						<h3 class="center">Informasi User</h3>
						<div class="input-field col s12">
							<input name="username" id="username" type="text" class="validate">
							<label data-error="Format salah" for="username">Username</label>
						</div>
						<div class="input-field col s12">
							<input name="email" id="email" type="email" class="validate">
							<label data-error="Format salah" for="email">Email</label>
						</div>
						<div class="input-field col s12">
							<input name="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
					</div>
					<div class="row">
						<h3 class="center">Data diri user</h3>
						<div class="input-field col s12">
							<input name="name" type="text" class="validate">
							<label data-error="Format salah" for="nama">Nama Lengkap</label>
						</div>
						<div class="input-field col s12">
							<input name="nisn" type="number" class="validate" min="10" maxlength="10" length="10">
							<label data-error="NISN berjumlah 10 digit" for="nisn">NISN</label>
						</div>
						<div class="input-field col s12">
							<input name="tempat_lahir" type="text" class="validate">
							<label data-error="Format salah" for="tl">Tempat Lahir</label>
						</div>
						<div class="input-field col s12">
							<input name="tanggal_lahir" type="date" class="datepicker">
							<label data-error="Format salah" for="tgl">Tanggal Lahir</label>
						</div>
						<div class="input-field col s12">
							<p>Kurikulum</p>
							<div class="input-field col s12">
								<input class="with-gap" value="k13" type="radio" name="kurikulum" id="k13"/>
								<label for="k13">Kurikulum 2013</label>1
							</div>
							<div class="input-field col s12">
								<input class="with-gap" value="ktsp" type="radio" name="kurikulum" id="ktsp"/>
								<label for="ktsp">KTSP</label>
							</div>
						</div>
						<div class="input-field col s12">
							<p>Kelas</p>
							<div class="row">
								<div class="col s4">
									<input class="with-gap" value="IPA" name="kelas" type="radio" id="IPA"/>
									<label for="IPA">IPA</label>
								</div>
								<div class="col s4">
									<input class="with-gap" value="IPS" name="kelas" type="radio" id="IPS"/>
									<label for="IPS">IPS</label>
								</div>
								<div class="col s4">
									<input class="with-gap" value="BAHASA" name="kelas" type="radio" id="BAHASA"/>
									<label for="BAHASA">BAHASA</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<h3 class="center">Informasi sekolah user</h3>
						<div class="input-field col s12">
							<input name="sekolah" type="text" class="validate">
							<label data-error="Format salah" for="sekolah">Nama Sekolah</label>
						</div>
						<div class="input-field col s12">
							<select name="provinsi">
							  <option value="" disabled selected>Pilih Provinsi</option>
							  <option value="1">Option 1</option>
							  <option value="2">Option 2</option>
							  <option value="3">Option 3</option>
							</select>
							<label>Provinsi</label>
						</div>
						<div class="input-field col s12">
							<select name="kota">
							  <option value="" disabled selected>Pilih Kota</option>
							  <option value="1">Option 1</option>
							  <option value="2">Option 2</option>
							  <option value="3">Option 3</option>
							</select>
							<label>Kota</label>
						</div>
					</div>
					  <button class="btn waves-effect waves-light" type="submit" name="action">Selesai
						<i class="material-icons right">&#xE876;</i>
					  </button>
					</form>
					<p class="underform">Sudah punya akun? <a href="<?php echo base_url('login/index');?>"> Login sekarang</a></p>
				</div>
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