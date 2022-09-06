<div class="lembaga-emsi">
    <div id="container" class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <img src="<?php echo base_url() ?>assets/img/9th/departemen/p2s.png" alt="" class="logo-lembaga-2 mx-auto d-block d-sm-block logo-lembaga">
            </div>
            <div class="col-lg-6 col-md-12 mt-5 pt-3 mb-5 font-roboto desc-lembaga">
                <h2 class="mt-5 font-candal judul-shadow-blue text-uppercase"><b> DEPARTEMEN PENELITIAN DAN PENGEMBANGAN STUDI </b></h2>
                <div class="garis-lembaga mb-2"></div>
                <p style="font-size: 18px;"> Departemen Penelitian dan Pengembangan Studi merupakan departemen
                    yang bergerak dalam peningkatan kualitas KBMSI UB dalam bidang akademik. Departemen Penelitian
                    dan Pengembangan Studi juga mengembangkan setiap anggotanya untuk⁣ terus aktif dalam mengembangkan
                    diri dalam bidang akademik yang nantinya akan berguna untuk KBMSI UB.⁣⁣</p>
            </div>
        </div>
        <div class="col-md-12 text-center font-roboto" id="anggota-departemen">
            <div class="container-fluid">
                <h3 class="text-center mt-5 mb-4 judul-shadow text-uppercase"><b> Ketua dan Wakil Departemen </b></h3>
                <div class="row justify-content-center bph">
                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/9th/departemen/psdm/<?= $kadep['file_foto'] ?>" alt="">
                        <h4 class="mt-2"><b><?= $kadep['nama'] ?></b></h4>
                        <div class="sosial-media">
                            <a href="<?= $kadep['twitter'] ?>" class="<?php if ($kadep['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-twitter" <?php if ($kadep['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $kadep['instagram'] ?>" class="<?php if ($kadep['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-instagram" <?php if ($kadep['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $kadep['linkedin'] ?>" class="<?php if ($kadep['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-linkedin" <?php if ($kadep['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                    <?php $i = 1;
                    foreach ($wakadep as $wakadep) : ?>
                        <div class="col-md-4 col-sm-5 col-12 ">
                            <img src="<?php echo base_url() ?>assets/img/9th/departemen/psdm/<?= $wakadep['file_foto'] ?>" alt="">
                            <h4 class="mt-2"><b><?= $wakadep['nama'] ?></b></h4>
                            <div class="sosial-media">
                                <a href="<?= $wakadep['twitter'] ?>" class="<?php if ($wakadep['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                    <i class="fab fa-twitter" <?php if ($wakadep['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                </a>
                                <a href="<?= $wakadep['instagram'] ?>" class="<?php if ($wakadep['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                    <i class="fab fa-instagram" <?php if ($wakadep['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                </a>
                                <a href="<?= $wakadep['linkedin'] ?>" class="<?php if ($wakadep['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                    <i class="fab fa-linkedin" <?php if ($wakadep['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                </a>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </div>
            </div>
            <!-- staff departemen -->
            <h3 class="text-center judul-shadow text-uppercase" style="margin-top: 150px;"><b> Staff Departemen </b></h3>
            <div class="row staff-departemen justify-content-center">

                <?php $i = 1;
                foreach ($staff as $staff) : ?>
                    <div class="col-md-4 col-sm-6 col-10 ">
                        <img src="<?php echo base_url() ?>assets/img/9th/departemen/p2s/<?= $staff['file_foto'] ?>" alt="">
                        <h4 class="mt-2"><b><?= $staff['nama'] ?></b></h4>
                        <div class="sosial-media">
                            <a href="<?= $staff['twitter'] ?>" class="<?php if ($staff['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-twitter" <?php if ($staff['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $staff['instagram'] ?>" class="<?php if ($staff['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-instagram" <?php if ($staff['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $staff['linkedin'] ?>" class="<?php if ($staff['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-linkedin" <?php if ($staff['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                        </div>
                    </div>
                <?php $i++;
                endforeach; ?>
                <!-- col -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="or16-lembaga"><img src="<?= base_url('assets/img/component/circle-1.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or17-lembaga"><img src="<?= base_url('assets/img/component/star-1.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or18-lembaga"><img src="<?= base_url('assets/img/component/kbmsi.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or19-lembaga"><img src="<?= base_url('assets/img/component/triangle-3.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or20-lembaga"><img src="<?= base_url('assets/img/component/star-2.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or21-lembaga"><img src="<?= base_url('assets/img/component/star-3.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or22-lembaga"><img src="<?= base_url('assets/img/component/circle-4.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or23-lembaga"><img src="<?= base_url('assets/img/component/kbmsi.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or24-lembaga"><img src="<?= base_url('assets/img/component/circle-3.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or25-lembaga"><img src="<?= base_url('assets/img/component/triangle-4.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or26-lembaga"><img src="<?= base_url('assets/img/component/star-2.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or27-lembaga"><img src="<?= base_url('assets/img/component/circle-1.png'); ?>" alt="" class="img-fluid"></div>
        <div class="or31-lembaga"><img src="<?= base_url('assets/img/component/star-3.png'); ?>" alt="" class="img-fluid"></div>
    </div>
</div>
<script>
    $(document).ready(function() {
        if ($(document).width() >= 1440) {
            $('#container').removeClass("container-fluid");
            $('#container').addClass("container");
        }
    });
</script>