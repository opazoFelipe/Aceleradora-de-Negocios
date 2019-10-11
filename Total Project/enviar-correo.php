<?php 
    
    $imagenReferenciada = $_POST['nombreImagen'];
    if(empty($imagenReferenciada)) {
        $imagenReferenciada = 'no hay referencia';
    }
    $nombre = $_POST['Name'];
    $numeroTelefono = $_POST['Phone'];
    $origen = $_POST['Email']; 
    $destinatario = 'test11.test.test123@gmail.com';
    $mensaje = $_POST['Message'];

    $asunto = "Contacto desde pagina web"; 

    $cuerpo = "De: ".$nombre."\n";
    $cuerpo .= "Correo: ".$origen."\n";
    $cuerpo .= "Numero de Telefono: ".$numeroTelefono."\n\n";
    $cuerpo .= "Titulo de imagen referenciada: ".$imagenReferenciada."\n";
    $cuerpo .= "Mensaje: ".$mensaje."\n";

    if(mail($destinatario,$asunto,$cuerpo)) {
        echo 'Su consulta ha sido enviada';
    } else {
        echo 'error al enviar la consulta';
    }

    // header("Location:http://localhost/curso_wordpress/wordpress/");

?>

    
