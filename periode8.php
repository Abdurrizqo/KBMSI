<header class="bg">

  <!-- <img class="yellow" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 5.svg') ?>" alt="">
	<img class="blue" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 6.svg') ?>" alt="">
	<img class="orange" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 7.svg') ?>" alt="">
	<img class="yellow-2" style="position: absolute; transform:scaleX(-1)" src="<?= base_url('assets/img/Ellipse 5.svg') ?>" alt="">
	<img class="blue-2" style="position: absolute; overflow: hidden;" src="<?= base_url('assets/img/Ellipse 6.svg') ?>" alt="">
	<img class="orange-2" style="position: absolute;" src="<?= base_url('assets/img/Ellipse 7.svg') ?>" alt=""> -->

  <div class="container text-center">
    <h2 style="color: #ED5A41; text-shadow: 5px 0px 0px #FFC12B;">Semangat Pagi!</h2>
    <h4 style="color: #16376E; text-shadow: 2px 3px 3px rgba(0, 0, 0, 0.25);">#Demokrasi Beraksi <br>* !Kolaborasi
      Beraksi </h4>
    <!-- <h4 style="color: #16376E; text-shadow: 2px 3px 3px rgba(0, 0, 0, 0.25);">Selamat datang di website <br> Keluarga Besar Mahasiswa Sistem Informasi</h4> -->
  </div>
  <!-- <a href="http://www.freepik.com">Designed by Freepik</a> -->
</header>

<div class="aboutus" style="position: relative;">
  <div class="custom-shape-divider-top-1630941772">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
        class="shape-fill"></path>
    </svg>
  </div>
  <div class="triangle"></div>
  <div class="stars" style="transform: scaleX(-1);"></div>
  <div class="kbmsi-hor"></div>
  <div class="kbmsi-hor2"></div>
  <div class="container">
    <img src="<?= base_url('assets/img/corona.svg') ?>" alt="">
    <div class="row text-about">
      <div class="col-lg-12 text-center mx-auto my-4 ">
        <h1 class="tentang mb-4 text-white text-uppercase">Tentang KBMSI</h1>
      </div>
      <div class="hehe col-12 col-md-12 col-lg-6 mx-auto text-white text-center px-0">
        <!-- <img src="<?= base_url('assets/img/logo-kbmsi.svg') ?>" alt=""> -->
        <iframe class="responsive-iframe" width="90%" height="300" src="https://www.youtube.com/embed/jfhMkhzzEv4"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="col-12 col-md-12 col-lg-4 mx-auto text-white text-center mt-5 px-0">
        <p class="caption"><strong>Keluarga Besar Mahasiswa Sistem Informasi Universitas Brawijaya</strong> (KBMSI UB)
          adalah wadah bagi mahasiswa Sistem Informasi Universitas Brawijaya dalam mengembangkan segala potensi yang ada
          dalam diri mereka dengan semangat kekeluargaan yang erat. </p>
        <a href="<?= base_url('Kelembagaan') ?>"
          class="btn btn-yellow btn-lg btn-company mt-3 text-uppercase">Kelembagaan
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Berita -->
<div id="berita-home" style="position: relative;">
  <div class="custom-shape-divider-top-1630941910">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
        class="shape-fill"></path>
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
      <h3 class="mb-5 text-uppercase judul-shadow"
        style="text-align: center; font-family: 'Candal', sans-serif; display: inline-block; padding: 5px 10px; margin: 0 auto; text-shadow: 2px 4px 0px #fff;">
        Berita
      </h3>
    </div>
    <div class="row mb-2">
      <div class="card-deck" style="border: none; ">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div class="col-sm-6 col-lg-4 d-flex align-items-stretch">
          <div class="card mb-5"
            style="background-color: #ED5A41; border: none; box-shadow: 2px 2px 10px rgb(102, 102, 102)">
            <img src="<?= $berita[$i - 1]->gambar; ?>" class="card-img-top" alt="...">
            <div class="card-body text-white" style="padding-bottom: 75px;">
              <h5 class="card-title" style="text-transform: uppercase;"><?= $berita[$i - 1]->JUDUL ?></h5>
              <p class="card-text"><small class="text-white"><?= $berita[$i - 1]->LAST_UPDATE ?></small></p>
            </div>
            <a class="btn btn-news"
              href="<?= base_url() ?>Berita/id/<?= $berita[$i - 1]->ID_KONTEN ?>"><strong>Selengkapnya</strong></a>
          </div>
        </div>
        <?php endfor; ?>
      </div>
    </div>
    <p class="lead mb-0 pb-4" style="text-align: center;"><a href="<?= base_url('Berita') ?>"
        class="font-weight-bold btn btn-other mb-3 d-inline-block"
        style="min-width: 200px; position:relative; z-index:1; ">Berita Lainnya ></a></p>
  </div>
</div>

