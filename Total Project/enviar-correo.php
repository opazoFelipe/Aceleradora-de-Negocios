<?php 

    $nombre = $_POST['Name'];
    $numeroTelefono = $_POST['Phone'];
    $destinatario = $_POST['Email']; 
    $mensaje = $_POST['mensaje'];

    $asunto = "Contacto desde pagina web"; 

    $cuerpo = "De: ".$nombre."\n";
    $cuerpo .= "Numero de Telefono: ".$numeroTelefono."\n";
    $cuerpo .= "Mensaje: ".$mensaje."\n";

    mail($destinatario,$asunto,$cuerpo);

    header("Location:http://servidor-pruebas.com/curso_wordpress/wordpress/inicio/galeria-realizados/");

?>

    
