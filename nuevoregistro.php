<!doctype html>
<html>
	<head>
		<title>Taller Jquery Mobile</title>
			<meta charset="utf-8">
			
			  
    </head>
    <body>
        <!--Primera Pagina -->
    	<div data-role="page" id="inicio" data-position="fixed" data-add-back-btn="true" data-back-btn-text="volver">
           <div data-role="header" data-theme="b">
           <h1>Nuevo Registro</h1>
           </div>
    	<div data-role="content">
          <img src="img/logo.gif" >
          
            <form id='formnuevo' >
           <label for="email">Email:</label>
           <input type="email" name="email" id="email" placeholder="Email" required data-inline="true"  />
           <label for="pass">Password</label>
           <input type="password" name="pass" id="pass" placeholder="Password" required data-inline="true" />
           
           <label for="nombre">Nombre</label>
           <input type="text" name="nombre" id="nombre" placeholder="Nombre" required data-inline="true" />
           
           <label for="apellido">Apellido</label>
           <input type="text" name="apellido" id="apellido" placeholder="apellido" required data-inline="true" />
           
           <label for="sexo">Sexo</label>
           <select name="sexo" id="sexo" data-role="slider">
           <option value="H">H</option>
           <option value="M">M</option>
           </select>
           
           <label for="Edad">Edad</label>
           <input type="range" name="edad" id="edad"  value="20" min="20" max="60" data-highlight="true" />
           </form>
           <br/>
           <input type="button" id="registrar" value="Registrar" onClick="guardar()" />
           
           
        </div>
          
          <div data-role="footer" data-position="fixed" data-theme="b">
              <h1>Taller jQuery Mobile</h1>
           </div>
        </div>
        
        <!--Fin Primera Pagina -->
        
       
        
    </body>

</html>