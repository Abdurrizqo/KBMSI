<style>
  /*card*/
  section {
    padding-top: 4rem;
    padding-bottom: 5rem;
    background-color: #f1f4fa;
  }

  .wrap {
    display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 7px 7px 30px -5px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
  }

  .wrap:hover .mbr-iconfont {
    color: white !important;
  }

  .wrap:hover {
    /*background: linear-gradient(135deg, #6394ff 0%, #0a193b 100%);*/
    background: linear-gradient(135deg, #0093ce 0%, #eee 100%);
    color: white;
  }

  .ico-wrap {
    margin: auto;
  }

  .mbr-iconfont {
    font-size: 4.5rem !important;
    /*color: #313131;*/
    color: #343a40;
    margin: 1rem;
    padding-right: 1rem;
  }

  .vcenter {
    margin: auto;
  }

  .mbr-section-title3 {
    text-align: left;
  }

  /*.text-wrap{
  padding-right: 9rem;
  }*/
  h2 {
    margin-top: 1.5rem;
    margin-bottom: 0.5rem;
  }

  .display-5 {
    font-family: "Source Sans Pro", sans-serif;
    font-size: 1.4rem;
  }

  .mbr-bold {
    font-weight: 700;
  }

  p {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    line-height: 25px;
  }

  .display-6 {
    font-family: "Source Sans Pro", sans-serif;
    font-size: 1re;
  }

  /*card apps*/
  .box1 img,
  .box1:after,
  .box1:before {
    width: 100%;
    transition: all 0.3s ease 0s;
  }

  .box1 .icon,
  .box2,
  .box3,
  .box4,
  .box5 .icon li a {
    text-align: center;
  }

  .box1:after,
  .box1:before {
    content: "";
  }

  .box1 {
    overflow: hidden;
  }

  .box1 .title,
  .box10 .title,
  .box4 .title,
  .box7 .title {
    letter-spacing: 1px;
  }

  .box3 .post,
  .box4 .post,
  .box5 .post,
  .box7 .post {
    font-style: italic;
  }

  /*body {
  background-color: #f1f1f2;
  }*/
  .mt-30 {
    margin-top: 30px;
  }

  .mt-40 {
    margin-top: 40px;
  }

  .mb-30 {
    margin-bottom: 30px;
  }

  .box1 .icon,
  .box1 .title {
    margin: 0;
    position: absolute;
  }

  .box1 {
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    position: relative;
    margin-bottom: 1rem;
  }

  .box1:after,
  .box1:before {
    height: 50%;
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    transform-origin: 100% 0;
    transform: rotateZ(90deg);
  }

  .box1:after {
    top: auto;
    bottom: 0;
    transform-origin: 0 100%;
  }

  .box1:hover:after,
  .box1:hover:before {
    transform: rotateZ(0);
  }

  .box1 img {
    height: auto;
    transform: scale(1) rotate(0);
  }

  .box1:hover img {
    /* filter: sepia(80%); */
    transform: scale(1.3);
  }

  .box1 .title {
    font-size: 19px;
    font-weight: 600;
    color: #fff;
    text-transform: uppercase;
    text-shadow: 0 0 1px #004cbf;
    bottom: 10px;
    left: 10px;
    opacity: 0;
    z-index: 2;
    transform: scale(0);
    transition: all 0.5s ease 0.2s;
  }

  .box1:hover .title {
    opacity: 1;
    transform: scale(1);
  }

  .box1 .icon {
    padding: 7px 5px;
    list-style: none;
    /*background: #004cbf;*/
    background: #0589be;
    border-radius: 0 0 0 10px;
    top: -100%;
    right: 0;
    z-index: 2;
    transition: all 0.3s ease 0.2s;
  }

  .box1:hover .icon {
    top: 0;
  }

  .box1 .icon li {
    display: block;
    margin: 10px 0;
  }

  .box1 .icon li a {
    display: block;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 10px;
    font-size: 18px;
    color: #fff;
    transition: all 0.3s ease 0s;
  }

  .box2 .icon li a,
  .box3 .icon a:hover,
  .box4 .icon li a:hover,
  .box5 .icon li a,
  .box6 .icon li a {
    border-radius: 50%;
  }

  .box1 .icon li a:hover {
    color: #fff;
    box-shadow: 0 0 10px #000 inset, 0 0 0 3px #fff;
  }

  @media only screen and (max-width: 990px) {
    .box1 {
      margin-bottom: 30px;
    }
  }

  /*card magz*/
  /*********************** Demo - 15 *******************/
  .box15 {
    box-shadow: 0 0 5px #7e7d7d;
    text-align: center;
  }

  .box15 .icon {
    padding: 0;
    list-style: none
  }

  /* .box15 {
  position: relative;
  } */
  .box15 img {
    width: 100%;
    height: auto;
  }

  .box15 .box-content {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.5s ease 0s;
  }

  .box15:hover .box-content {
    background-color: rgba(255, 242, 242, 0.8);
  }

  .box15 .box-content:after,
  .box15 .box-content:before {
    content: "";
    width: 50px;
    height: 50px;
    position: absolute;
    opacity: 0;
    transform: scale(1.5);
    transition: all 0.6s ease 0.3s;
  }

  .box15 .box-content:before {
    border-left: 1px solid #040404;
    border-top: 1px solid #040404;
    top: 19px;
    left: 19px;
  }

  .box15 .box-content:after {
    border-bottom: 1px solid #040404;
    border-right: 1px solid #040404;
    bottom: 19px;
    right: 19px;
  }

  .box15:hover .box-content:after,
  .box15:hover .box-content:before {
    opacity: 1;
    transform: scale(1);
  }

  .box15 .title {
    font-size: 22px;
    color: #000;
    margin: 10;
    position: relative;
    top: 0;
    text-align: center;
    opacity: 0;
    transition: all 1s ease 10ms;
  }

  .box15:hover .title {
    top: 39%;
    opacity: 1;
    transition: all 0.5s cubic-bezier(1, -0.53, 0.405, 1.425) 10ms;
  }

  .box15 .title:after {
    content: "";
    width: 0;
    height: 1px;
    background: #040404;
    position: absolute;
    bottom: -8px;
    left: 0;
    right: 0;
    margin: 0 auto;
    transition: all 1s ease 0s;
  }

  .box15:hover .title:after {
    width: 80%;
    transition: all 1s ease 0.8s;
  }

  .box15 .icon {
    width: 100%;
    margin: 0 auto;
    position: absolute;
    bottom: 0;
    opacity: 0;
    transition-duration: 0.6s;
    transition-timing-function: cubic-bezier(1, -0.53, 0.405, 1.425);
    transition-delay: 0.1s;
  }

  .box15:hover .icon {
    bottom: 39%;
    opacity: 1;
  }

  .box15 .icon li {
    display: inline-block;
  }

  .box15 .icon li a {
    display: block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    color: #000;
    border: 1px solid #000;
    margin-right: 5px;
    transition: all 0.3s ease-in-out 0s;
  }

  .box15 .icon li a:hover {
    background: #000;
    color: #fff;
  }

  .box15 .read-more {
    display: block;
    width: 120px;
    background: #178993;
    border-radius: 5px;
    font-size: 14px;
    color: #fff;
    text-transform: capitalize;
    padding: 10px 0;
    margin: 0 auto;
  }

  a {
    color: #0589be;
  }

  @media only screen and (max-width: 990px) {
    .box15 {
      margin-bottom: 30px;
    }
  }

  .new {
    background-color: red;
    color: white;
    font-size: .8rem;
    padding: 1px 2px 1px 2px;
  }
</style>
<!-- Produk -->
<div id="produk">
  <br><br>
  <div class="container mt-40">
    <div class="container">
      <div class="d-none d-lg-block">
        <br>
      </div>
      <h3>Produk Hukum</h3>
      <br>
      <div class="row mbr-justify-content-center">

        <div class="col-lg-4 mbr-col-md-10">
          <a href="https://drive.google.com/file/d/1jlsAPErGNWb8ZuBdMqVBGLenB7ZfYFyL/view?usp=sharing" target="_blank">
            <div class="wrap">
              <div class="ico-wrap">
                <span class="mbr-iconfont fa-file-invoice fa"></span>
              </div>
              <div class="text-wrap vcenter" id="adart">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">AD/ART <span class="new">NEW</span></h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Anggaran Dasar/Anggaran Rumah Tangga</p>
              </div>
            </div>
          </a>
        </div>

        <div class="col-lg-4 mbr-col-md-10">
          <a href="https://bit.ly/GBHK-EMSI" target="_blank">
            <div class="wrap">
              <div class="ico-wrap">
                <span class="mbr-iconfont fa-file-invoice fa"></span>
              </div>
              <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">GBHK </h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Garis Besar Haluan Kerja Lembaga KBMSI</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 mbr-col-md-10">
          <a href="https://drive.google.com/file/d/1CVwKn9Az9ap3x7qzJh6X9wm-yp6rVlCx/view?usp=sharing" target="_blank">
            <div class="wrap">
              <div class="ico-wrap">
                <span class="mbr-iconfont fa-file-invoice fa"></span>
              </div>
              <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">UU PEMILWA </h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Undang-Undang Pemilihan Wakil Mahasiswa</p>
              </div>
            </div>
            <!-- <div class="col-lg-4 mbr-col-md-10">
  <a href="https://www.dropbox.com/s/whlvlnqsdakjnkk/UU%20PEMILWA%202018.pdf?dl=0" target="_blank">
   <div class="wrap">
    <div class="ico-wrap">
     <span class="mbr-iconfont fa-file-invoice fa"></span>
   </div> -->
            <!--  <div class="text-wrap vcenter">
     <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">HASIL SIDANG </h2>
     <p class="mbr-fonts-style text1 mbr-text display-6">Hasil Sidang MKBMSI</p>
   </div>
 </div> -->
          </a>
        </div>
      </div>
    </div>
    <hr style="width: 100%; color: rgb(145, 145, 145); height: 1px; background-color:rgb(145, 145, 145);" />
    <div class="container">
      <div class="d-none d-lg-block">
        <br>
      </div>
      <h3>Produk Legislatif</h3>
      <br>
      <div class="row mbr-justify-content-center">

        <div class="col-lg-4 mbr-col-md-10">
          <a href="https://drive.google.com/drive/folders/1-ScU6m10WI_2Wkb6JGel7hPfjLObzv7T?usp=sharing" target="_blank">
            <div class="wrap">
              <div class="ico-wrap">
                <span class="mbr-iconfont fa-file-invoice fa"></span>
              </div>
              <div class="text-wrap vcenter" id="adart">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">HASIL SIDANG <span class="new">NEW</span></h2>
                <p class="mbr-fonts-style text1 mbr-text display-6">Hasil Sidang Istimewa & Pleno MKBMSI</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <hr style="width: 100%; color: rgb(145, 145, 145); height: 1px; background-color:rgb(145, 145, 145);" />
    <!-- <h3>Produk Hukum</h3> -->
    <!-- <div class="row mbr-justify-content-center"> -->
    <!------------------ Hover Effect Style : Demo - 1 ------------- -->
    <div class="container mt-40">
      <h3>KBMSI Apps</h3>
      <div class="row mt-40">

        <div class="col-lg-6 col-md-10">
          <div class="box1">
            <img src="<?= base_url() ?>assets/img/produk/ecomplaint.png" width="200" height="267" alt="wangsit">
            <h3 class="title">E-Complaint</h3>
            <ul class="icon">
              <li><a href="http://ecomplaint.kbmsi.or.id" target="_blank"><i class="fa fa-link"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-10">
          <div class="box1">
            <img src="<?= base_url() ?>assets/img/produk/insecto.png" width="200" height="267" alt="wangsit">
            <h3 class="title">Insecto</h3>
            <ul class="icon">
              <li><a href="http://insecto.kbmsi.or.id" target="_blank"><i class="fa fa-link"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-10">
          <div class="box1">
            <img src="<?= base_url() ?>assets/img/produk/skrim.png" width="200" height="267" alt="wangsit">
            <h3 class="title">S-KRIM</h3>
            <ul class="icon">
              <li><a href="http://skrim.kbmsi.or.id" target="_blank"><i class="fa fa-link"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-10">
          <div class="box1">
            <img src="<?= base_url() ?>assets/img/produk/wakanda.jpg" width="180" height="267" alt="wakanda">
            <h3 class="title">Wakanda</h3>
            <ul class="icon">
              <li><a href="https://line.me/R/ti/p/%40hvu9898p" target="_blank"><i class="fa fa-link"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-10">
          <div class="box1">
            <img src="<?= base_url() ?>assets/img/produk/wangsit.png" width="200" height="267" alt="wangsit">
            <h3 class="title">Wangsit</h3>
            <ul class="icon">
              <li><a href="http://wangsit.kbmsi.or.id" target="_blank"><i class="fa fa-link"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 col-md-10">
          <div class="box1">
            <img src="<?= base_url() ?>assets/img/produk/wowsi.png" width="200" height="267" alt="wangsit">
            <h3 class="title">WOW SI</h3>
            <ul class="icon">
              <li><a href="https://wowsi.kbmsi.or.id/" target="_blank"><i class="fa fa-link"></i></a></li>
            </ul>
          </div>
        </div>

      </div>
      <br><br>
    </div>
    <hr style="width: 100%; color: rgb(145, 145, 145); height: 1px; background-color:rgb(145, 145, 145);" />
  </div>

  <!-- ---------------- Hover Effect Style : Demo - 15 ------------- -->

  <div class="container mt-40">
    <div class="container">
      <h3>Majalah SILUET</h3>
      <div class="row mt-40">
        <div class="col-md-3">
          <iframe src="//e.issuu.com/embed.html?d=siluet&u=infokomemsiub" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>
        <div class="col-md-3">
          <iframe src="//e.issuu.com/embed.html?d=siluet_vol.7&u=infokomemsiub" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>
        <div class="col-md-3">
          <iframe src="https://e.issuu.com/anonymous-embed.html?u=infokomemsiub&d=document1.docx" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>

        <div class="col-md-3">
          <iframe src="https://e.issuu.com/anonymous-embed.html?u=infokomemsiub&d=siluet_vol_5.8" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>

        <div class="col-md-3">
          <iframe src="https://e.issuu.com/anonymous-embed.html?u=infokomemsiub&d=siluet_4" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>

        <div class="col-md-3">
          <iframe src="https://e.issuu.com/anonymous-embed.html?u=infokomemsiub&d=siluet_fix_cetak_pdf" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>

        <div class="col-md-3">
          <iframe src="https://e.issuu.com/anonymous-embed.html?u=infokomemsiub&d=siluet_vol_2" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>

        <div class="col-md-3">
          <iframe src="https://e.issuu.com/anonymous-embed.html?u=infokomemsiub&d=siluet_vol_1" width="100%" height="400" frameborder="0" allowfullscreen="true"></iframe>
        </div>
      </div>
      <br>
      <hr style="width: 100%; color: rgb(145, 145, 145); height: 1px; background-color:rgb(145, 145, 145);" />
    </div>
  </div>
</div>