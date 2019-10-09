<?php get_header() ?>


<section class="portfolio py-5" id="portfolio">
	<div class="container">

		<div class="container gallery-container">

			<h1 class="text-center">Bootstrap 3 Gallery</h1>

			<p class="page-description text-center">Grid Layout With Zoom Effect</p>

			<div class="tz-gallery">

				<div class="row mb-3">
					<div class="col-md-4">
						<div class="card">
							<a class="lightbox" href="<?php bloginfo('template_directory') ?>/images/g1.jpg">
								<img src=" <?php bloginfo('template_directory') ?>/images/g1.jpg" alt="Park" class="card-img-top">
							</a>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<a class="lightbox" href="<?php bloginfo('template_directory') ?>/images/g1.jpg">
								<img src=" <?php bloginfo('template_directory') ?>/images/g1.jpg" alt="Park" class="card-img-top">
							</a>
						</div>
					</div>

					<div class="col-md-4">
						<div class="card">
							<a class="lightbox" href="<?php bloginfo('template_directory') ?>/images/g1.jpg">
								<img src=" <?php bloginfo('template_directory') ?>/images/g1.jpg" alt="Park" class="card-img-top">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer() ?>