<?php get_header() ?> 

<?php
	if(isset($_POST['pagina'])) {

		$pagina = $_POST['pagina'];

		if($pagina == 'foodtrucks') {
			// WP_Query arguments
			$args = array (
				'post_type'              => array( 'foodtrucks_realizado' ),
				'post_status'            => array( 'publish' ),
				'nopaging'               => true,
				'order'                  => 'ASC',
				'orderby'                => 'menu_order',
			);
			$titulo = 'Nuestros Food Trucks Realizados';
		}
		if($pagina == 'carros') {
			// WP_Query arguments
			$args = array (
				'post_type'              => array( 'carros_realizado' ),
				'post_status'            => array( 'publish' ),
				'nopaging'               => true,
				'order'                  => 'ASC',
				'orderby'                => 'menu_order',
			);
			$titulo = 'Nuestros Carros de Arrastre Realizados';
		}	
		
		if($pagina == 'estructuras') {
			// WP_Query arguments
			$args = array (
				'post_type'              => array( 'estructura_realizada' ),
				'post_status'            => array( 'publish' ),
				'nopaging'               => true,
				'order'                  => 'ASC',
				'orderby'                => 'menu_order',
			);
			$titulo = 'Nuestras Estructuras Metallicas Realizadas';
		}	
	}
?>


<!-- portfolio -->
<section class="portfolio py-5 mt-5 color-negro" id="portfolio">
	<h1 class="text-center color-blanco-texto mb-4"> <?php echo $titulo; ?> </h1>
	<?php
		// The Query
		$services = new WP_Query( $args );

	?>

		<div class="container-fluid">
			<div class="container gallery-container">
				
	<?php
		// The Loop
		if ( $services->have_posts() ) {
	?>		
			<div class="tz-gallery">
				<div class="row">
			
	<?php
			while ( $services->have_posts() ) {
				$services->the_post();
				$imagen = get_field('imagen');
				// $descripcion = get_field('descripcion');
				if( $imagen == null) {
					continue;
				}
				
				
		?>			
				<div class="col-md-3 mb-4">
					<div class="card">
						<a class="lightbox" href=" <?php echo $imagen ?> ">
							<img src="<?php echo $imagen ?>" alt="" class="responsive">
						</a>
			
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
			</div>
		</div>
</section>

<!-- Contact page -->
<section class="contact mt-0 py-5" id="contact">
	<div class="container py-md-5 py-5">
		<h3 class="heading mb-sm-5"> Contactanos </h3>
		<div class="row contact_information">
			<div class="col-md-3 contact_left">
			</div>
			<div class="col-md-6 mt-md-0">
				<div class="contact_right">
					<form action="<?php bloginfo('template_directory')?>/enviar-correo.php" method="post">
						<div class="w3_agileits_contact_left">
							<input type="text" name="Name" placeholder="Tu Nombre" required="">
							<input type="email" name="Email" placeholder="Tu Email" required="">
							<input type="text" name="Phone" placeholder="Numero de Telefono" required="">
							<textarea placeholder="Tu Mensaje Aqui.." name="mensaje" required=""></textarea>
						</div>
						<div class="w3_agileits_contact_right">
							<button type="submit">Enviar</button>
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