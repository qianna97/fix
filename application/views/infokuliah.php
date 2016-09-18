<!DOCTYPE html>
<html>
<head>
	<title>Info SNMPTN - Lilin</title>
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
		<nav>
			<div class="nav-wrapper">
				<div class="nav-wrapper">
					<div class="container">
						<ul class="left">
							<li>
								<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">&#xE5D2;</i></a>
							</li>
						</ul>
						<p href="#!" class="brand-logo left">
							Infokuliah - SNMPTN
						</p>
						<ul class="right">
							<li>
								<!--Jika sudah follow ganti jadi:
								<a class="modal-trigger" href="#unfollow" style="background-color:rgba(0,0,0,0.1)">
									<i class="material-icons active">&#xE03B;</i>
								</a>
								-->
								<a class="modal-trigger" href="#follow">
									<i class="material-icons active">&#xE03B;</i>
								</a>
							</li>
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
	<!--End Navbar-->
	
		<!--Start Sidebar-->
	<ul class="side-nav" id="mobile-demo">
		<li class="profile">
			<p>Alvira Mohamad</p>
		</li>
		<li><a href="dashboard.html"><i class="material-icons">&#xE871;</i>Dashboard</a></li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header"><i class="material-icons">&#xE242;</i>Kompetitor SNMPTN</a></a>
						<div class="collapsible-body">
							<ul>
								<li><a href="kompetitor_sekolah.html"><i class="material-icons">&#xE7F1;</i>Se-Sekolah</a></li>
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
					<a class="collapsible-header active"><i class="material-icons">&#xE865;</i>Info Kuliah</a>
						<div class="collapsible-body">
							<ul>
								<li><a href="info_snmptn.html" class="aktif">SNMPTN</a></li>
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
		<div class="container" id="archive_blog">
			<?php $get_post = $this->db->query("SELECT * from artikel")->result_array();?>
			<div class="row">
				<?php foreach($get_post as $post) { ?>
				<div class="col s12 m6">
					<div class="card hoverable">
						<a href="<?php echo base_url()."infokuliah/post/".$post['artikelID'];?>">
							<div class="card-image">
								<img src="<?php echo base_url()."assets/"; ?>images/cover.jpg">
								<span class="card-title"><?php echo $post['judul'];?></span>
							</div>
							<div class="card-content">
							<p><?php echo $post['isi'];?></p>
							</div>
							<div class="card-action">
								<p class="time"><i class="material-icons">&#xE192;</i><?php echo $post['postdate'];?></p>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!--End Content-->
	<!--Start Modal-->
	<div id="follow" class="modal">
		<div class="modal-content">
			<h2>Ikuti topik ini?</h2>
			<p>Anda akan menerima notifikasi bila ada berita terbaru dari topik yang anda ikuti.</p>
			
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ikuti</a>	
			<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Tutup</a>
		</div>
	</div>
	<div id="unfollow" class="modal">
		<div class="modal-content">
			<h2>Berhenti mengikuti topik ini?</h2>
			<p>Anda tidak akan menerima notifikasi lagi mengenai topik yang tidak anda ikuti.</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Berhenti Mengikuti</a>	
			<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Tutup</a>
		</div>
	</div>
	<!--End Modal-->
	<!--Import jQuery-->
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/materialize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()."assets/"; ?>js/main.js"></script>
	
</body>
</html>