$(document).ready(function() {
    $(".formulario-contacto").on("submit", function(){
         $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(){
            $(".respuesta").html("El mensaje ha sido enviado correctamente, le responderé a la brevedad.");
            $(".mensaje-enviado").removeClass("oculto");
            $("#nombre").val("");
            $("#email").val("");
            $("#telefono").val("");
            $("#textarea").val("");
            },
            error: function() {
               
                
            }
        });
        return false;
    });
    
    $(".cierrame").on("click", function(){
        $(".mensaje-enviado").addClass("oculto");
    });
});