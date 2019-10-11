<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Total Project</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Promote Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/css/style.css" type="text/css" media="all" />
	  <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/css/slider.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href=" <?php bloginfo('template_directory') ?>/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
   <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 

    <!-- Link Estilos Galeria de imagenes -->
    <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/css/baguetteBox.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/style.css">
</head>
<body>
   <!-- header -->
<header>
	<!-- <div class="container-fluid fixed-top"> -->
		<!-- nav -->
		<nav class="py-3 d-lg-flex fondo-nav fixed-top">
      <div class="container">
        <div id="logo">
          <h1> <a href="http://localhost/curso_wordpress/wordpress/"><span class="fa fa-rocket custom-font"></span> Total Project </a></h1>
        </div>
        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="drop" />
        <ul class="menu ml-auto mt-1">
          <li class="active"><a href="http://localhost/curso_wordpress/wordpress/">Inicio</a></li>
          <li class=""><a href="http://localhost/curso_wordpress/wordpress/#services">Nuestros Servicios</a></li>
          <li class=""><a href="http://localhost/curso_wordpress/wordpress/#portfolio">Nuestros Trabajos</a></li>
          <li class=""><a href="http://localhost/curso_wordpress/wordpress/#about">Nosotros</a></li>
          <li class=""><a href="#contact">Contactanos</a></li>
        </ul>
      </div>
		</nav>
		<!-- //nav -->
	<!-- </div> -->
</header>
<!-- //header -->

<!-- portfolio -->
<section class="portfolio py-5 mt-5 color-negro" id="portfolio">
	<h1 class="text-center color-blanco-texto mb-4">Nuestros Carros de Arrastre Realizados</h1>
	<?php
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'carros_realizado' ),
			'post_status'            => array( 'publish' ),
			'nopaging'               => true,
			'order'                  => 'ASC',
			'orderby'                => 'menu_order',
		);

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