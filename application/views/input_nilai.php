<!DOCTYPE html>
<html>
<head>
	<title>Input Nilai Rapor - Lilin</title>
	<!--Import CSS-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css" />
	<!--Meta Tag-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
							Input Nilai Rapor
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
					<li class="tab col s3"><a class="active" href="#semester1">1</a></li>
					<li class="tab col s3"><a href="#semester2">2</a></li>
					<li class="tab col s3"><a href="#semester3">3</a></li>
					<li class="tab col s3"><a href="#semester4">4</a></li>
					<li class="tab col s3"><a href="#semester5">5</a></li>
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
		<li><a href="kompetitor_snmptn.html"><i class="material-icons">&#xE242;</i>Kompetitor SNMPTN</a></li>
		<li><a href="kalender.html"><i class="material-icons">&#xE8DF;</i>Kalender</a></li>
	</ul>
	<!--End Sidebar-->
	
	<!--Start Floating Button-->
	<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a href="#bantuan" class="btn-floating waves-effect waves-light modal-trigger red"><i class="material-icons">&#xE887;</i></a>
	</div>
	<!--End Floating Button-->
	
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
		<div class="container" id="semester1">
			<h2 class="section_title">Input Nilai Semester 1</h2>
			<div class="row">
				<form class="col s12" method="POST" action="<?php echo base_url()."index.php/nilai/add_data/"; ?>"
				style="display: <?php if($this->session->userdata('input')>=1){ echo "none;";} ?>">
				<input type="hidden" name="sms" value="1">
					<div class="row">
						<div class="input-field col s12">
							<input name="agama"  type="text" class="validate">
							<label for="agama">Pendidikan Agama & Budi Pekerti</label>
						</div>
						<div class="input-field col s12">
							<input name="pkn"  type="text" class="validate">
							<label for="pkn">Pendidikan Pancasila & Kewarganegaraan</label>
						</div>
						<div class="input-field col s12">
							<input name="indo"  type="text" class="validate">
							<label for="indo">Bahasa Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika"  type="text" class="validate">
							<label for="matematika">Matematika</label>
						</div>
						<div class="input-field col s12">
							<input name="sejarah"  type="text" class="validate">
							<label for="sejarah">Sejarah Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="inggris"  type="text" class="validate">
							<label for="inggris">Bahasa Inggris</label>
						</div>
						<div class="input-field col s12">
							<input name="seni"  type="text" class="validate">
							<label for="seni">Seni Budaya</label>
						</div>
						<div class="input-field col s12">
							<input name="pjok"  type="text" class="validate">
							<label for="pjok">Pend. Jasmani, Olahraga & Kesehatan</label>
						</div>
						<div class="input-field col s12">
							<input name="prakarya"  type="text" class="validate">
							<label for="prakarya">Prakarya</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika_sejarah"  type="text" class="validate">
							<label for="matematika_sejarah">Matematika Peminatan</label>
						</div>
						<div class="input-field col s12">
							<input name="fisika_geo"  type="text" class="validate">
							<label for="fisika_geo">Fisika</label>
						</div>
						<div class="input-field col s12">
							<input name="kimia_eko"  type="text" class="validate">
							<label for="kimia_eko">Kimia</label>
						</div>
						<div class="input-field col s12">
							<input name="biologi_sosio"  type="text" class="validate">
							<label for="biologi_sosio">Biologi</label>
						</div>
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<div class="container" id="semester2">
			<h2 class="section_title">Input Nilai Semester 2</h2>
			<div class="row">
				<form class="col s12" method="POST" action="<?php echo base_url()."index.php/nilai/add_data/"; ?>"
				style="display: <?php if($this->session->userdata('input')>=2){ echo "none;";} ?>"
				>
				<input type="hidden" name="sms" value="2">
					<div class="row">
						<div class="input-field col s12">
							<input name="agama"  type="text" class="validate">
							<label for="agama">Pendidikan Agama & Budi Pekerti</label>
						</div>
						<div class="input-field col s12">
							<input name="pkn"  type="text" class="validate">
							<label for="pkn">Pendidikan Pancasila & Kewarganegaraan</label>
						</div>
						<div class="input-field col s12">
							<input name="indo"  type="text" class="validate">
							<label for="indo">Bahasa Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika"  type="text" class="validate">
							<label for="matematika">Matematika</label>
						</div>
						<div class="input-field col s12">
							<input name="sejarah"  type="text" class="validate">
							<label for="sejarah">Sejarah Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="inggris"  type="text" class="validate">
							<label for="inggris">Bahasa Inggris</label>
						</div>
						<div class="input-field col s12">
							<input name="seni"  type="text" class="validate">
							<label for="seni">Seni Budaya</label>
						</div>
						<div class="input-field col s12">
							<input name="pjok"  type="text" class="validate">
							<label for="pjok">Pend. Jasmani, Olahraga & Kesehatan</label>
						</div>
						<div class="input-field col s12">
							<input name="prakarya"  type="text" class="validate">
							<label for="prakarya">Prakarya</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika_sejarah"  type="text" class="validate">
							<label for="matematika_sejarah">Matematika Peminatan</label>
						</div>
						<div class="input-field col s12">
							<input name="fisika_geo"  type="text" class="validate">
							<label for="fisika_geo">Fisika</label>
						</div>
						<div class="input-field col s12">
							<input name="kimia_eko"  type="text" class="validate">
							<label for="kimia_eko">Kimia</label>
						</div>
						<div class="input-field col s12">
							<input name="biologi_sosio"  type="text" class="validate">
							<label for="biologi_sosio">Biologi</label>
						</div>
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<div class="container" id="semester3">
			<h2 class="section_title">Input Nilai Semester 3</h2>
			<div class="row">
				<form class="col s12" method="POST" action="<?php echo base_url()."index.php/nilai/add_data/"; ?>"
				style="display: <?php if($this->session->userdata('input')>=3){ echo "none;";} ?>"
				>
				<input type="hidden" name="sms" value="3">
					<div class="row">
						<div class="input-field col s12">
							<input name="agama"  type="text" class="validate">
							<label for="agama">Pendidikan Agama & Budi Pekerti</label>
						</div>
						<div class="input-field col s12">
							<input name="pkn"  type="text" class="validate">
							<label for="pkn">Pendidikan Pancasila & Kewarganegaraan</label>
						</div>
						<div class="input-field col s12">
							<input name="indo"  type="text" class="validate">
							<label for="indo">Bahasa Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika"  type="text" class="validate">
							<label for="matematika">Matematika</label>
						</div>
						<div class="input-field col s12">
							<input name="sejarah"  type="text" class="validate">
							<label for="sejarah">Sejarah Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="inggris"  type="text" class="validate">
							<label for="inggris">Bahasa Inggris</label>
						</div>
						<div class="input-field col s12">
							<input name="seni"  type="text" class="validate">
							<label for="seni">Seni Budaya</label>
						</div>
						<div class="input-field col s12">
							<input name="pjok"  type="text" class="validate">
							<label for="pjok">Pend. Jasmani, Olahraga & Kesehatan</label>
						</div>
						<div class="input-field col s12">
							<input name="prakarya"  type="text" class="validate">
							<label for="prakarya">Prakarya</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika_sejarah"  type="text" class="validate">
							<label for="matematika_sejarah">Matematika Peminatan</label>
						</div>
						<div class="input-field col s12">
							<input name="fisika_geo"  type="text" class="validate">
							<label for="fisika_geo">Fisika</label>
						</div>
						<div class="input-field col s12">
							<input name="kimia_eko"  type="text" class="validate">
							<label for="kimia_eko">Kimia</label>
						</div>
						<div class="input-field col s12">
							<input name="biologi_sosio"  type="text" class="validate">
							<label for="biologi_sosio">Biologi</label>
						</div>
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<div class="container" id="semester4">
			<h2 class="section_title">Input Nilai Semester 4</h2>
			<div class="row">
				<form class="col s12" method="POST" action="<?php echo base_url()."index.php/nilai/add_data/"; ?>"
				style="display: <?php if($this->session->userdata('input')>=4){ echo "none;";} ?>"
				>
				<input type="hidden" name="sms" value="4">
					<div class="row">
						<div class="input-field col s12">
							<input name="agama"  type="text" class="validate">
							<label for="agama">Pendidikan Agama & Budi Pekerti</label>
						</div>
						<div class="input-field col s12">
							<input name="pkn"  type="text" class="validate">
							<label for="pkn">Pendidikan Pancasila & Kewarganegaraan</label>
						</div>
						<div class="input-field col s12">
							<input name="indo"  type="text" class="validate">
							<label for="indo">Bahasa Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika"  type="text" class="validate">
							<label for="matematika">Matematika</label>
						</div>
						<div class="input-field col s12">
							<input name="sejarah"  type="text" class="validate">
							<label for="sejarah">Sejarah Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="inggris"  type="text" class="validate">
							<label for="inggris">Bahasa Inggris</label>
						</div>
						<div class="input-field col s12">
							<input name="seni"  type="text" class="validate">
							<label for="seni">Seni Budaya</label>
						</div>
						<div class="input-field col s12">
							<input name="pjok"  type="text" class="validate">
							<label for="pjok">Pend. Jasmani, Olahraga & Kesehatan</label>
						</div>
						<div class="input-field col s12">
							<input name="prakarya"  type="text" class="validate">
							<label for="prakarya">Prakarya</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika_sejarah"  type="text" class="validate">
							<label for="matematika_sejarah">Matematika Peminatan</label>
						</div>
						<div class="input-field col s12">
							<input name="fisika_geo"  type="text" class="validate">
							<label for="fisika_geo">Fisika</label>
						</div>
						<div class="input-field col s12">
							<input name="kimia_eko"  type="text" class="validate">
							<label for="kimia_eko">Kimia</label>
						</div>
						<div class="input-field col s12">
							<input name="biologi_sosio"  type="text" class="validate">
							<label for="biologi_sosio">Biologi</label>
						</div>
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
		<div class="container" id="semester5">
			<h2 class="section_title">Input Nilai Semester 5</h2>
			<div class="row">
				<form class="col s12" method="POST" action="<?php echo base_url()."index.php/nilai/add_data/"; ?>">
				<input type="hidden" name="sms" value="5">
					<div class="row">
						<div class="input-field col s12">
							<input name="agama"  type="text" class="validate">
							<label for="agama">Pendidikan Agama & Budi Pekerti</label>
						</div>
						<div class="input-field col s12">
							<input name="pkn"  type="text" class="validate">
							<label for="pkn">Pendidikan Pancasila & Kewarganegaraan</label>
						</div>
						<div class="input-field col s12">
							<input name="indo"  type="text" class="validate">
							<label for="indo">Bahasa Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika"  type="text" class="validate">
							<label for="matematika">Matematika</label>
						</div>
						<div class="input-field col s12">
							<input name="sejarah"  type="text" class="validate">
							<label for="sejarah">Sejarah Indonesia</label>
						</div>
						<div class="input-field col s12">
							<input name="inggris"  type="text" class="validate">
							<label for="inggris">Bahasa Inggris</label>
						</div>
						<div class="input-field col s12">
							<input name="seni"  type="text" class="validate">
							<label for="seni">Seni Budaya</label>
						</div>
						<div class="input-field col s12">
							<input name="pjok"  type="text" class="validate">
							<label for="pjok">Pend. Jasmani, Olahraga & Kesehatan</label>
						</div>
						<div class="input-field col s12">
							<input name="prakarya"  type="text" class="validate">
							<label for="prakarya">Prakarya</label>
						</div>
						<div class="input-field col s12">
							<input name="matematika_sejarah"  type="text" class="validate">
							<label for="matematika_sejarah">Matematika Peminatan</label>
						</div>
						<div class="input-field col s12">
							<input name="fisika_geo"  type="text" class="validate">
							<label for="fisika_geo">Fisika</label>
						</div>
						<div class="input-field col s12">
							<input name="kimia_eko"  type="text" class="validate">
							<label for="kimia_eko">Kimia</label>
						</div>
						<div class="input-field col s12">
							<input name="biologi_sosio"  type="text" class="validate">
							<label for="biologi_sosio">Biologi</label>
						</div>
					</div>
					<button class="btn waves-effect waves-light" type="submit" name="action">Lanjutkan
						<i class="material-icons right">send</i>
					</button>
				</form>
			</div>
		</div>
	</div>
	<!--Start Modal-->
	<div id="bantuan" class="modal">
		<div class="modal-content">
			<h2>Bantuan</h2>
			<p>Halaman pengisian nilai adalah halaman yang sangat penting. Nilai inilah yang akan menentukan hasil prediksi SNMPTN anda. Untuk mendapatkan hasil yang akurat, maka: </p>
			<ul class="collection">
			  <li class="collection-item">Isilah data dengan jujur! Supaya anda mendapatkan prediksi yang tepat untuk SNMPTN yang sebenarnya.</li>
			  <li class="collection-item">Isilah nilai berdasarkan mata pelajaran yang ada di rapor anda. Kalau di rapor engga ada mata pelajarannya, tidak perlu di isi.</li>
			  <li class="collection-item">Cek ulang dan cek ulang lagi nilainya. Anggap ini simulasi pengisian SNMPTN yang sebenarnya.</li>
			  <li class="collection-item">Ucapkan doa sebelum nilai disimpan. Good luck!</li>
			  
			</ul>
		</div>
		<div class="modal-footer">
				<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Tutup</a>
			</div>
	</div>
	<!--End Modal-->
	
	<!--End Modal-->
	<!--Import jQuery-->
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/main.js"></script>
</body>
</html>