<!-- Kontak -->
<div id="kontak" class="text-white pb-4" style="position: relative;">
  <div class="custom-shape-divider-top-1630942353">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
        class="shape-fill"></path>
    </svg>
  </div>
  <div class="container">
    <div class="d-none d-lg-block">
      <br><br><br>
    </div>
    <h3 class="pb-3 mb-4 text-uppercase"
      style="text-align: center; font-family: 'Candal', sans-serif; text-shadow: 4px 0px 0px #000;">
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
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4371847219722!2d112.61248451432513!3d-7.953691594271131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827928958613%3A0xd600c9c3727a93aa!2sFakultas+Ilmu+Komputer+Universitas+Brawijaya!5e0!3m2!1sid!2sid!4v1536667346220"
          width="100%" height="300" frameborder="0" style="border: 0;" allowfullscreen></iframe>
        <div class="mb-5 d-md-none d-sm-block"></div>
      </div>
      <div class="col-md-1 d-none d-md-block"></div>
      <div class="col-md-4">
        <h4>Media Sosial</h4>
        <ul class="social-media-links mb-5">
          <li><a href="https://twitter.com/emsi_ub" style="text-decoration: none;"><i class="fab fa-twitter"
                style="color: black;"></i></a></li>
          <li><a href="https://www.instagram.com/kbmsi_ub" style="text-decoration: none;"><i class="fab fa-instagram"
                style="color: black;"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCc7XWqQPVoSx7rAonTRiv9w" style="text-decoration: none;"><i
                class="fab fa-youtube" style="color: black;"></i></a></li>
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
        <p>&copy; 2021. Made with <b>&#x2764; </b> by <a class="text-light"
            href="<?php echo base_url() ?>kelembagaan/emsi/p2s"> P2S EMSI 2021/2022</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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



\
<!-- CSS -->
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Candal&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');



/* Dekorasi */
.kbmsi-text {
position: absolute;
background-image: url('../img/produk/KBMSI.svg');
background-repeat: no-repeat;
left: 10px;
top: 100px;
width: 60px;
height: 300px;
/* background-size: 30px; */
}

.triangle {
background-image: url('../img/produk/tri.svg');
background-repeat: no-repeat;
position: absolute;
top: 0;
right: 0;
height: 300px;
width: 200px;
background-size: 250px;
}

.stars {
background-image: url('../img/produk/spark2.svg');
background-repeat: no-repeat;
position: absolute;
bottom: -100px;
left: 0;
height: 300px;
width: 100px;
background-size: 100px;
}

.star2 {
background-image: url('../img/produk/star-black.svg');
background-repeat: no-repeat;
position: absolute;
bottom: -100px;
right: 0;
height: 300px;
width: 100px;
background-size: 40px;
}

.kbmsi-hor {
background-image: url('../img/component/KBMSI-hor.svg');
background-repeat: no-repeat;
position: absolute;
top: 80px;
left: -70px;
height: 50px;
width: 210px;
}

.kbmsi-hor2 {
background-image: url('../img/component/KBMSI-hor.svg');
background-repeat: no-repeat;
position: absolute;
bottom: 0px;
right: 0px;
height: 50px;
width: 120px;
}

.kbmsi-hor2b {
background-image: url('../img/component/KBMSI-hor.svg');
background-repeat: no-repeat;
position: absolute;
bottom: 0px;
right: 0px;
height: 50px;
width: 120px;
}

.rect {
background-image: url('../img/produk/rec.svg');
background-size: 100px;
background-repeat: no-repeat;
position: absolute;
bottom: 0px;
right: 0px;
height: 120px;
width: 200px;
}

.tri4 {
background-image: url('../img/component/triangle-4.png');
background-size: 100px;
background-repeat: no-repeat;
position: absolute;
top: 50%;
left: -20px;
height: 120px;
width: 200px;
}



/* akhir dekor */




/* Tentang */

.custom-shape-divider-top-1630941772 {
position: absolute;
top: -1px;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
z-index: 0;
}

.custom-shape-divider-top-1630941772 svg {
position: relative;
display: block;
width: calc(135% + 1.3px);
height: 103px;
}

.custom-shape-divider-top-1630941772 .shape-fill {
fill: #D0E4D0;
}

.btn-yellow {
background-color: #FFC12B;
color: black;
}

.btn-yellow:hover {
background-color: white;
color: #FFC12B;
}

/* Berita */

.custom-shape-divider-top-1630941910 {
position: absolute;
top: -1px;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
}

.custom-shape-divider-top-1630941910 svg {
position: relative;
display: block;
width: calc(109% + 1.3px);
height: 100px;
}

.custom-shape-divider-top-1630941910 .shape-fill {
fill: #16376E;
}

/* Kontak */

.custom-shape-divider-top-1630942353 {
position: absolute;
top: -1px;
left: 0;
width: 100%;
overflow: hidden;
line-height: 0;
}

.custom-shape-divider-top-1630942353 svg {
position: relative;
display: block;
width: calc(109% + 1.3px);
height: 102px;
transform: rotateY(180deg);
}

