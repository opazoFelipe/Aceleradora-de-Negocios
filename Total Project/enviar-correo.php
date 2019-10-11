<?php 
    
    $nombre = $_POST['Name'];
    $numeroTelefono = $_POST['Phone'];
    $origen = $_POST['Email']; 
    $destinatario = 'test11.test.test123@gmail.com';
    $mensaje = $_POST['mensaje'];

    $asunto = "Contacto desde pagina web"; 

    $cuerpo = "De: ".$nombre."\n";
    $cuerpo .= "Correo: ".$origen."\n";
    $cuerpo .= "Numero de Telefono: ".$numeroTelefono."\n\n";
    $cuerpo .= "Mensaje: ".$mensaje."\n";

    mail($destinatario,$asunto,$cuerpo);

    header("Location:http://localhost/curso_wordpress/wordpress/");

?>

    
