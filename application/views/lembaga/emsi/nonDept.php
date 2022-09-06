<div id="container" class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4 desc-departemen mt-md-5 mb-sm-5 text-sm-center">
            <div class="container-fluid">
                <img src="<?php echo base_url() ?>assets/img/8th/departemen/nondept.png" alt="" style="width: 70%" class="mr-auto ml-auto d-block d-sm-block logo-lembaga mb-5">
                <h2> NON DEPARTEMEN </h2>
                Non Departemen EMSI terdiri dari Ketua EMSI, Wakil Ketua EMSI, Sekretaris dan Bendahara.
                <a href="<?= base_url() ?>Kelembagaan/emsi" class="act-btn">
                    Kembali ke EMSI
                </a>
            </div>
        </div>

        <div class="col-md-8 text-center" id="anggota-departemen">
            <div class="container-fluid">
                <h2 class="text-center text-light mt-5 mb-4"> Ketua dan Wakil <br> Eksekutif Mahasiswa Sistem Informasi </h2>
                <div class="row d-flex justify-content-center bph">

                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $kemsi['file_foto'] ?>" alt="">
                        <h5><?= $kemsi['nama'] ?></h5>
                        <p>Ketua EMSI</p>
                        <div class="sosial-media">
                            <a href="<?= $kemsi['twitter'] ?>" class="<?php if ($kemsi['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-twitter  "></i>
                            </a>
                            <a href="<?= $kemsi['instagram'] ?>" class="<?php if ($kemsi['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-instagram  "></i>
                            </a>
                            <a href="<?= $kemsi['linkedin'] ?>" class="<?php if ($kemsi['linkedin'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-linkedin  "></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-1 col-sm-1"></div>

                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $wakemsi['file_foto'] ?>" alt="">
                        <h5><?= $wakemsi['nama'] ?></h5>
                        <p>Wakil Ketua EMSI</p>
                        <div class="sosial-media">
                            <a href="<?= $wakemsi['twitter'] ?>" class="<?php if ($wakemsi['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-twitter  "></i>
                            </a>
                            <a href="<?= $wakemsi['instagram'] ?>" class="<?php if ($wakemsi['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-instagram  "></i>
                            </a>
                            <a href="<?= $wakemsi['linkedin'] ?>" class="<?php if ($wakemsi['linkedin'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-linkedin  "></i>
                            </a>
                        </div>
                    </div> <!-- col -->
                </div>
                <!-- staff departemen -->
                <h2 class="text-center text-light mt-5"> Sekretaris dan Bendahara EMSI </h2>
                <div class="row staff-departemen d-flex justify-content-center">

                    <?php $i = 1;
                    foreach ($sekretaris as $sekretaris) : ?>
                        <div class="col-md-4 col-sm-6 col-10 ">
                            <img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $sekretaris['file_foto']; ?>" alt="">
                            <h5><?= $sekretaris['nama'] ?></h5>
                            <p><?= $sekretaris['jabatan'] ?></p>
                            <div class="sosial-media">
                                <a href="<?= $sekretaris['twitter'] ?>" class="<?php if ($sekretaris['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="<?= $sekretaris['instagram'] ?>" class="<?php if ($sekretaris['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="<?= $sekretaris['linkedin'] ?>" class="<?php if ($sekretaris['linkedin'] == null) : ?>disable-link<?php endif; ?>">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                    <!-- col -->
                    <?php $i = 1;
                    foreach ($bendahara as $bendahara) : ?>
                        <div class="col-md-4 col-sm-6 col-10 ">
                            <img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $bendahara['file_foto']; ?>" alt="">
                            <h5><?= $bendahara['nama'] ?></h5>
                            <p><?= $bendahara['jabatan'] ?></p>
                            <div class="sosial-media">
                                <a href="<?= $bendahara['twitter'] ?>" class="<?php if ($bendahara['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="<?= $bendahara['instagram'] ?>" class="<?php if ($bendahara['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="<?= $bendahara['linkedin'] ?>" class="<?php if ($bendahara['linkedin'] == null) : ?>disable-link<?php endif; ?>">
                                    <i class="fab fa-linkedin"></i>
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

<script>
    $(document).ready(function() {
        if ($(document).width() >= 1440) {
            $('#container').removeClass("container-fluid");
            $('#container').addClass("container");
        }
    });
</script>