<!DOCTYPE html>
<html>
<head>
	<title>Kompetitor SNMPTN Sekolah - Lilin</title>
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
							Kompetitor SNMPTN - Sekolah
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
								<li><a href="kompetitor_sekolah.html" class="aktif"><i class="material-icons">&#xE7F1;</i>Se-Sekolah</a></li>
								<li><a href="kompetitor_kabupaten.html"><i class="material-icons">&#xE55B;</i>Se-Kabupaten</a></li>
								<li><a href="set_univ.html"><i class="material-icons">&#xE923;</i>Ubah Plan</a></li>
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
	
	<!--Start Floating Button
	<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
		<a href="#filter" class="waves-effect waves-light btn-floating modal-trigger btn-large red"><i class="material-icons">&#xE152;</i></a>
	</div>
	End Floating Button-->
	
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
		<!-- Aktif mun ncan nginput wa -->
		<?php if (($this->session->userdata('input')) and ($this->session->userdata('status')) == 0) { ?>
        	<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="massage">
						<i class="material-icons">&#xE002;</i>
						<h2>Tidak dapat memuat data</h2>
						<p>Anda belum mengisi nilai rapor, segera input ke database kami!</p>
						<a href="<?php echo base_url('nilai');?>" class="waves-effect btn-large">Mulai input</a>
					</div>
				</div>
			</div>
			</div>
    	<?php } ?>
		

		<!--Jangan Aktifkan ini jika nilai belum masuk-->
		<?php if (($this->session->userdata('input')) and ($this->session->userdata('status')) == 1) : ?>
		<div class="container" id="pilihan1">
			<?php $nama_saya =  $this->session->userdata('name')?>
			<?php $sekolah =  $this->session->userdata('sekolah')?>
			<?php $kota =  $this->session->userdata('kota')?>
			<?php $id =  $this->session->userdata('userID')?>
			<?php $h=1 ?>
			<p class="flow-text">Pilihan pertama Anda <br><span><?php echo "$univ_1 - $jurusan_1"?></span></p>
			<p>Anda memiliki <span><?php echo "$jml_data_1"?></span> orang kompetitor di sekolah Anda dengan data sebagai berikut.</p>
			<ul class="collapsible" data-collapsible="accordion">
			 	<?php $list_id_sekolah = $this->db->query("SELECT * from user where sekolah='$sekolah' and kota='$kota' ORDER BY ratanilaisemua DESC"); ?>
			 	<?php foreach ($list_id_sekolah->result_array() as $sekolah_sama) { ?>
			 	<?php $id = $sekolah_sama['userID']; ?>
			 	<?php $nama_komp = $sekolah_sama['name']; ?>
			 	<?php $nilai_komp = $sekolah_sama['ratanilaisemua']; ?>
			 	<?php $list_id_pt = $this->db->query("SELECT * from pt where userID='$id' and univ='$univ_1' and jurusan='$jurusan_1'"); ?>
			 	<?php foreach ($list_id_pt->result_array() as $data_1) { ?>
				<li>
					<div class="collapsible-header"><span class="rank"><?php echo $h; ?></span><?php if($nama_komp != $nama_saya){ echo "Privasi"; }else{ echo $nama_komp; } ?></div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value"><?php echo $data_1['pilihan']; ?></span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value"><?php echo $nilai_komp; ?></span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value"><?php echo $sekolah;?></span>
						</p>
						<?php $h++; ?>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<?php } ?>
				<?php } ?>
			</ul>
		</div>
		<div class="container" id="pilihan2" style="display:none">
			<?php $nama_saya =  $this->session->userdata('name')?>
			<?php $sekolah =  $this->session->userdata('sekolah')?>
			<?php $id =  $this->session->userdata('userID')?>
			<?php $h=1 ?>
			<p class="flow-text">Pilihan kedua Anda <br><span><?php echo "$univ_2 - $jurusan_2"?></span></p>
			<p>Anda memiliki <span><?php echo "$jml_data_2"?></span> orang kompetitor di sekolah Anda dengan data sebagai berikut.</p>
			<ul class="collapsible" data-collapsible="accordion">
			 	<?php $list_id_sekolah = $this->db->query("SELECT * from user where sekolah='$sekolah' ORDER BY ratanilaisemua DESC"); ?>
			 	<?php foreach ($list_id_sekolah->result_array() as $sekolah_sama) { ?>
			 	<?php $id = $sekolah_sama['userID']; ?>
			 	<?php $nama_komp = $sekolah_sama['name']; ?>
			 	<?php $nilai_komp = $sekolah_sama['ratanilaisemua']; ?>
			 	<?php $list_id_pt = $this->db->query("SELECT * from pt where userID='$id' and univ='$univ_2' and jurusan='$jurusan_2'"); ?>
			 	<?php foreach ($list_id_pt->result_array() as $data_2) { ?>
				<li>
					<div class="collapsible-header"><span class="rank"><?php echo $h; ?></span><?php if($nama_komp != $nama_saya){ echo "Privasi"; }else{ echo $nama_komp; } ?></div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value"><?php echo $data_2['pilihan']; ?></span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value"><?php echo $nilai_komp; ?></span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value"><?php echo $sekolah;?></span>
						</p>
						<?php $h++; ?>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<?php } ?>
				<?php } ?>
			</ul>
		</div>
		<div class="container" id="pilihan3" style="display:none">
			<?php $nama_saya =  $this->session->userdata('name')?>
			<?php $sekolah =  $this->session->userdata('sekolah')?>
			<?php $id =  $this->session->userdata('userID')?>
			<?php $h=1 ?>
			<p class="flow-text">Pilihan kedua Anda <br><span><?php echo "$univ_3 - $jurusan_3"?></span></p>
			<p>Anda memiliki <span><?php echo "$jml_data_3"?></span> orang kompetitor di sekolah Anda dengan data sebagai berikut.</p>
			<ul class="collapsible" data-collapsible="accordion">
			 	<?php $list_id_sekolah = $this->db->query("SELECT * from user where sekolah='$sekolah' ORDER BY ratanilaisemua DESC"); ?>
			 	<?php foreach ($list_id_sekolah->result_array() as $sekolah_sama) { ?>
			 	<?php $id = $sekolah_sama['userID']; ?>
			 	<?php $nama_komp = $sekolah_sama['name']; ?>
			 	<?php $nilai_komp = $sekolah_sama['ratanilaisemua']; ?>
			 	<?php $list_id_pt = $this->db->query("SELECT * from pt where userID='$id' and univ='$univ_3' and jurusan='$jurusan_3'"); ?>
			 	<?php foreach ($list_id_pt->result_array() as $data_3) { ?>
				<li>
					<div class="collapsible-header"><span class="rank"><?php echo $h; ?></span><?php if($nama_komp != $nama_saya){ echo "Privasi"; }else{ echo $nama_komp; } ?></div>
					<div class="collapsible-body">
						<p>
							<span class="title">Pilihan ke</span>
							<span class="value"><?php echo $data_3['pilihan']; ?></span>
						</p>
						<p>
							<span class="title">Total Nilai Rapor</span>
							<span class="value"><?php echo $nilai_komp; ?></span>
						</p>
						<p>
							<span class="title">Sekolah</span>
							<span class="value"><?php echo $sekolah;?></span>
						</p>
						<?php $h++; ?>
						<p><a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8FD;</i>ASK</a></p>
					</div>
				</li>
				<?php } ?>
				<?php } ?>
			</ul>
		</div>
		<?php endif; ?>
	</div>
	<!--End Content-->
	<!--Start Modal-->
	<div id="filter" class="modal">
		<div class="modal-content">
		<h2>Filter</h2>
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
	