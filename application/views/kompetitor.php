<!DOCTYPE html>
<html>
<head>
	<title>Kompetitor - Lilin</title>
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
						<p href="#!" class="brand-logo center">
							Kompetitor SNMPTN
						</p>
						<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
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
			<ul class="tabs">
				<li class="tab col s3"><a class="active" href="#pilihan1">Pilihan 1</a></li>
				<li class="tab col s3"><a href="#pilihan2">Pilihan 2</a></li>
				<li class="tab col s3"><a href="#pilihan3">Pilihan 3</a></li>
			</ul>
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
			<p>Alvira Mohamad</p>
		</li>
		<li><a href="dashboard.html"><i class="material-icons">&#xE871;</i>Dashboard</a></li>
		<li class="active"><a href="kompetitor_snmptn.html"><i class="material-icons">&#xE242;</i>Kompetitor SNMPTN</a></li>
		<li><a href="kalender.html"><i class="material-icons">&#xE8DF;</i>Kalender</a></li>
	</ul>
	<!--End Sidebar-->
	
	<!--Start Floating Button-->
	<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large red"><i class="material-icons">&#xE5D3;</i></a>
		<ul>
		  <li><a href="#filter" class="waves-effect waves-light btn-floating modal-trigger blue"><i class="material-icons">&#xE152;</i></a></li>
		  <li><a href="#edit" class="waves-effect waves-light btn-floating modal-trigger green"><i class="material-icons">&#xE254;</i></a></li>
		</ul>
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
		<div class="container" id="pilihan1">
			<p class="flow-text">Pilihan pertama Anda</p>
			<h4>STEI ITB</h4>
			<p> Memiliki <span>5</span>orang kompetitor dengan data sebagai berikut.</p>
			 <ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><span class="rank">1</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header self"><span class="rank">2</span> Alvira Mohamad</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn disabled"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">3</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">4</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">5</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
			  </ul>
		</div>
		<div class="container" id="pilihan2">
			<p class="flow-text">Pilihan kedua Anda</p>
			<h4>STEI ITB</h4>
			<p> Memiliki <span>5</span>orang kompetitor dengan data sebagai berikut.</p>
			 <ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><span class="rank">1</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header self"><span class="rank">2</span> Alvira Mohamad</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn disabled"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">3</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">4</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">5</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
			  </ul>
		</div>
		<div class="container" id="pilihan3">
			<p class="flow-text">Pilihan ketiga Anda</p>
			<h4>STEI ITB</h4>
			<p> Memiliki <span>5</span>orang kompetitor dengan data sebagai berikut.</p>
			 <ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><span class="rank">1</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header self"><span class="rank">2</span> Alvira Mohamad</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn disabled"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">3</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">4</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><span class="rank">5</span> Privasi</div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value">1</span>
						</p>
						<p>
							<span class="title">Total Nilai Mapel UN</span>
							<span class="value">299</span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value">1110</span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value">SMAN 1 Cibadak</span>
						</p>
						
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
			  </ul>
		</div>
	</div>
	<!--End Content-->
	<!--Start Modal-->
	<div id="filter" class="modal">
		<div class="modal-content">
		<h5>Filter</h5>
		<form action="#">
			<p>Urutkan berdasarkan</p>
			<p>
				<input class="with-gap" name="sort" type="radio" id="Rank" checked />
				<label for="Rank">Ranking terbesar</label>
			</p>
			<p>
				<input class="with-gap" name="sort" type="radio" id="UN"  />
				<label for="UN">Nilai mapel UN terbesar</label>
			</p>
			<p>
				<input class="with-gap" name="sort" type="radio" id="Rapor"  />
				<label for="Rapor">Nilai total rapor terbesar</label>
			</p>
			<p>Jangkauan Wilayah</p>
			<p>
				<input class="with-gap" name="range" type="radio" id="Sekolah" checked />
				<label for="Sekolah">Sekolah</label>
			</p>
			<p>
				<input class="with-gap" name="range" type="radio" id="Kabupaten"  />
				<label for="Kabupaten">Kabupaten</label>
			</p>
		
			<div class="modal-footer">
				<button class="modal-action modal-close waves-effect waves-green btn-flat" type="submit" name="action">OK</button>
				<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
			</div>
		</form>
		</div>
	</div>
	<div id="edit" class="modal">
		<div class="modal-content">
		<h5>Ganti Univ/Jurusan</h5>
		<form method="POST" action="<?php echo base_url()."kompetitor/add_pt/"; ?>">
			<p>Pilihan 1</p>
			<div>
				<select name="univ_1" id="univ_1">
				  <option value="" disabled selected>Pilih Universitas</option>
				  <option value="ITB">ITB</option>
				  <option value="UNPAD">UNPAD</option>
				</select>
			</div>
			<p>
				<select name="jurusan_1" id="jurusan_1">
				  <option value="" disabled selected>Pilih Jurusan</option>
				  <option value="IT">IT</option>
				  <option value="HUKUM">HUKUM</option>
				</select>
			</p>
			<p>Pilihan 2</p>
			<p>
				<select name="univ_2">
				  <option value="" disabled selected>Pilih Universitas</option>
				  <option value="ITB">ITB</option>
				  <option value="UNPAD">UNPAD</option>
				</select>
			</p>
			<p>
				<select name="jurusan_2">
				  <option value="" disabled selected>Pilih Jurusan</option>
				  <option value="HUKUM">HUKUM</option>
				  <option value="DOKTER">DOKTER</option>
				</select>
			</p>
			<p>Pilihan 3</p>
			<p>
				<select name="univ_3">
				  <option value="" disabled selected>Pilih Universitas</option>
				  <option value="ITB">ITB</option>
				  <option value="UNPAD">UNPAD</option>
				</select>
			</p>
			<p>
				<select name="jurusan_3">
				  <option value="" disabled selected>Pilih Jurusan</option>
				  <option value="ELEKTRO">ELEKTRO</option>
				  <option value="AKUNTANSI">AKUNTANSI</option>
				</select>
			</p>
			<div class="modal-footer">
				<button class="modal-action modal-close waves-effect waves-green btn-flat" type="submit" name="action">OK</button>
				<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Batal</a>
			</div>
		</form>
		</div>
	</div>
	<!--End Modal-->
	<!--Import jQuery-->
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/main.js"></script>
</body>
</html>
	