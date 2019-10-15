<?php get_header() ?> 
<?php
 $imagen = get_field('imagen');
?>
<div class="container">
    <div class="row">
        <div class="collg-3 col-md-3"></div>
        <div class="col-lg-6 col-md-6">
            <h1 class="primera-fila ml-2 mb-4 text-center"> Cotiza Tu Food Truck </h1>
            <div class="form-group">
                <select class="form-control mb-4" id="exampleFormControlSelect1">
                <option>Selecciona Un Modelo</option>
                <option>Equipamiento Basico</option>
                <option>Semi Equipado</option>
                <option>Full Equipado</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-6 col-md-6 d-none"></div>
    <!-- Lista de especificaciones Tecnicas -->
    <div class="col-lg-6 col-md-6 mb-4">
        <h2> Implementacion Full Equipado</h2>
            <ul class="list-group especificaciones mt-2">
                <li class="list-group-item">Certificación SEC TE1 </li>
                <li class="list-group-item">Forro de lata galvanizada </li>
                <li class="list-group-item">Aislación completa de poliestireno expandido</li>
                <li class="list-group-item">Instalación eléctrica completa de 220  volts con luces led </li>
                <li class="list-group-item">Instalación eléctrica completa de 12 volts con luces led </li>
                <li class="list-group-item">Piso diamantado y antideslizante </li>
                <li class="list-group-item">Mesón exterior de atención abatible </li>
                <li class="list-group-item">Ventana de atención público y ventana para caja </li>
                <li class="list-group-item">Lavaplatos de acero inoxidable </li>
                <li class="list-group-item">Campana electrica de extracción de gases </li>
                <li class="list-group-item">Estanque de agua limpia de 120 litros </li>
                <li class="list-group-item">Bidón de aguas grises de 120 litros  </li>
                <li class="list-group-item">Pata de maniobra fija</li>
                <li class="list-group-item">Mano de 2 pulgadas para enganche a coco de arrastre  </li>
                <li class="list-group-item">Un eje de torsión, con resistencia de hasta 1.300 kilos </li>
                <li class="list-group-item">Terminaciones en aluminio  </li>
                <li class="list-group-item">Pintado con esmalte sintético, color a elección del cliente  </li>
                <li class="list-group-item">Forrado todo su interior en acero inoxidable </li>
                <li class="list-group-item">Churrasquera 3 en 1 ( churrasquera, freidora y fogón )  </li>
                <li class="list-group-item">Salsera refrigerada 5 potes inoxidabl </li>
                <li class="list-group-item">Mesón interior de acero inoxidable   </li>
                <li class="list-group-item">Cuatro patas fijas para posicionamiento y estabilidad del carro</li>
                <li class="list-group-item">Diferencial, automático y enchufe hembra industrial para conectar generador o extensión domiciliaria  </li>
                <li class="list-group-item">Bodega angular para guardar estanque de aguas, balón de gas u otros </li>S
            </ul>
        </div>
    <div class="col-lg-6 col-md-6"> 
        <img src="<?php bloginfo('template_directory') ?>/images/formas_pago.png" alt="" class="img-responsive">
    </div>
    <!-- //Lista de especificaciones Tecnicas -->
    </div>
</div>
<?php get_footer() ?>