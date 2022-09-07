<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Custom stylesheet -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/headerNEW.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/<?= $css ?>.css">

	<!-- JQuery for templating -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<link rel="icon" href="<?php echo base_url() ?>kbmsi-full.ico" />

	<meta name="theme-color" content="#f7580f">
	<link rel="manifest" href="<?php echo base_url() ?>manifest.json">

	<title>Keluarga Besar Mahasiswa Sistem Infromasi UB</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light fixed-top navnav">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">
				<img src="<?php echo base_url(); ?>assets/img/Logo/lambang_KBMSI.png" alt="kbmsi" width="70">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item  <?= ($this->uri->segment(1) == '' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>">Home</a>
						</li>
						<li class="nav-item  <?= ($this->uri->segment(1) == 'Kelembagaan' || $this->uri->segment(1) == 'kelembagaan' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>Kelembagaan">Lembaga</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'Berita' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>Berita">Berita</a>
						</li>
						<li class="nav-item  <?= ($this->uri->segment(1) == 'Produk' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>Produk">Produk</a>
						</li>
					</ul>
				</ul>
			</div>
		</div>
	</nav>

	<script>
		$(window).scroll(function() {
			$('nav').toggleClass('scrolled', $(this).scrollTop() > 15);
		});
	</script>