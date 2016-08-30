<!doctype html>
<html>
	<head>
		<title>Taller Jquery Mobile</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
			<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css" />
            <link rel="stylesheet" href="css/style.css" />
			<script src="js/jquery-1.10.2.js"></script>
            <script src="js/guardar.js"></script>
			<script src="js/jquery.mobile-1.3.2.js"></script>
            <script src="js/funciones.js"></script>
                 
    </head>
    <body>
        <!--Primera Pagina -->
    	<div data-role="page" id="inicio">
           <div data-role="header" data-theme="b">
           <h1>Universidad Tecnologica de la riviera maya</h1>
           </div>
    	<div data-role="content">
          <img src="img/logo.gif" >
          <a href="javascript:display('login')" data-role="button" data-icon="home" id="iniciar" data-transition="slidedown">Iniciar</a>
        </div>
          
          <div data-role="footer" data-position="fixed" data-theme="b">
              <h1>Taller jQuery Mobile</h1>
           </div>
        </div>
        
        <!--Fin Primera Pagina -->
        
        <!--Inicio Segunda pagina -->
        <div data-role="page" id="login">
           <div data-role="header" data-theme="b">
           <h1>Login</h1>
           </div>
    	<div data-role="content">
        	  
            	<label for="correo">correo</label>
                <input type="email" name="txtcorreo" id="txtcorreo" value="">
                <label for="pass">Password</label>
                <input type="password" name="txtpass" id="txtpass" value=""  required/>
                <a href="javascript:validaralumno()" data-role="button">Login</a>
             <div data-role="fieldcontain">
               <p>No tienes cuenta ? <a href="nuevoregistro.php" data-rel="external">Registrate</a></p>
             </div>
         
        </div>
          
          <div data-role="footer" data-position="fixed" data-theme="b">
              <h1>Universidad Tecnologica de la Riviera Maya</h1>
           </div>
        </div>
        
        <!--fin segunda pagina -->
        <!--inicio tercera pagina -->
        
         <div data-role="page" id="menu">
           <div data-role="header" data-theme="b">
           <h1 id="msgusr">Bienvenido</h1>
           </div>
    	<div data-role="content">
        
        	<ul data-role="listview" data-filter="true" data-inset="true"><li data-role="list-divider" data-divider-theme="b" >
            Lista de Contactos <p class="ui-li-aside">Noviembre 15 2013</p>
            </li>
            <li><a href="#detcontacto">kathleen byrne</a></li>
            <li><a href="#">Juanito Perez</a></li>
            <li><a href="#">Ivy Torres</a></li>
            <li><a href="#">Gerardo Vazquez</a></li>
            </ul>
             
            
            	
         
        </div>
          
          <div data-role="footer" data-position="fixed" data-theme="b">
          
          
              <div data-role="navbar">
              <ul>
              <li><a href="#" class="ui-btn-active" data-icon="home">Contactos</a></li>
              <li><a href="#"  class="ui-btn-active" data-icon="plus">Mas...</a></li>
              
              </ul>
              </div>
          
          
          
          
              <h1>Universidad Tecnologica de la Riviera Maya</h1>
           </div>
        </div>
        
        <!--fin tercera pagina -->
        <!--Pagina de tipo dialogo -->
    <div data-role="dialog" id="detcontacto">
        <div data-role="header" data-theme="c">
        <h1>Detalles Del Contacto</h1>
        </div>
        <div data-role="content" data-theme="c">
           
           <img src="img/fotos/kathleen_byrne.jpg">
           <h3>Nombre : kathleen </h3>
           <h3>Apellido : byrne </h3>
          
           
        
        </div>
        </div>
        
        
    </body>

</html>