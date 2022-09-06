<header class="bg">
	<img class="yellow" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 5.svg') ?>" alt="">
	<img class="blue" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 6.svg') ?>" alt="">
	<img class="orange" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 7.svg') ?>" alt="">
	<img class="yellow-2" style="position: absolute; transform:scaleX(-1)" src="<?= base_url('assets/img/Ellipse 5.svg') ?>" alt="">
	<img class="blue-2" style="position: absolute; overflow: hidden;" src="<?= base_url('assets/img/Ellipse 6.svg') ?>" alt="">
	<img class="orange-2" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 7.svg') ?>" alt="">
	<div class="container text-center">
		<h2 style="color: #ED5A41; text-shadow: 5px 0px 0px #FFC12B;">Semangat Pagi!</h2>
		<h4 style="color: #16376E; text-shadow: 2px 3px 3px rgba(0, 0, 0, 0.25);">Selamat datang di website <br> Keluarga Besar Mahasiswa Sistem Informasi</h4>
	</div>
	<!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
</header>

<div class="aboutus" style="position: relative;">
	<div class="custom-shape-divider-top-1630941772">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
		</svg>
	</div>
	<div class="triangle"></div>
	<div class="stars" style="transform: scaleX(-1);"></div>
	<div class="kbmsi-hor"></div>
	<div class="kbmsi-hor2"></div>
	<div class="container">
		<img src="<?= base_url('assets/img/corona.svg') ?>" alt="">
		<div class="row text-about">
			<div class="col-lg-12 text-center mx-auto my-4">
				<h1 class="tentang mb-4 text-white text-uppercase">Tentang KBMSI</h1>
			</div>
			<div class="hehe col-12 col-md-12 col-lg-6 mx-auto text-white text-center px-0">
				<!-- <img src="<?= base_url('assets/img/logo-kbmsi.svg') ?>" alt=""> -->
				<iframe class="responsive-iframe" width="90%" height="300" src="https://www.youtube.com/embed/jfhMkhzzEv4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-12 col-md-12 col-lg-4 mx-auto text-white text-center mt-5 px-0">
				<p class="caption"><strong>Keluarga Besar Mahasiswa Sistem Informasi Universitas Brawijaya</strong> (KBMSI UB) adalah wadah bagi mahasiswa Sistem Informasi Universitas Brawijaya dalam mengembangkan segala potensi yang ada dalam diri mereka dengan semangat kekeluargaan yang erat. </p>
				<a href="<?= base_url('Kelembagaan') ?>" class="btn btn-yellow btn-lg btn-company mt-3 text-uppercase">Kelembagaan
				</a>
			</div>
		</div>
	</div>
</div>

<!-- Berita -->
<div id="berita-home" style="position: relative;">
	<div class="custom-shape-divider-top-1630941910">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
		</svg>
	</div>
	<div class="kbmsi-text"></div>
	<div class="rect"></div>
	<div class="tri4"></div>
	<!-- <div class="kbmsi-hor"></div> -->
	<div class="kbmsi-hor2b" style="bottom:0 !important "></div>
	<div class="star2 " style="transform: scaleX(-1);"></div>
	<div class="container">
		<div class="d-none d-lg-block">
			<br><br><br>
		</div>
		<div class="text-center">
			<h3 class="mb-5 text-uppercase judul-shadow" style="text-align: center; font-family: 'Candal', sans-serif; display: inline-block; padding: 5px 10px; margin: 0 auto; text-shadow: 2px 4px 0px #fff;">
				Berita
			</h3>
		</div>
		<div class="row mb-2">
			<div class="card-deck" style="border: none; ">
				<?php for ($i = 1; $i <= 6; $i++) : ?>
					<div class="col-sm-6 col-lg-4 d-flex align-items-stretch">
						<div class="card mb-5" style="background-color: #ED5A41; border: none; box-shadow: 2px 2px 10px rgb(102, 102, 102)">
							<img src="<?= $berita[$i - 1]->gambar; ?>" class="card-img-top" alt="...">
							<div class="card-body text-white" style="padding-bottom: 75px;">
								<h5 class="card-title" style="text-transform: uppercase;"><?= $berita[$i - 1]->JUDUL ?></h5>
								<p class="card-text"><small class="text-white"><?= $berita[$i - 1]->LAST_UPDATE ?></small></p>
							</div>
							<a class="btn btn-news" href="<?= base_url() ?>Berita/id/<?= $berita[$i - 1]->ID_KONTEN ?>"><strong>Selengkapnya</strong></a>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
		<p class="lead mb-0 pb-4" style="text-align: center;"><a href="<?= base_url('Berita') ?>" class="font-weight-bold btn btn-other mb-3 d-inline-block" style="min-width: 200px; position:relative; z-index:1; ">Berita Lainnya ></a></p>
	</div>
</div>

