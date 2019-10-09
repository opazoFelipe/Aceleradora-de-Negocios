<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Promote Business Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
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

    <!-- Link Estilos Galeria de imagenes -->
    <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/css/baguetteBox.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href=" <?php bloginfo('template_directory') ?>/style.css">
</head>
<body>
   <!-- header -->
   <div class="container-fluid fixed-top">
		<!-- nav -->
		<nav class="py-3 d-lg-flex color-fondo">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-rocket"></span> Total Project </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
        <li class="active"><a href="http://servidor-pruebas.com/curso_wordpress/wordpress/">Inicio</a></li>
        <li class=""><a href="http://servidor-pruebas.com/curso_wordpress/wordpress/#services">Nuestros Servicios</a></li>
        <li class=""><a href="http://servidor-pruebas.com/curso_wordpress/wordpress/#portfolio">Nuestros Trabajos</a></li>
        <li class=""><a href="http://servidor-pruebas.com/curso_wordpress/wordpress/#about">Nosotros</a></li>
		<li class=""><a href="http://servidor-pruebas.com/curso_wordpress/wordpress/#contact">Contactanos</a></li>
			</ul>
		</nav>
	</div>
	<!-- //nav -->

<!-- portfolio -->
<section class="portfolio py-5 mt-5" id="portfolio">
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
			while ( $services->have_posts() ) {
				$services->the_post();
				$imagen = get_field('imagen');
				$descripcion = get_field('descripcion');
				
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