.custom-shape-divider-top-1630942353 .shape-fill {
fill: #FFC12B;
}

/* Kelembagaan */

.font-candal {
font-family: 'Candal', sans-serif;
}

.font-quicksand {
font-family: 'Quicksand', sans-serif;
font-weight: 600;
}

.font-roboto {
font-family: 'Roboto', sans-serif;
}

.judul-shadow {
color: #9D1700;
text-shadow: 2px 4px #FACA2C;
}

.judul-shadow-blue {
color: #16376E;
text-shadow: 2px 4px #FACA2C;
}

#header-kelembagaan {
/* margin: 100px 0; */
background-color: #D0E4D0;
padding: 100px 0;
}

.logo-emsi {
width: 300px;
display: inline-block;
position: absolute;
left: -100px;
}

.logo-emsi-2 {
width: 300px;
}

.logo-bpmsi-2 {
width: 300px;
}

.logo-emsi-3 {
width: 300px;
}

.logo-bpmsi-3 {
width: 250px;
}

.logo-bpmsi {
width: 300px;
display: inline-block;
position: absolute;
right: -100px;
}

.tagline {
font-weight: 600;
}

.logo-dept {
width: 90%;
}

.logo-komisi {
width: 70%;
}

.logo-lembaga-2 {
width: 250px;
}

.or1-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 100px;
right: 0px;
}

.or2-lembaga {
width: 150px;
display: inline-block;
position: absolute;
top: 300px;
left: 0px;
}

.or3-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 500px;
right: 0px;
}

.or4-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 100px;
right: 0px;
}

.or5-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 400px;
left: 0px;
}

.or6-lembaga {
width: 200px;
display: inline-block;
opacity: 0.4;
position: absolute;
top: 600px;
right: 100px;
}

.or7-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1000px;
right: 0px;
}

.or8-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 900px;
left: 50px;
}

.or9-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1500px;
left: 0px;
}

.or10-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 2000px;
right: 0px;
}

.or11-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 100px;
right: 0px;
}

.or12-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 500px;
left: 0px;
}

.or13-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 800px;
right: 0px;
}

.or14-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1100px;
left: 0px;
}

.or15-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1400px;
right: 0px;
}

.or16-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 300px;
right: 0px;
}

.or17-lembaga {
display: inline-block;
position: absolute;
top: 600px;
right: 40px;
}

.or18-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 500px;
left: 0px;
}

.or19-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 800px;
left: 0px;
}

.or20-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1200px;
right: 0px;
}

.or21-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1500px;
left: 0px;
}

.or22-lembaga {
width: 150px;
display: inline-block;
position: absolute;
top: 1600px;
right: 0px;
}

.or23-lembaga {
display: inline-block;
position: absolute;
top: 1600px;
right: 0px;
}

.or24-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 1900px;
left: 0px;
}

.or25-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 2300px;
right: 0px;
}

.or26-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 2500px;
left: 0px;
}

.or27-lembaga {
width: 100px;
display: inline-block;
position: absolute;
top: 2850px;
right: 0px;
}

.or28-lembaga {
width: 150px;
display: inline-block;
position: absolute;
top: 3250px;
left: 0px;
}

.or29-lembaga {
display: inline-block;
position: absolute;
top: 3250px;
left: 0px;
}

.or30-lembaga {
display: inline-block;
position: absolute;
top: 3750px;
right: 100px;
}

.or31-lembaga {
display: inline-block;
position: absolute;
top: 3200px;
left: 100px;
}

/* emsi */

.lembaga-emsi {
background-color: #D0E4D0;
padding: 100px 0;
}

.lembaga-bpmsi {
background-color: #D0E4D0;
padding: 100px 0;
}

.departemen .overlay {
position: absolute;
bottom: 0;
top: 90%;
left: 0;
right: 0;
background-color: #F25743;
overflow: hidden;
width: 0;
height: 50px;
transition: .5s ease;
}

.departemen:hover .overlay {
width: 100%;
cursor: pointer;
}

.departemen .nama-dept {
display: none;
}

.departemen .nama-komisi {
display: none;
}

.departemen .overlay .text {
color: white;
font-size: 24px;
position: absolute;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
white-space: nowrap;
}

#anggota-departemen {
background-color: #D0E4D0;
background-size: 64px 128px;
color: #000;
}

.garis-lembaga {
background-color: #FFC12B;
border-radius: 50px;
width: 200px;
height: 6px;
}

.desc-departemen h2 {
/*color: #f7580f !important;*/
color: #000000 !important;
}

.btn-lembaga {
background: #FFC12B;
display: block;
width: 350px;
height: 50px;
line-height: 40px;
text-align: center;
border: solid 5px #16376E;
border-radius: 50px;
color: black;
font-size: 1rem;
font-weight: bold;
text-decoration: none;
transition: ease all 0.3s;
margin: 30px auto;
}

.btn-lembaga:hover {
background: #16376E;
color: white;
}

