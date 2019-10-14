<?php get_header() ?> 
<?php
 $imagen = get_field('imagen');
?>



<div class="container primera-fila">
<h1 class="primera-fila ml-2"> Cotiza Tu Food Truck </h1>
<select class="mt-2">
  <option value="1">Selecciona Tu Modelo</option>
  <option value="2">Basico</option>
  <option value="3">Semi Full</option>
  <option value="4">Full</option>
</select>
</div>

<div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-4"></div>
    <div class="col-lg-3 col-md-4">
    <img src="<?php bloginfo('template_directory') ?>/images/formas_pago.png" alt="">
    </div>
    </div>
    

    
</div>

    <!-- <div class="col-lg-5 col-md-6">
        <div class="container">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
    </div> -->
</div>

<?php get_footer() ?>