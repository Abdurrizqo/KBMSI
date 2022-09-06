<div class="container">
    <div class="row" id="lembaga" style="margin: 15% 0">
        <div class="col-md-5">
            <!-- <a href="#baganBpmsi" data-toggle="modal" data-target="#baganBpmsi"> -->
            <img src="<?php echo base_url() ?>assets/img/6th/bpmsi.png" width="100%" class="logo-lembaga mr-auto ml-auto d-block" alt="" id="logoLembaga">
            <a href="<?= base_url() ?>Kelembagaan" class="act-btn main">
                Kembali ke Struktur Kelembagaan
            </a>
        </div>
        <div class="col-md-7" id="departemen">

            <div class="row align-self-center justify-content-center">

                <div class="col-md-4 col-sm-6 departemen">
                    <a href="<?php echo base_url() ?>kelembagaan/bpmsi/hukum">
                        <img src="<?php echo base_url() ?>assets/img/6th/komisi/huu.png" alt="">
                        <p class="text-center font-weight-bold kbmsi-dark-text mt-2">HUKUM</p>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 departemen">
                    <a href="<?php echo base_url() ?>kelembagaan/bpmsi/advokasi">
                        <img src="<?php echo base_url() ?>assets/img/6th/komisi/aspirasi.png" alt="">
                        <p class="text-center font-weight-bold kbmsi-dark-text mt-2">ASPIRASI</p>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 departemen">
                    <a href="<?php echo base_url() ?>kelembagaan/bpmsi/kominfo">
                        <img src="<?php echo base_url() ?>assets/img/6th/komisi/kominfo.png" alt="">
                        <p class="text-center font-weight-bold kbmsi-dark-text mt-2">KOMINFO</p>
                    </a>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="modal fade" id="baganBpmsi" style="margin-right: 0; padding: 0" tabindex="-1" role="dialog" aria-labelledby="baganBpmsi" aria-hidden="true">
    <button type="button" class="close right close-modal" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-dialog full-page-modal" role="document">
        <div class="modal-content">

            <div class="modal-body h-100vh">
                <img src="<?php echo base_url() ?>assets/img/baganBpmsi.png" class="img-fluid" alt="">
            </div>

        </div>
    </div>
</div>