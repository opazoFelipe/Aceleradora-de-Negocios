// $( document ).ready(function() {
//     console.log( "ready!" );
//     enviarCorreo();
// });

function enviarCorreo() {

    event.preventDefault();

    // if(validarCamposFormulario() == false)
    //     return
    $("#centralModalSuccess").modal("show");
    formatear_formulario();
    return;

    const modalCarga = $("#mensaje-de-carga");
    modalCarga.text('Enviando su Mensaje');
    const animacionCarga = $("#animacion-carga");
    const form = $("#contactForm");

    $.ajax({
        // url : 'enviar-correo.php',
        url: form.attr("action"),
        data : form.serialize(),
        type : 'POST',
        // código a ejecutar si la petición se realiza correctmante;
        success : function(respuesta) {
            animacionCarga.hide();
            modalCarga.text(respuesta);
        },

        beforeSend:function(objeto){ 
            $("#centralModalSuccess").modal("show");
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

function marcarReferencia(titulo) {
    // Le da como valor el titulo de la imagen referenciada al campo nombreImagen del formulario
    document.getElementById("nombreImagen").value = titulo;
}

function formatear_formulario() {
    let camposFormulario = $("#contactForm").children();
    for(let i = 0; i < 3; i++) {
        camposFormulario[i].text("asd");
    }
}