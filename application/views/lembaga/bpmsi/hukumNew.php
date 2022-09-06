<div class="lembaga-bpmsi">
	<div id="container" class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<img src="<?php echo base_url() ?>assets/img/9th/komisi/hukum.png" alt="" class="logo-lembaga-2 mx-auto d-block d-sm-block logo-lembaga">
			</div>
			<div class="col-lg-6 col-md-12 mt-5 pt-3 mb-5 font-roboto desc-lembaga">
				<h2 class="mt-5 font-candal judul-shadow-blue text-uppercase"><b> KOMISI HUKUM </b></h2>
				<div class="garis-lembaga mb-2"></div>
				<p style="font-size: 18px;">Komisi I Hukum merupakan komisi yang bertugas dalam
					perancangan dan pengawalan produk hukum yang ada di KBMSI, serta bertanggung jawab
					dalam penyelenggaraan MKBMSI demi menunjang kepentingan dan kebermanfaatan KBMSI. </p>
			</div>
		</div>

		<div class="col-md-12 text-center font-roboto" id="anggota-departemen">
			<div class="container-fluid">
				<h3 class="text-center mt-5 mb-4 judul-shadow text-uppercase"><b> Ketua dan Anggota Komisi </b></h3>
				<div class="row justify-content-center bph">
					<div class="col-md-4 col-sm-5 col-12">
						<img src="<?php echo base_url() ?>assets/img/9th/komisi/hukum/<?= $ketua['file_foto'] ?>" alt="">
						<h4 class="mt-2"><b><?= $ketua['nama'] ?></b></h4>
						<div class="sosial-media">
							<a href="<?= $ketua['twitter'] ?>" class="<?php if ($ketua['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
								<i class="fab fa-twitter" <?php if ($ketua['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
							</a>
							<a href="<?= $ketua['instagram'] ?>" class="<?php if ($ketua['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
								<i class="fab fa-instagram" <?php if ($ketua['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
							</a>
							<a href="<?= $ketua['linkedin'] ?>" class="<?php if ($ketua['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
								<i class="fab fa-linkedin" <?php if ($ketua['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
							</a>
						</div>
					</div>
				</div>
				<div class="row justify-content-center bph" style="margin-top: 150px;">
					<?php $i = 1;
					foreach ($anggota as $anggota) : ?>
						<div class="col-md-4 col-sm-6 col-10">
							<img src="<?php echo base_url() ?>assets/img/9th/komisi/hukum/<?= $anggota['file_foto'] ?>" alt="">
							<h4 class="mt-2"><b><?= $anggota['nama'] ?></b></h4>
							<div class="sosial-media">
								<a href="<?= $anggota['twitter'] ?>" class="<?php if ($anggota['twitter'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
									<i class="fab fa-twitter" <?php if ($anggota['twitter'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
								</a>
								<a href="<?= $anggota['instagram'] ?>" class="<?php if ($anggota['instagram'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
									<i class="fab fa-instagram" <?php if ($anggota['instagram'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
								</a>
								<a href="<?= $anggota['linkedin'] ?>" class="<?php if ($anggota['linkedin'] == null) : ?>disable-link<?php endif; ?>" target="_blank">
									<i class="fab fa-linkedin" <?php if ($anggota['linkedin'] == null) : ?> style="color: grey;"<?php else:?> style="color: black;"<?php endif; ?>></i>
								</a>
							</div>
						</div>
					<?php $i++;
					endforeach; ?>
				</div>
			</div>
			<h3 class="text-center judul-shadow text-uppercase" style="margin-top: 150px;"><b> Staff Ahli Komisi </b></h3>
			<div class="row staff-departemen justify-content-center">

				<?php $i = 1;
				foreach ($staff as $staff) : ?>
					<div class="col-md-4 col-sm-6 col-10 ">
						<img src="<?php echo base_url() ?>assets/img/9th/komisi/hukum/<?= $staff['file_foto'] ?>" alt="">
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