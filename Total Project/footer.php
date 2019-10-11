
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

<!-- footer -->
<footer class="py-md-5 py-3">
	<div class="container py-md-5 py-3">
		<div class="row footer-grids">
            <div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				
			</div>
			<div class="col-lg-4 col-sm-6 mb-md-0 mb-sm-5 mb-4 offset-lg-2">
				<h4 class="mb-4">Informacion de Contacto</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>6d canal street TT 3356 <span>Newyork.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +1(12) 123 456 789 </p>
				<p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class=" text-center">
			<p>© 2019 promote. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->



<!-- Scripts -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src=" <?php bloginfo('template_directory') ?>/js/baguetteBox.min.js"></script>

    <script>
        baguetteBox.run('.tz-gallery');
    </script>

<<<<<<< HEAD
	<!-- <asdasd -->
=======
<!-- //Scripts -->
>>>>>>> envio-correos

</body>
</html>