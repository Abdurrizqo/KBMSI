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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:700|Roboto+Condensed:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600;700&display=swap" rel="stylesheet">

	<!-- Custom stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/headerNEW.css">
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/produkNEW.css"> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
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
							<a class="nav-link" href="<?= base_url() ?>">Beranda</a>
						</li>
						<li class="nav-item  <?= ($this->uri->segment(1) == 'Kelembagaan' || $this->uri->segment(1) == 'kelembagaan' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>Kelembagaan">Kelembagaan</a>
						</li>
						<li class="nav-item <?= ($this->uri->segment(1) == 'Berita' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>Berita">Berita</a>
						</li>
						<li class="nav-item  <?= ($this->uri->segment(1) == 'Produk' ? 'active' : '') ?>">
							<a class="nav-link" href="<?= base_url() ?>Produk">Produk</a>
						</li>
						<!-- <li class="nav-item  <?= ($this->uri->segment(1) == 'Produk' ? 'active' : '') ?>">
								<a class="nav-link text-info" href="http://oprec.kbmsi.or.id/"><b>Open Recruitment</b></a>
							</li> -->
						<!-- <li class="nav-item  <?= ($this->uri->segment(1) == 'Jobs' ? 'active' : '') ?>">
								<a class="nav-link" href="<?= base_url() ?>Jobs">Job Vacancies</a>
							</li> -->
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