/* Close Kelembagaan */

/* Global tags */

body {
background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4
4'%3E%3Cpath fill='%23dfdbe5' fill-opacity='0.4' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
background-repeat: repeat;
font-family: "Roboto Condensed", sans-serif;
}

.kbmsi-orange-text {
color: #f7580f;
}

.kbmsi-dark-text {
color: #343a40;
}

.kbmsi-blue-text {
color: #0093ce;
}

.kbmsi-orange {
background: #f7580f;
}

.kbmsi-blue {
color: #0093ce;
}

h1,
h2,
h3,
h4,
h5,
h6 {
font-family: "Quicksand", serif;
color: red;
}

.bg {
position: relative;
background-color: red !important;
height: 90vh;
display: flex;
justify-content: center;
align-items: center;
}

.bg h2,
.bg h4 {
font-family: sans-serif !important;
}

.logo {
width: 250px;
}

.blue,
.orange-2 {
z-index: 2;
overflow: hidden;
}

.text-about {
opacity: 0;
transform: translateY(50px);
transition: 1s all ease-out;
}

.text-about-appear {
opacity: 1;
transform: translateY(0);
}

.tentang {
width: auto;
display: inline-block;
padding: 5px 10px;
text-shadow: 2px 4px 0px #ED5A41;
font-family: 'Candal', sans-serif;
/* font-weight: 600; */
}

.caption {
font-family: 'Poppins', sans-serif;
font-weight: 400;
}

.aboutus {
/* position: relative;
height: 100vh; */
background: #16376E;
display: flex;
justify-content: center;
align-items: center;
/* margin-top: -2px; */
}

.btn-company {
font-family: 'Poppins', sans-serif;
font-weight: 600;
font-size: 0.9rem;
border-radius: 100px;
transition: 0.3s ease-in;
-webkit-animation: jittery 4s infinite;
animation: jittery 3s infinite;
}

.btn-news {
background: #FACA2B !important;
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
color: #14366E !important;
max-width: 180px;
position: absolute;
right: 20px;
bottom: 20px;
}

.btn-news:hover {
background-color: #14366E !important;
color: #FACA2B !important;
}

.btn-other {
background: #16376E;
color: white;
border-radius: 50px;
}

.btn-other:hover {
background: white;
color: #16376E;
}

.btn-company:hover {
background-color: white;
color: #0c1111;
}

@keyframes jittery {

5%,
50% {
-webkit-transform: scale(1);
transform: scale(1);
}

10% {
-webkit-transform: scale(0.9);
transform: scale(0.9);
}

15% {
-webkit-transform: scale(1.15);
transform: scale(1.15);
}

20% {
-webkit-transform: scale(1.15) rotate(-5deg);
transform: scale(1.15) rotate(-5deg);
}

25% {
-webkit-transform: scale(1.15) rotate(5deg);
transform: scale(1.15) rotate(5deg);
}

30% {
-webkit-transform: scale(1.15) rotate(-3deg);
transform: scale(1.15) rotate(-3deg);
}

35% {
-webkit-transform: scale(1.15) rotate(2deg);
transform: scale(1.15) rotate(2deg);
}

40% {
-webkit-transform: scale(1.15) rotate(0);
transform: scale(1.15) rotate(0);
}
}


#berita-home {
background-color: #FFC12B;
/* margin-top: -178px; Ketika ganti video company profile, hapus line ini */
}

#berita {
background-color: #D0E4D0;
}

#kontak {
background-color: #ED5A41;
font-family: 'Quicksand', sans-serif;
}

/* Override Bootstrap */

.navbar-toggler {
border: none;
}

.navbar-toggler:focus {
outline: none;
}

.jumbotron {
display: table;
width: 100%;
height: 100vh;
margin: 0;
background: none;
}

.display-4 {
font-size: 2.5rem;
}

/* Custom styles */

#nav {
transition: 250ms ease-in-out;
}

.nav-item.running-bar::after {
/* position:absolute; */
top: 100%;
left: 0%;
width: 0;
height: 2px;
background: #ffffff;
display: block;
content: '';
transition: width 0.3s ease-in-out;
}

.nav-item.running-bar:hover:after {
width: 100%;
}

.jumbotron .container {
display: table-cell;
vertical-align: middle;
}

.blog-header {
line-height: 1;
border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
font-family: "Lato", serif;
font-size: 2.25rem;
}

.blog-header-logo:hover {
text-decoration: none;
}

.social-media-links,
.contact-info {
padding: 0;
list-style: none;
}

.social-media-links li {
display: inline-block;
font-size: 2rem;
margin-right: 1rem;
}

.social-media-links li a:hover {
color: #007bff !important;
transition: 100ms;
}

.contact-info li {
font-size: 16px;
}

/* Media queries */

