<?php get_header() ?>

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="banner-text-w3pvt">
				<!-- banner slider-->
				<div class="csslider infinity" id="slider1">
					<input type="radio" name="slides" checked="checked" id="slides_1" />
					<input type="radio" name="slides" id="slides_2" />
					<input type="radio" name="slides" id="slides_3" />
					<ul class="banner_slide_bg">
						<li>
							<div class="w3ls_banner_txt">
				
							<h3 class="b-w3ltxt text-capitalize mt-md-4">Piensa en tu proyecto</h3>
								<h3 class="b-w3ltxt text-capitalize mt-md-4">Nosotros lo concretamos.</h3>
								<a href="#about" class="btn btn-banner my-sm-3 mr-2">Leer Mas</a>
								
							</div>
						</li>
					
					</ul>
					<div class="navigation">
						<div>
							<!-- <label for="slides_1"></label>
							<label for="slides_2"></label>
							<label for="slides_3"></label> -->
						</div>
					</div>
				</div>
				<!-- //banner slider-->
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- Servicios -->
<section class="services py-5" id="services">
	<div class="container py-md-5 py-3">
		<h5 class="heading mb-2">Servicios Exclusivos</h5>
		<h3 class="heading  mb-5">Diseñamos y Construimos a Medida</h3>
		<div class="feature-grids row">
			<div class="col-lg-4 col-md-6 col-sm-6 mb-5">
				<div class="bottom-gd">
					<span>01</span>
					<h3 class="mt-4"> Foodtrucks </h3>
					<p class="mt-2">Integer sit amet mattis quam, sit amet ul tricies velit. Praesent ullam corper dui turpis dolor sit amet.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 mb-5">
				<div class="bottom-gd">
					<span>02</span>
					<h3 class="mt-4"> Carros de Arrastre</h3>
					<p class="mt-2">Integer sit amet mattis quam, sit amet ul tricies velit. Praesent ullam corper dui turpis dolor sit amet.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 mb-5">
				<div class="bottom-gd">
					<span>03</span>
					<h3 class="mt-4"> Estructuras Metalicas</h3>
					<p class="mt-2">Integer sit amet mattis quam, sit amet ul tricies velit. Praesent ullam corper dui turpis dolor sit amet.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Servicios -->

<!-- Como Trabajamos -->
<section class="about-bottom py-5 color-fondo" id="about">
	<div class="container py-md-5 py-3">
		<h5 class="heading mb-2">Como Trabajamos</h5>
		<h3 class="heading mb-sm-5 mb-3">Como Trabajamos</h3>
		<div class="row">
			<div class="col-lg-6 left-img">
				<img src="<?php bloginfo('template_directory') ?>/images/comoTrabajamos.png" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-6 mt-lg-0 mt-4">
				<div class="row inner-heading">
					<div class="col-md-2">
						<span class="fa fa-bullseye"></span>
					</div>
					<div class="col-md-10">
						<h4 class="mt-md-0 mt-2">Trabajamos Rapido</h4>
						<p class="mt-3 color-blanco-texto">Sed ut perspiciatis unde omnis natus error dolor volup tatem ed accusantium doloremque
							laudantium, tota rem aperiam, eaqu ipsa quae ab illo quasi architi ecto beatae vita.</p>

					</div>
					<div class="col-md-2 mt-5">
						<span class="fa fa-lightbulb-o"></span>
					</div>
					<div class="col-md-10 mt-md-5">
						<h4 class="mt-md-0 mt-2">Ideas Creativas</h4>
						<p class="mt-3 color-blanco-texto">Sed ut perspiciatis unde omnis natus error dolor volup tatem ed accusantium doloremque
							laudantium, tota rem aperiam, eaqu ipsa quae ab illo quasi architi ecto beatae vita.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Como Trabajamos -->



