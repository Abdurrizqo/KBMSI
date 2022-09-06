<div class="lembaga-emsi">
    <div id="container" class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <img src="<?php echo base_url() ?>assets/img/9th/departemen/nondept.png" alt="" class="logo-lembaga-2 mx-auto d-block d-sm-block logo-lembaga">
            </div>
            <div class="col-lg-6 col-md-12 mt-5 pt-3 mb-5 font-roboto desc-lembaga">
                <h2 class="mt-5 font-candal judul-shadow-blue text-uppercase"><b> Non Departemen </b></h2>
                <div class="garis-lembaga mb-2"></div>
                <p style="font-size: 18px;">Non Departemen EMSI terdiri dari Ketua EMSI, Wakil Ketua EMSI,
                    Sekretaris dan Bendahara.</p>
            </div>
        </div>

        <div class="col-md-12 text-center font-roboto" id="anggota-departemen">
            <div class="container-fluid">
                <h3 class="text-center mt-5 mb-4 judul-shadow text-uppercase"><b> Ketua dan Wakil <br> Eksekutif Mahasiswa Sistem Informasi </b></h3>
                <div class="row justify-content-center bph">
                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/9th/departemen/non-dept/<?= $kemsi['file_foto'] ?>" alt="">
                        <h4 class="mt-2"><b><?= $kemsi['nama'] ?></b></h4>
                        <div class="sosial-media">
                            <a href="<?= $kemsi['twitter'] ?>" class="<?php if ($kemsi['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-twitter" <?php if ($kemsi['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $kemsi['instagram'] ?>" class="<?php if ($kemsi['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-instagram" <?php if ($kemsi['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $kemsi['linkedin'] ?>" class="<?php if ($kemsi['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-linkedin" <?php if ($kemsi['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-1 col-sm-1"></div>

                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/9th/departemen/non-dept/<?= $wakemsi['file_foto'] ?>" alt="">
                        <h4 class="mt-2"><b><?= $wakemsi['nama'] ?></b></h4>
                        <div class="sosial-media">
                            <a href="<?= $wakemsi['twitter'] ?>" class="<?php if ($wakemsi['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-twitter" <?php if ($wakemsi['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $wakemsi['instagram'] ?>" class="<?php if ($wakemsi['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-instagram" <?php if ($wakemsi['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                            <a href="<?= $wakemsi['linkedin'] ?>" class="<?php if ($wakemsi['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                <i class="fab fa-linkedin" <?php if ($wakemsi['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                            </a>
                        </div>
                    </div> <!-- col -->
                </div>
                <!-- staff departemen -->
                <div class="row justify-content-center" style="margin-top: 150px;">
                    <h3 class="text-center judul-shadow text-uppercase"><b> Sekretaris EMSI </b></h3>
                    <div class="row staff-departemen justify-content-center">

                        <?php $i = 1;
                        foreach ($sekretaris as $sekretaris) : ?>
                            <div class="col-md-4 col-sm-6 col-10 ">
                                <img src="<?php echo base_url() ?>assets/img/9th/departemen/non-dept/<?= $sekretaris['file_foto']; ?>" alt="">
                                <h4 class="mt-2"><b><?= $sekretaris['nama'] ?></b></h4>
                                <div class="sosial-media">
                                    <a href="<?= $sekretaris['twitter'] ?>" class="<?php if ($sekretaris['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                        <i class="fab fa-twitter" <?php if ($sekretaris['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                    </a>
                                    <a href="<?= $sekretaris['instagram'] ?>" class="<?php if ($sekretaris['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                        <i class="fab fa-instagram" <?php if ($sekretaris['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                    </a>
                                    <a href="<?= $sekretaris['linkedin'] ?>" class="<?php if ($sekretaris['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                        <i class="fab fa-linkedin" <?php if ($sekretaris['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                    </a>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                    </div>
                    <h3 class="text-center judul-shadow text-uppercase"><b> Bendahara EMSI </b></h3>
                    <div class="row staff-departemen justify-content-center">
                        <!-- col -->
                        <?php $i = 1;
                        foreach ($bendahara as $bendahara) : ?>
                            <div class="col-md-4 col-sm-6 col-10 ">
                                <img src="<?php echo base_url() ?>assets/img/9th/departemen/non-dept/<?= $bendahara['file_foto']; ?>" alt="">
                                <h4 class="mt-2"><b><?= $bendahara['nama'] ?></b></h4>
                                <div class="sosial-media">
                                    <a href="<?= $bendahara['twitter'] ?>" class="<?php if ($bendahara['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                        <i class="fab fa-twitter" <?php if ($bendahara['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                    </a>
                                    <a href="<?= $bendahara['instagram'] ?>" class="<?php if ($bendahara['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                        <i class="fab fa-instagram" <?php if ($bendahara['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                    </a>
                                    <a href="<?= $bendahara['linkedin'] ?>" class="<?php if ($bendahara['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
                                        <i class="fab fa-linkedin" <?php if ($bendahara['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
                                    </a>
                                </div>
                            </div>
                        <?php $i++;
                        endforeach; ?>
                        <!-- col -->
                    </div>
                </div>
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