@media (max-width: 768px) {
.rect {
background-size: 100px;
bottom: 0px;
right: 0px;
height: 120px;
width: 40px;
}

.kbmsi-hor2b {
display: none;
}

.blue {
width: 100px;
}

.blue-2,
.blue {
top: 10px;
}

.stars {
bottom: -100px;
left: 0;
height: 200px;
width: 50px;
background-size: 50px;
}

.kbmsi-hor {
top: 80px;
left: -40px;
height: 50px;
width: 150px;
background-size: 150px;
}

.kbmsi-hor2 {
bottom: 0;
right: 0;
height: 50px;
width: 100px;
background-size: 150px;
}




/* */

.logo {
width: 150px;
}

#berita {
margin-top: 3rem;
}

#header-kelembagaan h1 {
font-size: 2em;
}
}

/* Custom scrollbar */

/* width */

::-webkit-scrollbar {
width: .25rem;
}

/* Track */

::-webkit-scrollbar-track {
background: #f1f1f1;
}

/* Handle */

::-webkit-scrollbar-thumb {
background: #343a40;
}

/* Handle on hover */

::-webkit-scrollbar-thumb:hover {
background: #555;
}

/*
* Kelembagaan
*/

.logo-lembaga {
animation-name: floating;
animation-duration: 4s;
animation-iteration-count: infinite;
animation-timing-function: ease-in-out;
}

.informasi {
height: 120px;
width: 0;
border-right: 50px solid #f7590fb2;
border-bottom: 25px solid transparent;
border-top-left-radius: 15%;
box-sizing: border-box;
display: block;
position: absolute;
right: 0;
bottom: -15%;
}

.bph .kadep img {
width: 300px !important;
}

#departemen {
font-size: 1em;
right: 0;
top: 0;
background: transparent;
}

#departemen::-webkit-scrollbar,
#anggota-departemen::-webkit-scrollbar {
display: none;
}

#departemen img {
width: 100%;
}

.departemen {
transition: 500ms;
}

.departemen:hover {
cursor: pointer;
transform: translateY(10);
transform: scale(0.8);
}

#anggota-departemen img {
width: 75%;
}

.staff-departemen {
margin: 0 30px;
/* padding: 40px; */
}

.staff-departemen .col-md-4 {
/* margin-right: 25px !important;
margin-left: 25px !important; */
margin-top: 15px;
margin-bottom: 25px;
}

.bph .col-md-4 {
height: 370px !important;
/* animation */
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
/* -webkit-animation-delay: 2s;
animation-delay: 2s; */
-webkit-animation-name: slideInUp;
animation-name: slideInUp;
}

#anggota-departemen .col-md-4 h5 {
margin: 10px 0;
min-height: 35px;
}

.desc-departemen {
color: #000000;
vertical-align: middle;
z-index: 999;
}

.sosial-media {
font-size: 2rem;
width: 100%;
display: flex;
justify-content: center;
}

/* .bph .sosial-media{
margin-right: 10% !important;
margin-left: 10% !important;
} */

.sosial-media a {
color: #fff;
text-align: center;
margin: 0 10px;
}

.sosial-media a:hover i {
color: #0e89b9;
}

a:hover {
text-decoration: none;
}

.sosial-media .disable-link {
/*color: #ff8c57 !important;*/
color: #ffffff50 !important;
cursor: unset !important;
pointer-events: none;
}

.sosial-media .disable-link:hover i {
color: #ff8c57 !important;
}

.hide {
display: none;
}

.org-structure {
max-width: 50%;
}

.org-structure img {
position: relative;
z-index: 10;
}

.line-structure {
max-width: 45%;
margin-top: -10%;
}

.line-structure img {
position: relative;
z-index: -10;
}

@media (prefers-reduced-motion) {

.bph,
.staff-departemen {
-webkit-animation: unset !important;
animation: unset !important;
-webkit-transition: none !important;
transition: none !important;
}
}

@media(max-width: 1024px) {
.bph .kadep img {
width: 230px !important;
}

.logo-lembaga-2 {
width: 200px;
}

.logo-lembaga-2 {
width: 250px;
}

.judul-shadow-blue {
margin-top: 0px !important;
}

.bph {
margin-bottom: -150px;
}

.or16-lembaga {
width: 70px;
}

.or17-lembaga {
width: 90px;
top: 550px;
right: 30px;
}

.or18-lembaga {
width: 40px;
}

.or19-lembaga {
width: 80px;
top: 620px;
}

.or20-lembaga {
width: 70px;
top: 1000px;
}

.or21-lembaga {
width: 80px;
top: 1200px;
}

.or22-lembaga {
width: 100px;
top: 1400px;
}

.or23-lembaga {
width: 40px;
top: 1400px;
}

.or24-lembaga {
width: 70px;
top: 1550px;
}

.or25-lembaga {
width: 90px;
top: 2400px;
}

.or26-lembaga {
width: 80px;
top: 2700px;
}

.or27-lembaga {
width: 80px;
top: 3000px;
}

.or31-lembaga {
width: 80px;
left: 0px;
}
}