<!-- portfolio -->
<section class="portfolio py-5" id="portfolio">
	<h1 class="text-center">Nuestros Trabajos</h1>
	<?php
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'foodtrucks_venta' ),
			'post_status'            => array( 'publish' ),
			'nopaging'               => true,
			'order'                  => 'ASC',
			'orderby'                => 'menu_order',
		);

		// The Query
		$services = new WP_Query( $args );
		$contador = 0;
	?>

		<div class="container-fluid">
			<div class="container gallery-container">
				
	<?php
		// The Loop
		if ( $services->have_posts() ) {
	?>		
			<h1 class="text-left">Foodtrucks</h1>
			<div class="tz-gallery">
				<div class="row">
			
	<?php
			while ( $services->have_posts() && $contador < 4) {
				$services->the_post();
				$imagen = get_field('imagen');
				$descripcion = get_field('descripcion');
				$contador++;
		?>			
				<div class="col-md-3 mb-4">
					<div class="card">
						<a class="lightbox" href=" <?php echo $imagen ?> ">
							<img src="<?php echo $imagen ?>" alt="" class="responsive">
						</a>
						<p> <?php echo $descripcion ?> </p>			
					</div>
				</div>
		<?php
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
			wp_reset_postdata();
		?>
				
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-4">
						<a href="http://servidor-pruebas.com/curso_wordpress/wordpress/inicio/galeria-realizados/" class="btn btn-primary btn-block mb-4">Ver Mas</a>
					</div>
				</div>
			</div>
		</div>

			<!-- Carros Realizados -->
			<?php
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'foodtrucks_venta' ),
			'post_status'            => array( 'publish' ),
			'nopaging'               => true,
			'order'                  => 'ASC',
			'orderby'                => 'menu_order',
		);

		// The Query
		$services = new WP_Query( $args );
		$contador = 0;
	?>

		<div class="container-fluid fila-carros-realizados">
			<div class="container gallery-container">
				
	<?php
		// The Loop
		if ( $services->have_posts() ) {
	?>		
			<h1 class="text-left">Carros de Arrastre</h1>
			<div class="tz-gallery">
				<div class="row pt-2 pb-2">
			
	<?php
			while ( $services->have_posts() && $contador < 4) {
				$services->the_post();
				$imagen = get_field('imagen');
				$descripcion = get_field('descripcion');
				$contador++;
		?>			
				<div class="col-md-3 mb-4">
					<div class="card">
						<a class="lightbox" href=" <?php echo $imagen ?> ">
							<img src="<?php echo $imagen ?>" alt="" class="responsive">
						</a>
						<p> <?php echo $descripcion ?> </p>			
					</div>
				</div>
		<?php
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
			wp_reset_postdata();
		?>
			
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-4">
						<a href="http://servidor-pruebas.com/curso_wordpress/wordpress/inicio/galeria-realizados/" class="btn btn-primary btn-block mb-4">Ver Mas</a>
					</div>
				</div>
			</div>
		</div>
				

			<!-- Estructuras Metalicas -->
			<?php
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'foodtrucks_venta' ),
			'post_status'            => array( 'publish' ),
			'nopaging'               => true,
			'order'                  => 'ASC',
			'orderby'                => 'menu_order',
		);

		// The Query
		$services = new WP_Query( $args );
		$contador = 0;
	?>

		<div class="container-fluid fila-estructuras-realizados">
			<div class="container gallery-container">
				
	<?php
		// The Loop
		if ( $services->have_posts() ) {
	?>		
			<h1 class="text-left">Estructuras Metalicas</h1>
			<div class="tz-gallery">
				<div class="row">
			
	<?php
			while ( $services->have_posts() && $contador < 4) {
				$services->the_post();
				$imagen = get_field('imagen');
				$descripcion = get_field('descripcion');
				$contador++;
		?>			
				<div class="col-md-3 mb-4">
					<div class="card">
						<a class="lightbox" href=" <?php echo $imagen ?> ">
							<img src="<?php echo $imagen ?>" alt="" class="responsive">
						</a>
						<p> <?php echo $descripcion ?> </p>			
					</div>
				</div>
		<?php
			}
		?>
			
		<?php
		} else {
			// no posts found
		}

		// Restore original Post Data
			wp_reset_postdata();
		?>
			
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-4">
						<a href="http://servidor-pruebas.com/curso_wordpress/wordpress/inicio/galeria-realizados/" class="btn btn-primary btn-block mb-4">Ver Mas</a>
					</div>
				</div>
			</div>
		</div>
</section>

<!-- Contact page -->
<section class="contact mt-0 py-5 color-fondo-contacto" id="contact">
	<div class="container py-md-5 py-5">
		<h3 class="heading mb-sm-5 mb-3 color-blanco-texto"> Contactanos </h3>
		<div class="row contact_information">
			<div class="col-md-6 contact_left">
				<div class="contact_border p-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6350041.310790406!2d30.68773492426509!3d39.0014851732576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b0155c964f2671%3A0x40d9dbd42a625f2a!2sTurkey!5e0!3m2!1sen!2sin!4v1522753415269"></iframe>
				</div>
			</div>
			<div class="col-md-6 mt-md-0 mt-4">
				<div class="contact_right p-lg-5 p-4">
					<form action="#" method="post">
						<div class="w3_agileits_contact_left">
							<h3 class="mb-3 color-blanco-texto">Formulario de Contacto</h3>
							<input type="text" name="Name" placeholder="Tu Nombre" required="">
							<input type="email" name="Email" placeholder="Tu Email" required="">
							<input type="text" name="Phone" placeholder="Numero de Telefono" required="">
							<textarea placeholder="Tu Mensaje Aqui.." required=""></textarea>
						</div>
						<div class="w3_agileits_contact_right">
							<button type="submit">Submit</button>
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Contact page -->


<?php get_footer() ?>