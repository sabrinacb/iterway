




$(document).ready(function () {




  $("#formulario").bind("submit",function(){
  
  




      var btnEnviar = $("#btnEnviar");
      $.ajax({
          type: $(this).attr("method"),
          url: $(this).attr("action"),
          data:$(this).serialize(),
          beforeSend: function(){
              
              btnEnviar.val("Enviando"); // Para input de tipo button
              btnEnviar.attr("disabled","disabled");
          },
          complete:function(data){
              /*
              * Se ejecuta al termino de la petición
              * */
              btnEnviar.val("Enviar formulario");
              btnEnviar.removeAttr("disabled");
            document.getElementById('formulario').reset()
          },
          success: function(data){
            $(".respuesta").css('display', 'block');

              $(".respuesta").html(data);
            
          },
          error: function(data){
              /*
              * Se ejecuta si la peticón ha sido erronea
              * */
              alert("Problemas al tratar de enviar el formulario");
          }
      });
      // Nos permite cancelar el envio del formulario
      return false;
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
  
    
  
  