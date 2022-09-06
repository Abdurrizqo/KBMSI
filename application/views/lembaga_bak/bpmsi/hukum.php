<div id="container" class="container-fluid mt-5">
	<div class="row">

		<div class="col-md-4 desc-departemen mt-md-5 mb-sm-5 text-sm-center">
			<div class="container-fluid">
			<img src="<?php echo base_url() ?>assets/img/6th/komisi/huu.png" alt="" style="width: 50%;" class="mr-auto ml-auto d-block d-sm-block logo-lembaga">
				<h2 class="mt-5"> KOMISI HUKUM</h2>
				<p> Komisi I Hukum merupakan komisi yang bertugas merancang seluruh perundang undangan dan menyelenggarakan sidang MKBMSI dalam rangka menjalankan roda kehidupan lembaga KBMSI. </p>
				<a href="<?= base_url() ?>Kelembagaan/bpmsi" class="act-btn">
					Kembali ke BPMSI
				</a>
			</div>
		</div>

		<div class="col-md-8 text-center" id="anggota-departemen">
			<div class="container-fluid">
				<h2 class="text-center text-light mt-5 mb-4"> Anggota Komisi </h2>
				<div class="row d-flex justify-content-center bph">

					<div class="col-md-4 col-sm-6 col-12">
						<img src="<?php echo base_url() ?>assets/img/6th/Lembaga/BPMSI/<?= $ketua['file_foto'] ?>" alt="">
						<!-- <h5> Audrey Chyara Luthsa H. D. </h5> -->
						<h5><?= $ketua['nama'] ?></h5>
						<p><?= $ketua['jabatan'] ?></p>
						<div class="sosial-media">
							<a href="<?= $ketua['twitter'] ?>" class="<?php if ($ketua['twitter'] == null) : ?>disable-link<?php endif; ?>">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="<?= $ketua['instagram'] ?>" class="<?php if ($ketua['instagram'] == null) : ?>disable-link<?php endif; ?>">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="<?= $ketua['linkedin'] ?>" class="<?php if ($ketua['linkedin'] == null) : ?>disable-link<?php endif; ?>">
								<i class="fab fa-linkedin"></i>
							</a>
						</div>
					</div>

					<?php $i = 1;
					foreach ($anggota as $anggota) : ?>
						<div class="col-md-4 col-sm-6 col-10 ">
							<img src="<?php echo base_url() ?>assets/img/6th/Lembaga/BPMSI/<?= $anggota['file_foto'] ?>" alt="">
							<h5><?= $anggota['nama'] ?></h5>
							<p><?= $anggota['jabatan'] ?></p>
							<div class="sosial-media">
								<a href="<?= $anggota['twitter'] ?>" class="<?php if ($anggota['twitter'] == null) : ?>disable-link<?php endif; ?>">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="<?= $anggota['instagram'] ?>" class="<?php if ($anggota['instagram'] == null) : ?>disable-link<?php endif; ?>">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="<?= $anggota['linkedin'] ?>" class="<?php if ($anggota['linkedin'] == null) : ?>disable-link<?php endif; ?>">
									<i class="fab fa-linkedin"></i>
								</a>
							</div>
						</div>
					<?php $i++;
					endforeach; ?>
					<!-- col -->
				</div>
				<!-- staff departemen -->
				<h2 class="text-center text-light mt-5" style="margin-top: 5rem!important;"> Staff Ahli Komisi </h2>
				<div class="row staff-departemen d-flex justify-content-center">

					<?php $i = 1;
					foreach ($staff as $staff) : ?>
						<div class="col-md-4 col-sm-6 col-10 ">
							<img src="<?php echo base_url() ?>assets/img/6th/Lembaga/BPMSI/<?= $staff['file_foto'] ?>" alt="">
							<h5><?= $staff['nama'] ?></h5>
							<p><?= $staff['jabatan'] ?></p>
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