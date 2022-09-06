    <style>
    	.bg-transparent {
    		background-color: #343a40 !important;
    	}

    	.job {
    		padding-top: 10px;
    	}

    	.logo {
    		width: 30%;
    		height: 150px;
    		overflow: auto;
    		float: left;
    		padding-top: 3%;
    	}

    	.logo img {
    		width: 90%;
    	}

    	.a {
    		font-size: 12px;
    		color: grey;
    	}

    	.b {
    		margin-top: -5px;
    	}

    	.job-desc {
    		position: absolute;
    		left: 30%;
    	}

    	@media (max-width: 767.98px) {
    		.card-job {
    			padding: 20px;
    		}

    		.logo-job {
    			width: 55%;
    			height: 170px;
    			margin: auto;
    		}

    		.job-desc {
    			position: unset;
    		}
    	}
    </style>
    <!--  -->

    <!-- Berita -->
    <div id="berita">
    	<div class="container mb-5">
    		<br>
    		<div class="d-none d-lg-block">
    			<br><br>
    		</div>
    		<h3 class="pb-3 mt-3 mb-5 border-bottom" style="text-align: center;">
    			Jobs <img src="https://rec-data.kalibrr.com/logos/TPEZ7BARDALFVM4C8W98PTY2V8KEMYC2P4JKNHZT-5b866c9b.png" alt="" style="width:80px; margin-bottom: 15px">
    		</h3>

    		<div id="search-mobile" class="d-md-none d-sm-block">
    			<div class="container mt-3">
    				<form class="row" method="GET" action="<?= base_url() ?>Jobs/cari">
    					<div class="col-10 px-0">
    						<div class="form-group">
    							<input type="text" class="form-control mr-1" placeholder="Cari..." name="keyword" required>
    						</div>
    					</div>
    					<div class="col-2 px-0" style="text-align: right;">
    						<button type="submit" class="btn btn-secondary ml-1"><i class="fas fa-search"></i></button>
    					</div>
    				</form>
    			</div>
    		</div>

    		<div class="row mb-2">
    			<div class="col-md-8">
    				<?php foreach ($jobs as $job) : ?>
    					<div class="card flex-md-row mb-4 shadow-sm h-md-250 card-job">
    						<div class="logo logo-job">
    							<img src="<?= $job->company_info->logo_160x90; ?>" alt="company-logo">
    						</div>
    						<div class="job-desc">
    							<h4 class="job">
    								<a href="https://www.kalibrr.id/c/<?php echo $job->company_info->code . '/jobs/' . $job->id . '/' . $job->slug; ?>" target="_blank"> <?php echo $job->name; ?> </a>
    							</h4>
    							<div class="">
    								<?php echo $job->company_name; ?>
    							</div>
    							<?php echo $job->google_location->address_components->city . ', ' . $job->google_location->address_components->country; ?>
    							<?php echo $job->base_salary . ' - ' . $job->maximum_salary . ' ' . $job->salary_currency . '/' . $job->salary_interval; ?>
    							<br><span class="a">Apply before <?= $job->application_end_date ?></span>
    						</div>
    					</div>
    				<?php endforeach ?>
    			</div>
    			<div class="col-md-4 d-none d-md-block">
    				<form class="row px-3" method="GET" action="<?= base_url() ?>Jobs/cari">
    					<div class="col-10 px-0">
    						<div class="form-group">
    							<input type="text" class="form-control mr-1" placeholder="Cari..." name="keyword" required>
    						</div>
    					</div>

    					<div class="col-2 px-0" style="text-align: right;">
    						<button type="submit" class="btn btn-secondary ml-1"><i class="fas fa-search"></i></button>
    					</div>
    				</form>

    				<hr>

    				<div class="row mb-3">
    					<div class="col">
    						<h4>Linimasa kami</h4>
    						<ol class="list-unstyled mb-0">
    							<li><a href="https://www.instagram.com/kbmsi_ub" target="_blank">Instagram</a></li>
    							<li><a href="#">Line</a></li>
    							<li><a href="https://twitter.com/emsi_ub" target="_blank">Twitter</a></li>
    							<li><a href="https://www.youtube.com/channel/UCc7XWqQPVoSx7rAonTRiv9w" target="_blank">YouTube</a></li>
    						</ol>
    					</div>
    				</div>
    			</div>
    		</div>
    		<nav class="mt-4" aria-label="...">
    			<?= $this->pagination->create_links() ?>
    		</nav>
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

    <style media="screen">
    	/* .job {} */
    </style>