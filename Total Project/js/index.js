// $( document ).ready(function() {
//     console.log( "ready!" );
//     enviarCorreo();
// });

function enviarCorreo() {

    event.preventDefault();
    const form = $("#contactForm");

    $.ajax({
        // url : 'enviar-correo.php',
        url: form.attr("action"),
        data : form.serialize(),
        type : 'POST',
        // código a ejecutar si la petición se realiza correctmante;
        success : function(respuesta) {
           alert(respuesta)
        },

        beforeSend:function(objeto){ 
           alert('enviado peticion');
        },
    
        // código a ejecutar si la petición falla;
        error : function(xhr, status) {
            alert('Disculpe, existió un problema, intente denuevo');
        },
    
        // código a ejecutar sin importar si la petición falló o no
        complete : function(xhr, status) {
            // alert('Petición realizada');
        }
    });
}