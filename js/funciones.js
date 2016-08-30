
function display(pagina){
	
	$.mobile.changePage( '#'+pagina, { transition: "pop", reverse: true } );
}

function validaralumno(){
	
	 var valorcorreo=$('#txtcorreo').val();
	 var valorpass=$('#txtpass').val();
	 $.ajax({
		 type:"POST",
		 url:"php/usuario.php",
		 data:{"correo":valorcorreo,"pass":valorpass},
		 dataType:"json",beforeSend:esperar,success: resultado
		 });
	
	}

function esperar(){
	$.mobile.showPageLoadingMsg();
}

function resultado(respuesta){
	
	if(respuesta.usr!="Fail"){
	display('menu');
	$('#msgusr').text('Bienvenido '+respuesta.usr);
	
	}
	else
	{
		$.mobile.hidePageLoadingMsg();
	}
	
}