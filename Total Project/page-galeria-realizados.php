<?php get_header() ?> 

<?php

	$imagenReferenciada = '';
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
			$titulo = 'Galeria de Food Trucks';
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
			$titulo = 'Galeria de Carros de Arrastre';
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
			$titulo = 'Galeria de Estructuras Metalicas';
		}	
	}
?>


<!-- portfolio -->
<section class="portfolio py-5 mt-5 color-negro" id="portfolio">
	<h1 class="text-center color-blanco-texto mb-4 mt-4"> <?php echo $titulo; ?> </h1>
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
				if( $imagen == null | strlen($imagen) < 5) {
					continue;
				}
				
				
		?>			
				<div class="col-md-3 mb-4">
					<div class="card">
						<a class="lightbox" href=" <?php echo $imagen ?> ">
							<img src="<?php echo $imagen ?>" alt="" class="responsive">
						</a>
						<a href="#contact" class="btn btn-block btn-info" name=" <?php echo the_title(); ?> " onclick="marcarReferencia(this.name)">Referenciar</a>
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

<?php get_footer() ?>