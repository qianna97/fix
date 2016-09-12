<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Lilin</title>
	<!--Import CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css" />
	<!--Meta Tag-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<!--Start Navbar-->
	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<div class="nav-wrapper">
					<div class="container">
						<p href="#!" class="brand-logo center">
							<img src="<?php echo base_url()."assets/"; ?>images/logo.png">
						</p>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">&#xE5D2;</i></a>
						<ul class="right">
							<li>
								<a href="notification.html" data-activates="notification" class="dropdown-button">
									<!--Jika ada notif ganti jadi <i class="material-icons">&#xE7F4;</i> -->
									<i class="material-icons">&#xE7F5;</i>
								</a>
							</li>
							<li>
								<a href="#!" data-activates="dropdown" class="dropdown-button more"><i class="material-icons">&#xE5D4;</i></a>
								<ul id="dropdown" class="dropdown-content">
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="settings.html">Settings</a></li>
									<li class="divider"></li>
									<li><a href="<?php echo base_url('dashboard/logout');?>">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<!--End Navbar-->
	
	<!--Start Sidebar-->
	<ul class="side-nav" id="mobile-demo">
		<li class="profile">
			<p><?php echo $this->session->userdata('name')?></p>
		</li>
		<li class="active"><a href="dashboard.html"><i class="material-icons">&#xE871;</i>Dashboard</a></li>
		<li><a href="<?php echo base_url('Kompetitor');?>"><i class="material-icons">&#xE242;</i>Kompetitor SNMPTN</a></li>
		<li><a href="kalender.html"><i class="material-icons">&#xE8DF;</i>Kalender</a></li>
	</ul>
	<!--End Sidebar-->
	
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
		<div class="container" id="countdown">
			<h2 class="section_title">Countdown</h2>
			<div class="row">
				<div class="col s4">
				  <div class="card red darken-1"> <!--ganti blue-grey menjadi red jika waktu sudah dekat-->
					<div class="card-content white-text center-align">
					  <span class="card-title">H-10</span>
					  <p>UN</p>
					</div>
				  </div>
				</div>
				<div class="col s4">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text center-align">
					  <span class="card-title">H-90</span>
					  <p>SNMPTN</p>
					</div>
				  </div>
				</div>
				<div class="col s4">
				  <div class="card blue-grey darken-1">
					<div class="card-content white-text center-align">
					  <span class="card-title">H-120</span>
					  <p>SBMPTN</p>
					</div>
				  </div>
				</div>
			</div>
		</div>
		<div class="container" id="info_kuliah">
			<h2 class="section_title">Info Kuliah</h2>
			<div class="collection">
				<a href="#!" class="collection-item">SNMPTN</a>
				<a href="#!" class="collection-item">SBMPTN</a>
				<a href="#!" class="collection-item">Ujian Mandiri</a>
				<a href="#!" class="collection-item">Kedinasan</a>
				<a href="#!" class="collection-item">Swasta</a>
				<a href="#!" class="collection-item">Beasiswa</a>
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