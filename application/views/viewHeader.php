<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Dinas Ketahanan Pangan Kota Semarang</title>
	<link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<?php
		foreach ($data["header_css"] as $key => $value) { ?>
			<link href="<?php echo $value ?>" rel="stylesheet" type="text/css">
	<?php } ?>
	
</head>
<body>
	<?php 
	if (isset($login_modal)) {
		echo $login_modal;
	}
	if (isset($regist_modal)) {
		echo $regist_modal;
	}
	?>
	<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-8 logo text-left">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">
						<img src="<?php echo base_url(); ?>assets/images/main-logo.png">
					</a>
				</div>
				<div class="col-md-4 log-icons text-right">
					<ul class="top-forms mt-3">
						<span class="mx-lg-4 mx-md-2  mx-1">
							<a href="#" data-toggle="modal" data-target="#loginModal">
								<i class="fas fa-lock"></i> Masuk</a>
						</span>
						<!-- <span>
							<a href="#" data-toggle="modal" data-target="#regisModal">
								<i class="far fa-user"></i> Daftar</a>
						</span> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="header_top" id="home">
			<nav class="navbar navbar-expand-md navbar-light bg-light">
                <button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php if ($this->uri->segment(1) == ''){echo "active";}?>">
                            <a class="nav-link" href="<?php echo base_url(); ?>">
                            	Home<span class="sr-only">(current)</span>
							</a>
                        </li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Tentang Kami
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
								<a class="dropdown-item" href="#"></a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Tentangkami_Home/sekapursirih">Sekapur Sirih</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Tentangkami_Home/visimisi">Visi Misi</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Tentangkami_Home/profiledkp">Profile DKP</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Tentangkami_Home/tupoksidkp">Tupoksi DKP</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Tentangkami_Home/strukturorganisasi">Struktur Organisasi</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Tentangkami_Home/datapegawai">Data Pegawai</a>
							</div>
						</li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Publikasi
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
								<a class="dropdown-item" href="#"></a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Agenda/index">Kalendar Event</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Resep Pangan Lokal</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Toko Tani Indonesia</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Jenis Pelatihan</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								PEDAFTARAN USAHA PANGAN
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">PSAT</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pangan Olahan</a>
                                	<ul class="dropdown-menu">
                                		<li><a class="dropdown-item dropdown-toggle" href="#">PIRT</a>
		                                    <ul class="dropdown-menu">
		                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Layanan/alurPermohonanPIRT">ALUR PERMOHONAN SPP-PIRT</a></li>
		                                        <div class="dropdown-divider"></div>
		                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Layanan/syaratPermohonanPIRT">SYARAT PERMOHONAN SPP – PIRT</a></li>
		                                        <div class="dropdown-divider"></div>
		                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Register/index">PERMOHONAN SPP-PIRT</a></li>
		                                    </ul>
		                                </li>
		                                <div class="dropdown-divider"></div>
		                                <li><a class="dropdown-item dropdown-toggle" href="#">MD / ML</a>
		                                    <ul class="dropdown-menu">
		                                        <li><a class="dropdown-item" href="#">BPOM</a></li>
		                                        <div class="dropdown-divider"></div>
		                                        <li><a class="dropdown-item" href="#">MUI</a></li>
		                                    </ul>
		                                </li>
                                	</ul>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item dropdown-toggle" href="#">Pangan Siap Saji</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Layanan/formpss">Form Pedagang Siap Saji</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>Layanan/reportpss">Report Pedagang Siap Saji</a></li>
                                    </ul>
                                </li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								PPID
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item dropdown-toggle" href="#">Dasar Hukum</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/dasarHukumPerwal">Perwal No. 35 Tahun 2017</a></li>
										<div class="dropdown-divider"></div>
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/skdip">SK DIP</a></li>
									</ul>
								</li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item dropdown-toggle" href="#">Daftar Informasi Publik</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/informasiberkala">Informasi Berkala</a></li>
										<div class="dropdown-divider"></div>
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/informasisetiapsaat">Informasi Setiap Saat</a></li>
										<div class="dropdown-divider"></div>
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/informasisertamerta">Informasi Serta Merta</a></li>
									</ul>
								</li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item dropdown-toggle" href="#">Profil PPID</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/skpidpembantu">SK PPID Pembantu</a></li>
										<div class="dropdown-divider"></div>
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/strukturppidpembantu">Struktur PPID Pembantu</a></li>
									</ul>
								</li>
								<div class="dropdown-divider"></div>
								<li><a class="dropdown-item dropdown-toggle" href="#">Layanan Informasi</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/index">Permohonan Informasi</a></li>
										<div class="dropdown-divider"></div>
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/soppermohonaninformasi">SOP Permohonan Informasi</a></li>
										<div class="dropdown-divider"></div>
										<li><a class="dropdown-item" href="<?php echo base_url(); ?>Ppid/soppenanganankeberatan">SOP Permohonan Keberatan</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Kontak Kami
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown3">
								<a class="dropdown-item" href="#"></a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Kontak/index">Kontak Bisnis (PIRT)</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url(); ?>Kontak/reportpss">Kontak Bisnis (Pedagang Siap Saji)</a>
							</div>
						</li>
						<li class="nav-item">
                            <a class="nav-link" href="">Berita</a>
                        </li>
                    </ul>
                </div>
            </nav>
		</div>
	</header>
	<!--//header-->
	<?php if($this->session->flashdata('message')){?> 
        <div class="alert alert-success">
    <?php echo $this->session->flashdata('message')?> 
        </div><?php } ?>

    <?php if($this->session->flashdata('error')){?> 
        <div class="alert alert-danger">  
    <?php echo $this->session->flashdata('error')?> 
        </div><?php } ?> 