<style>
	.bg-transparent {
		background-color: #343a40 !important;
	}
</style>
<!--  -->


<div style="position: absolute; margin-top: 5rem; left: 1rem; " class="d-flex align-items-center back">
	<a class="btn btn-yellow" href="<?= base_url('Berita/index/1') ?>">
		< <strong>KEMBALI</strong>
	</a>
</div>
<!-- Berita -->
<div id="berita">
	<div class="container pb-5">
		<br>
		<div class="d-none d-lg-block">
			<br><br>
		</div>
		<div class="text-center">
			<h3 class="pb-3 mt-3" style="text-align: center; font-family: 'Candal', sans-serif; display: inline-block; padding: 5px 10px; margin: 0 auto;   text-shadow: 4px 3px 0px #fff; text-transform: uppercase;">
				Berita
			</h3>
		</div>

		<div id="search-mobile">
			<div class="container mt-5 mb-3" style="max-width: 500px;">
				<form method="GET" action="<?= base_url() ?>Berita/search/0">
					<div class="d-flex">
						<input type="text" class="form-control" placeholder="Cari..." name="keyword" required>
						<button type="submit" class="btn btn-yellow"><i class="fas fa-search"></i></button>
					</div>
				</form>
				<small class="pl-1 text-muted">Cari berita menggunakan kata kunci</small>
			</div>
		</div>
		<!-- <?php if ($berita[0]->embed != NULL) : ?>
					<div class="mx-auto text-center d-flex justify-content-center">
						<?= html_entity_decode($berita[0]->embed); ?>
					</div>
				<?php else : ?> -->
		<div class="row mb-2">
			<div class="col-md-8 offset-md-2">
				<?php foreach ($berita as $b) : ?>
					<div class="card flex-md-row mb-4 shadow-sm h-md-250" style="background-color: #ED5A41;">
						<div class="card-body d-flex flex-column align-items-start text-white">
							<h3 class="mb-0">
								<p class="text-white text-uppercase" href="#"><b><?= $b->JUDUL ?></b></p>
							</h3>
							<div class="mb-3 text-white"><?= $b->LAST_UPDATE ?></div>
							<div class="card-text mb-3" style="width: 100%;">
								<?= $b->KONTEN ?>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>

			<!-- <?php endif; ?> -->
		</div>
	</div>
	<!--  -->

	<script>
		$(document).ready(function() {
			$('.card-text > p > a > img').each(function() {
				$(this).addClass('img-fluid');
			});
		});
	</script>