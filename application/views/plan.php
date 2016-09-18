<!DOCTYPE html>
<html>
<head>
	<title>Ubah Plan Universitas dan Jurusan - Lilin</title>
	<!--Import CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css" />
	<!--Meta Tag-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<!--Start Navbar-->
	<div class="navbar-fixed">
		<nav class="first">
			<div class="nav-wrapper">
				<div class="nav-wrapper">
					<div class="container">
						<ul class="left">
							<li>
								<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">&#xE5D2;</i></a>
							</li>
						</ul>
						<p href="#!" class="brand-logo left">
							Pilih Universitas
						</p>
						<ul class="right">
							<li>
								<a href="notification.html" data-activates="notification" class="dropdown-button">
									<!--Jika ada notif ganti jadi <i class="material-icons">&#xE7F4;</i> -->
									<i class="material-icons">&#xE7F5;</i>
								</a>
							</li>
								<a href="#!" data-activates="more" class="dropdown-button"><i class="material-icons">&#xE5D4;</i></a>
								<ul id="more" class="dropdown-content">
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="settings.html">Settings</a></li>
									<li class="divider"></li>
									<li><a href="#">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="navbar-fixed" style="z-index: 996;">
		<nav class="second">
			<div class="container">
				<ul class="tabs">
					<li class="tab col s3"><a class="active" href="#pilihan1">Pilihan 1</a></li>
					<li class="tab col s3"><a href="#pilihan2">Pilihan 2</a></li>
					<li class="tab col s3"><a href="#pilihan3">Pilihan 3</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<ul id="more" class="dropdown-content">
	  <li><a href="#!">Pengaturan</a></li>
	  <li><a href="#!">Logout</a></li>
	</ul>
	<!--End Navbar-->

		<!--Start Sidebar-->
	<ul class="side-nav" id="mobile-demo">
		<li class="profile">
			<p><?php echo $this->session->userdata('name')?></p>
		</li>
		<li><a href="dashboard.html"><i class="material-icons">&#xE871;</i>Dashboard</a></li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header active"><i class="material-icons">&#xE242;</i>Kompetitor SNMPTN</a></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="kompetitor_sekolah.html"><i class="material-icons">&#xE7F1;</i>Se-Sekolah</a></li>
								<li><a href="kompetitor_kabupaten.html"><i class="material-icons">&#xE55B;</i>Se-Kabupaten</a></li>
								<li><a href="set_univ.html" class="aktif"><i class="material-icons">&#xE923;</i>Ubah Plan</a></li>
							</ul>
						</div>
				</li>
			</ul>
		</li>
		<!--<li><a href="kalender.html"><i class="material-icons">&#xE8DF;</i>Kalender</a></li>-->
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header"><i class="material-icons">&#xE865;</i>Info Kuliah</a>
						<div class="collapsible-body">
							<ul>
								<li><a href="info_snmptn.html">SNMPTN</a></li>
								<li><a href="#!">SBMPTN</a></li>
								<li><a href="#!">Ujian Mandiri</a></li>
								<li><a href="#!">Kedinasan</a></li>
								<li><a href="#!">Swasta</a></li>
								<li><a href="#!">Beasiswa</a></li>
							</ul>
						</div>
				</li>
			</ul>
		</li>
	</ul>
	<!--End Sidebar-->
	
	<!--Start Preloader-->
	<div class="preloader">
		<div class="preloader-wrapper small active">
			<div class="spinner-layer spinner-red-only">
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
	<form method="POST" action="<?php echo base_url()."plan/add_pt/"; ?>">
		<div class="container" id="pilihan2">
			<div class="row">
				<p class="flow-text">Pilihan kedua Anda <br><span><?php echo "$univ_2 $jurusan_2"; ?></span></p>
				<p>Anda dapat mengganti pilihan universitas dan jurusannya</p>
			</div>
			<div class="row">
				<select name="univ_2">
					  <option value="" disabled selected>Pilih Universitas</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
			<div class="row">
				<select name="jurusan_2">
					  <option value="" disabled selected>Pilih Jurusan</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
		</div>
		<div class="container" id="pilihan1">
			<div class="row">
				<p class="flow-text">Pilihan pertama Anda <br><span><?php echo "$univ_1 $jurusan_1"; ?></span></p>
				<p>Anda dapat mengganti pilihan universitas dan jurusannya</p>
			</div>
			<div class="row">
				<select name="univ_1">
					  <option value="" disabled selected>Pilih Universitas</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
			<div class="row">
				<select name="jurusan_1">
					  <option value="" disabled selected>Pilih Jurusan</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
		</div>
		<div class="container" id="pilihan3">
			<div class="row">
				<p class="flow-text">Pilihan ketiga Anda <br><span><?php echo "$univ_3 $jurusan_3"; ?></span></p>
				<p>Anda dapat mengganti pilihan universitas dan jurusannya</p>
			</div>
			<div class="row">
				<select name="univ_3">
					  <option value="" disabled selected>Pilih Universitas</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
			<div class="row">
				<select name="jurusan_3">
					  <option value="" disabled selected>Pilih Jurusan</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
					  <option value="ITB">ITB</option>
					  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
		</div>
		<!--Start Floating Button-->
		<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
			<button class="waves-effect waves-light btn-floating btn-large red" type="submit" name="action"><i class="material-icons">&#xE5CA;</i></button>
				
		</div>
		<!--End Floating Button-->
		</form>
	</div>
	<!--End Content-->
	<!--Import jQuery-->
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
	