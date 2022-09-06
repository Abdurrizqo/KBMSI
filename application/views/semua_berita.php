		<!-- <style>
			.bg-transparent {
				background-color: #343a40!important;
			}
		</style> -->
		<!--  -->

		<!-- Berita -->
		<div id="berita">
			<div class="container pb-5">
				<br>
				<div class="d-none d-lg-block">
					<br><br>
				</div>
				<div class="text-center">
					<h3 class="pb-3 mt-3 border-bottom" style="text-align: center; font-family: 'Candal', sans-serif; display: inline-block; padding: 5px 10px; margin: 0 auto; text-shadow: 4px 0px 0px #fff; text-transform: uppercase;">
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

				<div class="row justify-content-center mb-2">
					<?php foreach ($berita as $b) : ?>
						<div class="col-lg-4">
							<div class="card text-white flex-md-row mb-4 shadow-sm h-md-250" style="height: 300px;">
								<div class="card-body d-flex flex-column align-items-start" style="background-color: #ED5A41;">
									<h4 class="mb-0">
										<p class="text-white text-uppercase" href="#"><b><?= $b->JUDUL ?></b></p>
									</h4>
									<div class="mb-3 text-white"><?= $b->LAST_UPDATE ?></div>
									<!-- <div class="card-text mb-3"><?= $b->KONTEN ?></div> -->
									<a class="btn btn-news" href="<?= base_url() ?>Berita/id/<?= $b->ID_KONTEN ?>">Selengkapnya</a>
								</div>
							</div>
						</div>
					<?php endforeach ?>

				</div>
				<nav class="mt-4" aria-label="...">
					<?= $this->pagination->create_links() ?>
				</nav>
			</div>