@media(min-width: 1024px) {
#departemen {
align-items: center;
align-content: center;
overflow: auto;
}

.desc-departemen {
margin-top: 5em;
}

.nondept {
margin-right: 20%;
margin-left: 20%;
}

.or1-lembaga {
width: 80px;
top: 120px;
}

.or2-lembaga {
top: 250px;
}

.or3-lembaga {
width: 70px;
top: 450px;
}

.or4-lembaga {
width: 80px;
top: 100px;
}

.or5-lembaga {
width: 80px;
top: 400px;
}

.or6-lembaga {
width: 150px;
top: 600px;
}

.or7-lembaga {
width: 80px;
top: 1000px;
}

.or8-lembaga {
width: 80px;
top: 900px;
}

.or9-lembaga {
width: 80px;
top: 1500px;
}

.or10-lembaga {
width: 80px;
top: 1900px;
}
}

@media(max-width: 768px) {
.desc-departemen h2 {
margin-top: 2em;
font-size: 1.5em !important;
}

.bph .kadep img {
width: 200px !important;
}

.sosial-media {
font-size: 1.5em;
}

.org-structure {
max-width: 50%;
}

.org-structure img {
position: relative;
z-index: 10;
}

.line-structure {
max-width: 60%;
margin-top: -11%;
}

.line-structure img {
position: relative;
z-index: -10;
}

.hehe2 {
display: inline-block;
}

.bph {
margin-bottom: -150px;
}

.desc-lembaga h2 {
font-size: 28px;
}

.or16-lembaga {
width: 50px;
}

.or17-lembaga {
width: 70px;
top: 800px;
right: 0px;
}

.or18-lembaga {
width: 35px;
top: 1200px;
}

.or19-lembaga {
width: 70px;
top: 1100px;
}

.or20-lembaga {
width: 60px;
top: 1500px;
}

.or21-lembaga {
width: 80px;
top: 1700px;
}

.or22-lembaga {
width: 80px;
top: 2000px;
}

.or23-lembaga {
display: none;
}

.or24-lembaga {
display: none;
}

.or25-lembaga {
width: 60px;
top: 2500px;
}

.or26-lembaga {
width: 60px;
top: 3000px;
}

.or27-lembaga {
display: none;
}

.or28-lembaga {
display: none;
}

.or29-lembaga {
display: none;
}

.or30-lembaga {
display: none;
}

.or31-lembaga {
display: none;
}
}

@media(max-width: 767px) {
.show-on-sm {
display: block !important;
}

#departemen {
padding-right: 50px;
padding-left: 50px;
}

#anggota-departemen .bph .col-md-4 {
height: 420px !important;
}

#anggota-departemen .col-md-4 {
height: 370px !important;
}

.bph img {
width: 80%;
}

.departemen {
margin-top: 40px;
margin-bottom: 10px;
}

.desc-departemen {
margin: 3em 0;
text-align: center;
}

#anggota-departemen {
height: auto;
overflow-y: auto !important;
}

#anggota-departemen .col-md-4 {
height: auto !important;
margin-bottom: 50px;
}

.bph .col-md-3 {
height: 410px !important;
}

.bph img {
width: 80%;
}

.nondept img {
width: 65% !important;
}

.sosial-media {
font-size: 2em;
}

.org-structure {
max-width: 70%;
}

.org-structure img {
position: relative;
z-index: 10;
}

.line-structure {
max-width: 65%;
margin-top: -15%;
}

.line-structure img {
position: relative;
z-index: -10;
}
}

/*
* footer
*/

#sosial-media {
color: rgba(255, 255, 255, 0.904);
font-size: 1.5em;
transition: 500ms;
text-align: center;
}

#sosial-media .col-2 a {
color: rgba(255, 255, 255, 0.904) !important;
}

#sosial-media a:hover i {
color: #007bff;
transform: translateY(10);
transform: scale(1.1)
}

#sosial-media-text {
letter-spacing: 0.6em;
font-weight: 500 !important;
}

#sitemap ul {
list-style: none;
padding-inline-start: 20px;
}

#sitemap a {
color: rgba(255, 255, 255, 0.87) !important;
font-weight: 300
}

#sitemap a:hover {
color: #007bff !important;
font-weight: 500
}

.copyright {
color: #fff;
background-color: #262b2f;
font-weight: 100;
padding: 10px 0;
}

.copyright a:hover {
color: #007bff;
font-weight: 800;
}

/*
* All Animation css
*/

@keyframes floating {
0% {
transform: translateY(0px);
}

50% {
transform: translateY(20px);
}

100% {
transform: translateY(0px);
}
}

@-webkit-keyframes slideInUp {
from {
-webkit-transform: translate3d(0, 100%, 0);
transform: translate3d(0, 100%, 0);
visibility: visible;
}

to {
-webkit-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0);
}
}