<!-- Kontak -->
<div id="kontak" class="text-white pb-4" style="position: relative;">
	<div class="custom-shape-divider-top-1630942353">
		<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
			<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
		</svg>
	</div>
	<div class="container">
		<div class="d-none d-lg-block">
			<br><br><br>
		</div>
		<h3 class="pb-3 mb-4 text-uppercase" style="text-align: center; font-family: 'Candal', sans-serif; text-shadow: 4px 0px 0px #000;">
			Kontak
		</h3>
		<div class="row">
			<div class="col-md-7">
				<h4>Sekretariat</h4>
				<p style="color:black;">
					<b>
						Gedung D Fakultas Ilmu Komputer Universitas Brawijaya<br>
						Jalan Veteran nomor 8 Malang, Jawa Timur, Indonesia 65145
					</b>
				</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4371847219722!2d112.61248451432513!3d-7.953691594271131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827928958613%3A0xd600c9c3727a93aa!2sFakultas+Ilmu+Komputer+Universitas+Brawijaya!5e0!3m2!1sid!2sid!4v1536667346220" width="100%" height="300" frameborder="0" style="border: 0;" allowfullscreen></iframe>
				<div class="mb-5 d-md-none d-sm-block"></div>
			</div>
			<div class="col-md-1 d-none d-md-block"></div>
			<div class="col-md-4">
				<h4>Media Sosial</h4>
				<ul class="social-media-links mb-5">
					<li><a href="https://twitter.com/emsi_ub" style="text-decoration: none;"><i class="fab fa-twitter" style="color: black;"></i></a></li>
					<li><a href="https://www.instagram.com/kbmsi_ub" style="text-decoration: none;"><i class="fab fa-instagram" style="color: black;"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCc7XWqQPVoSx7rAonTRiv9w" style="text-decoration: none;"><i class="fab fa-youtube" style="color: black;"></i></a></li>
					<!-- <li><a class="text-dark" href="https://twitter.com/emsi_ub" target="_blank"><img src="<?= base_url('assets/img/logo-twt.svg') ?>" alt=""></a></li>
					<li><a class="text-dark" href="https://www.instagram.com/kbmsi_ub" target="_blank"><img src="<?= base_url('assets/img/logo-ig.svg') ?>" alt=""></a></li>
					<li><a class="text-dark" href="https://www.youtube.com/channel/UCc7XWqQPVoSx7rAonTRiv9w" target="_blank"><img src="<?= base_url('assets/img/logo-yt.svg') ?>" alt=""></a></li> -->
				</ul>
				<h4>Informasi Kontak</h4>
				<ul class="contact-info mb-5" style="font-weight: bold;">
					<li style="color: black;"><i class="fas fa-comment" style="color: black;"></i> &nbsp; 0857 0741 2129</li>
					<li style="color: black;"><i class="fas fa-at" style="color: black;"></i> &nbsp; kbmsi@ub.ac.id</li>
					<li style="color: black;"><i class="fab fa-line" style="color: black;"></i> &nbsp; @kig7594u</li>
				</ul>
				<p>&copy; 2021. Made with <b>&#x2764; </b> by <a class="text-light" href="<?php echo base_url() ?>kelembagaan/emsi/p2s"> P2S EMSI 2021/2022</p>
			</div>
		</div>
	</div>
</div>
<!-- <div class="copyright text-right">
	<div class="container">
		&copy; 2021. Made with <b>&#x2764; </b> by <a class="text-light" href="<?php echo base_url() ?>kelembagaan/emsi/p2s"> P2S EMSI 2021/2022</a>
	</div>
</div> -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Custom scripts -->
<script>
	// $(document).ready(function() {
	// 	$('video').css('object-fit', 'cover');
	// 	if (window.pageYOffset == 0) {
	// 		$('#nav').removeClass('bg-dark, shadow-sm');
	// 		$('#nav').addClass('bg-transparent');
	// 	} else if (window.pageYOffset > 0) {
	// 		$('#nav').removeClass('bg-transparent');
	// 		$('#nav').addClass('bg-dark, shadow-sm');
	// 	}
	// 	$(window).on('scroll', function() {
	// 		if (window.pageYOffset == 0) {
	// 			$('#nav').removeClass('bg-dark, shadow-sm');
	// 			$('#nav').addClass('bg-transparent');
	// 		} else if (window.pageYOffset > 0) {
	// 			$('#nav').removeClass('bg-transparent');
	// 			$('#nav').addClass('bg-dark, shadow-sm');
	// 		}
	// 	});
	// 	if (navigator.appVersion.includes("MiuiBrowser") || navigator.appVersion.includes("Line")) {
	// 		alert('Sangat disarankan untuk menggunakan Browser Chrome demi kenyamanan anda dalam mengakses website kami, Terimakasih');
	// 		$('video').remove();
	// 	}
	// });

	// $('#nav-trigger').on('click', function() {
	// 	$('#nav').toggleClass('bg-transparent');
	// 	$('#nav').addClass('bg-dark, shadow-sm');
	// });

	function aboutusAppear() {
		let about = document.querySelector('.text-about');
		let aboutPos = about.getBoundingClientRect().top;
		let screenPos = window.innerHeight / 1.5;

		if (aboutPos < screenPos) {
			about.classList.add('text-about-appear');
		} else {
			about.classList.remove('text-about-appear');
		}
	}

	window.addEventListener('scroll', aboutusAppear);
</script>
</body>

</html>