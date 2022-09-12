<div class="top-spacing">

</div>

<header>
  <div class="container text-center reset">
    <h1 class="gelap">Semangat Pagi!</h1>
    <h5 style="color: #000">#Demokrasi Beraksi <br>#Kolaborasi Beraksi </h5>
  </div>
  <img src="assets/img/sembilan/pemandangan.svg" width="100%" style="margin-top:-50px;">
</header>

<main class="terang text-center pt-0" width="100%">

  <!-- about kbmsi -->
  <div class="row text-about bdark mx-auto pb-5 " style="width:100% ;">
    <div class="col-lg-12 text-center mx-auto my-4 w-80 ">
      <h1 class="tentang mb-4 text-white text-uppercase">Tentang KBMSI</h1>
    </div>

    <div class="col-12 col-md-12 col-lg-4 mx-auto text-white text-center mt-5 px-0 ytb ">
      <iframe class="mx-auto ytb" src="https://www.youtube.com/embed/jfhMkhzzEv4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <!-- <img src="<?= base_url('assets/img/logo-kbmsi.svg') ?>" alt=""> -->
    </div>
    <div class="col-12 col-md-12 col-lg-4 mx-auto text-white text-center mt-5 px-0 align-items-center d-flex ">
      <p class="caption align-content-center"><strong>Keluarga Besar Mahasiswa Sistem Informasi Universitas Brawijaya</strong> (KBMSI UB)
        adalah wadah bagi mahasiswa Sistem Informasi Universitas Brawijaya dalam mengembangkan segala potensi yang ada
        dalam diri mereka dengan semangat kekeluargaan yang erat. </p>
    </div>
    <div class="col-12 pt-lg-5">
      <a href="<?= base_url('Kelembagaan') ?>" class="btn btn-lg btn-company mt-3 text-uppercase tombol">Kelembagaan</a>
    </div>

  </div>

  <!-- BERITA -->
  <div class=" sambungan lineless blight">
    <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path class="shadow-lg" fill="#405649" fill-opacity="1" d="M0,256L11.4,256C22.9,256,46,256,69,218.7C91.4,181,114,107,137,74.7C160,43,183,53,206,74.7C228.6,96,251,128,274,138.7C297.1,149,320,139,343,160C365.7,181,389,235,411,224C434.3,213,457,139,480,106.7C502.9,75,526,85,549,106.7C571.4,128,594,160,617,165.3C640,171,663,149,686,122.7C708.6,96,731,64,754,69.3C777.1,75,800,117,823,154.7C845.7,192,869,224,891,197.3C914.3,171,937,85,960,64C982.9,43,1006,85,1029,117.3C1051.4,149,1074,171,1097,170.7C1120,171,1143,149,1166,170.7C1188.6,192,1211,256,1234,261.3C1257.1,267,1280,213,1303,208C1325.7,203,1349,245,1371,245.3C1394.3,245,1417,203,1429,181.3L1440,160L1440,0L1428.6,0C1417.1,0,1394,0,1371,0C1348.6,0,1326,0,1303,0C1280,0,1257,0,1234,0C1211.4,0,1189,0,1166,0C1142.9,0,1120,0,1097,0C1074.3,0,1051,0,1029,0C1005.7,0,983,0,960,0C937.1,0,914,0,891,0C868.6,0,846,0,823,0C800,0,777,0,754,0C731.4,0,709,0,686,0C662.9,0,640,0,617,0C594.3,0,571,0,549,0C525.7,0,503,0,480,0C457.1,0,434,0,411,0C388.6,0,366,0,343,0C320,0,297,0,274,0C251.4,0,229,0,206,0C182.9,0,160,0,137,0C114.3,0,91,0,69,0C45.7,0,23,0,11,0L0,0Z"></path>
    </svg>
  </div>

  <div id="berita-home" class="blight" style="position: relative;">
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
        <h1 class="mb-5 text-uppercase gelap mx-auto" style="text-align: center; font-family: 'Candal', sans-serif; display: inline-block; padding: 5px 10px; margin: 0 auto; text-shadow: 5px 4px 8px rgba(0, 0, 0, 0.25);;">
          Berita
        </h1>
      </div>
      <div class="row mb-2">
        <div class="card-deck" style="border: none; ">
          <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div class="col-sm-6 col-lg-4 d-flex align-items-stretch  ">
              <div class="card mb-5 bdark" style="border: none; box-shadow: 2px 2px 10px rgb(102, 102, 102)">
                <img src="<?= $berita[$i - 1]->gambar; ?>" class="card-img-top" alt="...">
                <div class="card-body text-white" style="padding-bottom: 75px;">
                  <h6 class="card-title terang text-left" style="text-transform: uppercase;"><?= $berita[$i - 1]->JUDUL ?></h6>
                  <p class="card-text terang text-left"><small class="text-white"><?= $berita[$i - 1]->LAST_UPDATE ?></small></p>
                </div>
                <a class="btn btn-news " href="<?= base_url() ?>Berita/id/<?= $berita[$i - 1]->ID_KONTEN ?>">Selengkapnya</a>
                <a href="<?= base_url() ?>Berita/id/<?= $berita[$i - 1]->ID_KONTEN ?>"></a>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
      <p class="lead mb-0 pb-4" style="text-align: center;"><a href="<?= base_url('Berita') ?>" class="btn btn-lg btn-company mt-3 text-uppercase tombol">Selengkapnya</a></p>
    </div>
  </div>

  <!-- KONTAK -->

  <div class="sambunganFooter blight">
    <img src="assets/img/sembilan/footer.svg" width="100%">
  </div>


  <div id="kontak" class="text-white bdark" style="position: relative; margin-top:-5px;">
    <div class="container pb-0 mb-0">
      <div class="d-none d-lg-block">
        <br><br><br>
      </div>
      <h2 class="pb-3 mb-4 text-uppercase" style="text-align: center; font-family: 'Candal', sans-serif;">
        KONTAK
      </h2>
      <div class="row ">
        <div class="col-md-12 bg-l">
          <h3 style="color: #DF7833;">Sekretariat</h3> <br>
          <h6>
            Gedung Kreativitas Mahasiswa Lantai 2 No.
            Fakultas Ilmu Komputer
            Universitas Brawijaya<br> <br>
            Jalan Veteran nomor 8 Malang, Jawa Timur, Indonesia 65145
          </h6>
          </p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4371847219722!2d112.61248451432513!3d-7.953691594271131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827928958613%3A0xd600c9c3727a93aa!2sFakultas+Ilmu+Komputer+Universitas+Brawijaya!5e0!3m2!1sid!2sid!4v1536667346220" frameborder="0" style="border: 0;" allowfullscreen class="gmaps "></iframe>
          <div class="mb-5 d-md-none d-sm-block"></div>
        </div>
        <div class="col-md-12">
          <br>
          <h3 style="color: #DF7833;"> Media Sosial</h3>
          <ul class=" d-flex text-center mx-auto justify-content-center " style="list-style-type: none;">
            <!-- <li><a href="https://twitter.com/emsi_ub" style="text-decoration: none; "><i class="bi bi-twitter terang m-2 "></i></a></li> -->
            <li class="m-3"><a href="https://twitter.com/emsi_ub" style="text-decoration: none; "><img src="assets/img/sembilan/twt.svg" alt=""></a></li>
            <li class="m-3"><a href="https://www.instagram.com/kbmsi_ub" style="text-decoration: none;"><img src="assets/img/sembilan/ig.svg" alt=""></i></a></li>
            <li class="m-3"><a href="https://www.youtube.com/channel/UCc7XWqQPVoSx7rAonTRiv9w" style="text-decoration: none;"><img src="assets/img/sembilan/yt.svg" alt=""></a></li>
          </ul>
          <h3 style="color: #DF7833;">Informasi Kontak</h3>
          <ul class="contact-info mb-5 " style="font-weight: bold;list-style-type: none;">
            <li><i class="bi bi-telephone-fill terang"></i> &nbsp;0857 0741 2129</li>
            <li><i class=" bi bi-at terang"></i> &nbsp; kbmsi@ub.ac.id</li>
            <li><i class=" bi bi-line terang"></i> &nbsp; @kig7594u</li>
          </ul>
          <p>&copy; 2022. Made with <b>&#x2764; </b> by <a class="text-light" href="<?php echo base_url() ?>kelembagaan/emsi/p2s"> P2S EMSI 2022/2023</p>
        </div>
      </div>
    </div>
  </div>
</main>