@keyframes slideInUp {
from {
-webkit-transform: translate3d(0, 100%, 0);
transform: translate3d(0, 100%, 0);
visibility: visible;
}

to {
-webkit-transform: translate3d(0, 0, 0);
transform: translate3d(0, 0, 0);
}
}

.slideInUp {
-webkit-animation-name: slideInUp;
animation-name: slideInUp;
}

.full-page-modal {
/* max-width: 100vw;
max-height: 100vh; */
min-width: 100vw;
min-height: 100vh;
margin: 0 !important;
}

.h-100vh {
min-height: 100vh !important;
}

.close-modal {
position: fixed;
top: 10px;
right: 20px;
z-index: 1050;
}

.act-btn {
background: #0093CE;
display: block;
width: 200px;
height: 50px;
line-height: 50px;
text-align: center;
color: white;
font-size: 1rem;
font-weight: bold;
text-decoration: none;
transition: ease all 0.3s;
margin: 10px auto;
}

.act-btn:hover {
background: #F7580F;
color: white !important;
}

@media (min-width: 1199.98px) {
.act-btn.main {
width: 400px !important;
position: relative;
left: 2%;
top: 70px;
}
}

@media (min-width: 991.98px) {
.act-btn.main {
width: 300px;
position: relative;
left: 2%;
top: 70px;
}

.tentang {
/* position: absolute; */
top: 0;
margin: 0 auto;
}

.aboutus {
height: 90vh;
}
}

@media (max-width: 991.97px) {
.aboutus {
/* position: relative; */
padding: 60px 0;
height: unset;
}

#berita {
margin-top: 3rem;
}

.aboutus .container .text-about {
margin: 0;
}

.aboutus .text-about {
max-width: 100vw;
}

#berita-home {
padding-top: 50px;
}

#kontak {
padding: 70px 0 20px;
}

.logo-emsi {
width: 200px;
left: 50px;
}

.logo-bpmsi {
width: 200px;
right: 50px;
}

.logo-emsi-3 {
width: 200px;
}

.logo-bpmsi-3 {
width: 200px;
}

.desc-lembaga {
margin: auto;
text-align: center;
padding: 0 5%;
}

.desc-lembaga .garis-lembaga {
margin: auto;
}

.or1-lembaga {
width: 60px;
top: 120px;
}

.or2-lembaga {
width: 100px;
top: 250px;
}

.or3-lembaga {
width: 50px;
top: 450px;
}

.or10-lembaga {
top: 1900px;
}

.departemen .overlay {
display: none;
}

.departemen:hover .overlay {
display: none;
}

.departemen .overlay .text {
display: none;
}

.departemen .nama-dept {
display: inline-block;
background-color: #F25743 !important;
right: 20px;
left: 20px;
width: 100%;
height: 40px;
color: white;
}

.departemen .nama-komisi {
display: inline-block;
right: 20px;
left: 20px;
background-color: #F25743 !important;
width: 100%;
height: 40px;
color: white;
}
}

@media (min-width: 768px) {
.act-btn.main {
width: 250px;
position: relative;
left: 2%;
top: 70px;
}

.bg h2 {
font-size: 77px;
}

.yellow {
top: 20px;
left: -60px;
}

.blue {
left: -150px;
bottom: 10px;
}

.orange {
right: 40px;
bottom: 400px;
width: 140px;
}

.yellow-2 {
top: -120px;
right: 30px;
}

.blue-2 {
right: 0;
bottom: 20px;
width: 150px;
}

.orange-2 {
right: 200px;
bottom: 60px;
width: 100px;
}

#departemen img {
width: 60%;
}

.or4-lembaga {
width: 70px;
top: 100px;
}

.or5-lembaga {
width: 80px;
top: 400px;
}

.or6-lembaga {
width: 80px;
top: 600px;
}

.or7-lembaga {
width: 70px;
top: 1000px;
}

.or8-lembaga {
width: 70px;
top: 900px;
}

.or9-lembaga {
width: 70px;
top: 1500px;
}

.or10-lembaga {
width: 70px;
top: 2000px;
}

#lembaga-emsi p {
font-size: 14px;
}

#lembaga-emsi ol {
font-size: 14px;
}

#lembaga-bpmsi p {
font-size: 14px;
}

#lembaga-bpmsi ol {
font-size: 14px;
}
}

@media (max-width: 767.98px) {
.act-btn {
position: fixed;
left: 0% !important;
bottom: 0% !important;
z-index: 3;
width: 100%;
margin: auto;
}

.bg h2 {
font-size: 10vw;
}

.bg h4 {
font-size: 16px;
}

.yellow {
max-width: 150px;
}

.blue {
left: 560px;
}

.orange {
max-width: 150px;
left: 20px;
top: 400px;
}

.orange-2 {
display: none;
}

.yellow-2 {
width: 100px;
left: -30px;
top: 100px;
}

.yellow {
top: 0;
right: 0;
}

.blue {
left: 200px;
}

.blue-2 {
width: 100px;
left: 0;
top: 450px;
}

.orange {
right: 0;
bottom: 80px;
}

.logo-emsi {
left: 0px;
}

.logo-bpmsi {
right: 0px;
}

#header-kelembagaan h3 {
font-size: 24px;
}

