<div id="container" class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4 desc-departemen mt-md-5 mb-sm-5 text-sm-center">
            <div class="container-fluid">
                <img src="<?php echo base_url() ?>assets/img/8th/departemen/psdm.png" alt="" style="width: 70%" class="mr-auto ml-auto d-block d-sm-block logo-lembaga mb-5">
                <h2> DEPARTEMEN PENGEMBANGAN SUMBER DAYA MANUSIA</h2>
                Departemen PSDM merupakan departemen yang memiliki peran dalam menggali, mengoptimalkan, membina, dan melakukan kaderisasi sumberdaya mahasiswa yang berfokus pada internal dan eksternal EMSI UB. Departemen PSDM juga bertujuan untuk terciptanya pemenuhan aktualisasi diri mahasiswa KBMSI terhadap softskill atau minat bakat dalam bidang non-akademik.⁣
                <a href="<?= base_url() ?>Kelembagaan/emsi" class="act-btn">
                    Kembali ke EMSI
                </a>
            </div>
        </div>

        <div class="col-md-8 text-center" id="anggota-departemen">
            <div class="container-fluid">
                <h2 class="text-center text-light mt-5 mb-4"> Ketua dan Wakil Departemen </h2>
                <div class="row d-flex justify-content-center bph">

                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $kadep['file_foto'] ?>" alt="">
                        <h5><?= $kadep['nama'] ?></h5>
                        <p>Ketua Departemen</p>
                        <div class="sosial-media">
                            <a href="<?= $kadep['twitter'] ?>" class="<?php if ($kadep['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-twitter  "></i>
                            </a>
                            <a href="<?= $kadep['instagram'] ?>" class="<?php if ($kadep['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-instagram  "></i>
                            </a>
                            <a href="<?= $kadep['linkedin'] ?>" class="<?php if ($kadep['linkedin'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-linkedin  "></i>
                            </a>
                        </div>
                    </div>

                    <?php $i = 1;
					foreach ($wakadep as $wakadep) : ?>
						<div class="col-md-4 col-sm-6 col-10 ">
							<img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $wakadep['file_foto'] ?>" alt="">
							<h5><?= $wakadep['nama'] ?></h5>
							<p><?= $wakadep['jabatan'] ?></p>
							<div class="sosial-media">
								<a href="<?= $wakadep['twitter'] ?>" class="<?php if ($wakadep['twitter'] == null) : ?>disable-link<?php endif; ?>">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="<?= $wakadep['instagram'] ?>" class="<?php if ($wakadep['instagram'] == null) : ?>disable-link<?php endif; ?>">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="<?= $wakadep['linkedin'] ?>" class="<?php if ($wakadep['linkedin'] == null) : ?>disable-link<?php endif; ?>">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
					<?php $i++;
					endforeach; ?>

                    <!-- <div class="col-md-1 col-sm-1"></div>

                    <div class="col-md-4 col-sm-5 col-12">
                        <img src="<?php echo base_url() ?>assets/img/8th/FOTO_BPH/<?= $wakadep['file_foto'] ?>" alt="">
                        <h5><?= $wakadep['nama'] ?></h5>
                        <p>Wakil Ketua Departemen</p>
                        <div class="sosial-media">
                            <a href="<?= $wakadep['twitter'] ?>" class="<?php if ($wakadep['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?= $wakadep['instagram'] ?>" class="<?php if ($wakadep['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?= $wakadep['linkedin'] ?>" class="<?php if ($wakadep['linkedin'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>  -->
                    <!-- col -->
                </div>
            </div>
            <!-- staff departemen -->
            <h2 class="text-center text-light mt-5"> Staff Departemen </h2>
            <div class="row staff-departemen d-flex justify-content-center">

                <?php $i = 1;
                foreach ($staff as $staff) : ?>
                    <div class="col-md-4 col-sm-6 col-10 ">
                        <img src="<?php echo base_url() ?>assets/img/8th/FOTO_STAFF/<?= $staff['file_foto'] ?>" alt="">
                        <h5><?= $staff['nama'] ?></h5>
                        <p>Staff Departemen</p>
                        <div class="sosial-media">
                            <a href="<?= $staff['twitter'] ?>" class="<?php if ($staff['twitter'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="<?= $staff['instagram'] ?>" class="<?php if ($staff['instagram'] == null) : ?>disable-link<?php endif; ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?= $staff['linkedin'] ?>" class="<?php if ($staff['linkedin'] == null) : ?>disable-link<?php endif; ?>">
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