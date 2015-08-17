$(document).ready(function () {
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    
    $(".boton").click(function (){
        $(".error").remove();
        
        if( $(".nombre").val() == "" || !isNaN($(".nombre").val()) ){
            $(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
            return false;
        }else if($(".apellido").val()=="" || !isNaN($(".apellido").val()) ){
        	$(".apellido").focus().after("<span class='error'>Ingrese su apellido</span>");
        	return false;
        }else if($(".telefono").val()=="" || isNaN($(".telefono").val()) || $(".telefono").val().length <10){
        	$(".telefono").focus().after("<span class='error'>Ingrese su telefono de 10 dígitos</span>");
        	return false;
        }else if( $(".correo").val() == "" || !emailreg.test($(".correo").val()) ){
            $(".correo").focus().after("<span class='error'>Ingrese un email correcto</span>");
            return false;
        }else if( $(".mensaje").val() == "" ){
            $(".mensaje").focus().after("<span class='error'>Ingrese un mensaje</span>");
            return false;
        }
    });

    $(".nombre").keyup(function(){
        if( $(this).val() != "" || !isNaN($(this).val()) ){
            $(".error").fadeOut();
            return false;
        }
    });

    $(".apellido").keyup(function(){
        if( $(this).val() != "" || !isNaN($(this).val()) ){
            $(".error").fadeOut();
            return false;
        }
    });

    $(".telefono").keyup(function(){
        if($(this).val() !="" || isNaN($(".telefono").val()) || $(".telefono").val().length < 10 ){
            $(".error").fadeOut();
            return false;
        }
    });
  

    $(".correo").keyup(function(){
        if( $(this).val() != "" && emailreg.test($(this).val())){
            $(".error").fadeOut();
            return false;
        }
    });

});

        function limita(elEvento,maximoCaracteres) {
          
          var elemento = document.getElementById("mensaje");
          
          var evento = elEvento || window.event;
          var codigoCaracter = evento.charCode || evento.keyCode;
       
          if(codigoCaracter == 37 || codigoCaracter == 39) {
            return true;
          }
      
          if(codigoCaracter == 8 || codigoCaracter == 46) {
            return true;
          }
          else if(elemento.value.length >= maximoCaracteres ) {
            return false;
          }
          else {
            return true;
          }
        }     

        function actualizaInfo(maximoCaracteres) {
          
          var elemento = document.getElementById("mensaje");
          var info = document.getElementById("info");
         
          if(elemento.value.length >= maximoCaracteres ) {
            info.innerHTML = "(" + maximoCaracteres + ")";
          }
          else {
            info.innerHTML = "(" + (maximoCaracteres-elemento.value.length) + ")";
          }
        }

        function limitaT(elEvento,maximoCaracteres) {
          
          var elemento = document.getElementById("telefono");
         
          var evento = elEvento || window.event;
          var codigoCaracter = evento.charCode || evento.keyCode;
      
          if(codigoCaracter == 37 || codigoCaracter == 39) {
            return true;
          }

          if(codigoCaracter == 8 || codigoCaracter == 46) {
            return true;
          }
          else if(elemento.value.length >= maximoCaracteres ) {
            return false;
          }
          else {
            return true;
          }
        } 