.or4-lembaga {
width: 80px;
top: 200px;
}

.or5-lembaga {
width: 80px;
top: 600px;
}

.or6-lembaga {
width: 150px;
top: 800px;
}

.or7-lembaga {
width: 80px;
top: 1300px;
}

.or8-lembaga {
width: 80px;
top: 1900px;
}

.or9-lembaga {
width: 80px;
top: 3000px;
}

.or10-lembaga {
width: 80px;
top: 2500px;
}

.or11-lembaga {
width: 100px;
top: 150px;
}

.or12-lembaga {
width: 100px;
}

.or13-lembaga {
width: 100px;
}

.or14-lembaga {
width: 100px;
}

.or15-lembaga {
width: 100px;
}
}

@media (max-width: 649.98px) {
.org-structure {
width: 50%;
}

.foto-lembaga {
margin-top: -50px;
}

.logo-emsi {
width: 150px;
left: 50px;
}

.logo-bpmsi {
width: 150px;
right: 50px;
}

.logo-dept {
width: 70%;
}

.logo-komisi {
width: 50%;
}

.or2-lembaga {
width: 90px;
top: 200px;
}

.or3-lembaga {
width: 45px;
top: 400px;
}
}

@media (max-width: 575.98px) {
.logo-dept {
width: 60% !important;
}

.logo-komisi {
width: 50% !important;
}

.bph img {
width: 55%;
}

.bph {
margin-bottom: -100px;
}
}

@media (max-width: 499.98px) {
.org-structure {
width: 60%;
}

.tagline {
font-size: 20px;
}

.logo-emsi {
left: 20px;
}

.logo-bpmsi {
right: 20px;
}

.logo-bpmsi-2 {
width: 200px;
}

.logo-emsi-2 {
width: 200px;
}

.logo-emsi-3 {
width: 170px;
}

.logo-bpmsi-3 {
width: 150px;
}

.departemen .nama-dept {
right: 50px;
left: 50px;
width: 100%;
}

.departemen .nama-komisi {
right: 50px;
left: 50px;
width: 100%;
}

.or4-lembaga {
width: 60px;
top: 200px;
}

.or5-lembaga {
width: 60px;
top: 600px;
}

.or6-lembaga {
width: 100px;
top: 1100px;
}

.or7-lembaga {
width: 60px;
top: 1500px;
}

.or8-lembaga {
width: 60px;
top: 2200px;
left: 20px;
}

.or9-lembaga {
width: 60px;
top: 3500px;
}

.or10-lembaga {
width: 60px;
top: 2800px;
}

.or11-lembaga {
width: 65px;
top: 250px;
}

.or12-lembaga {
width: 65px;
top: 700px;
}

.or13-lembaga {
width: 65px;
top: 1000px;
}

.or14-lembaga {
width: 65px;
top: 1300px;
}

.or15-lembaga {
width: 75px;
top: 1900px;
}

.or16-lembaga {
width: 50px;
}

.or17-lembaga {
width: 30px;
top: 800px;
right: 0px;
}

.or18-lembaga {
width: 35px;
top: 1200px;
}

.or19-lembaga {
width: 50px;
top: 1100px;
}

.or20-lembaga {
width: 40px;
top: 1500px;
}

.or21-lembaga {
width: 40px;
top: 1700px;
}

.or22-lembaga {
width: 60px;
top: 2000px;
}

.or25-lembaga {
width: 60px;
top: 2500px;
}

.or26-lembaga {
width: 40px;
top: 3000px;
}

.or27-lembaga {
width: 50px;
top: 3500px;
}

.or28-lembaga {
width: 70px;
top: 4000px;
}

.or29-lembaga {
width: 30px;
top: 4000px;
}
}

@media (max-width: 384px) {
.tentang {
font-size: 10vw;
}

.bph {
margin-bottom: -150px;
}

.org-structure {
margin-top: -30px;
width: 90%;
}

#header-kelembagaan {
margin-bottom: -100px;
}

#header-kelembagaan h3 {
font-size: 18px;
}

.btn-lembaga {
width: 300px;
font-size: 0.9rem;
}

.logo-emsi {
width: 120px;
left: 20px;
}

.logo-bpmsi {
width: 120px;
right: 20px;
}

.or1-lembaga {
width: 50px;
top: 150px;
}

.or2-lembaga {
width: 70px;
top: 200px;
}

.or3-lembaga {
display: none;
}
}

@media (max-width: 325px) {
.btn-lembaga {
width: 180px;
line-height: 18px;
font-size: 12px;
}
}

.dot {
display: inline-block;
position: relative;
bottom: 10px;
left: 3px;
height: 8px;
width: 8px;
border-radius: 50%;
background: red;
}



/* rizaldi */
.ltr {
background-color: #E0DBD5;
}