$(document).ready(function(){

       $(".php-email-form").bind("submit", function(){

      
       	$.ajax({
             type: $(this).attr("method"),
             url: "forms/contact.php",
             data: $(this).serialize(),


             success: function(respuesta){
             	if(respuesta == "ok"){
                  $(".respuesta").html("Enviado!");
                  $(".mensaje-alerta").html("El mensaje ha sido enviado correctamente");
                  $("#alerta").show().removeClass("alert-danger").removeClass("alert-success").addClass("alert-success");
                  removeControls();
  				 
                }else{
                  $(".respuesta").html("Error en envio!");
                  $(".mensaje-alerta").html("No se pudo enviar tu mensaje, intentalo de nuevo");
                  $("#alerta").show().removeClass("alert-danger").removeClass("alert-success").addClass("alert-danger");
                  removeControls();
                }
             }
       	});

        // return false;

       });
});


function removeControls(){
	$("input[type=text]").val('');
	$("input[type=email]").val('');
	$("#txtMensaje").val('');
}
