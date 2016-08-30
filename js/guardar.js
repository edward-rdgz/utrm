// JavaScript Document
function guardar(){
      
	     var datos=$("#formnuevo").serialize();	
		 $.ajax({
			 type:"POST",
			 url:"php/nuevousuario.php",
			 data:datos,
			 dataType:"json",bbeforeSend: function(){},success:function(respuesta){
				   
				   if(respuesta.guardo>0){
				   alert('Guardado Correctamente');
				   
				   }
				   else {
				   alert('No se pudo Guardar');
				  
				   }
				   
				 }
		 });
 	
	}