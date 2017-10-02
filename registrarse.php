<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>proyecto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--bootstrap css-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>        
        <link rel="stylesheet" type="text/css" href="css/estilos2.css">
        
        <!--bootstrap js mas jquery-->
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
       
        
    </head>
    


<body>
<!--bloque vacio superior-->
<div id="espacio1"></div>
<!--bloque vacio superior-->

<!--menu de navegacion-->
<nav class="navbar navbar-default">

  <div class="container-fluid">
  	
    <!--boton barra menu responsive-->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <!--boton barra menu responsive-->
    
    
    <!--items del menu-->
    <div class="collapse navbar-collapse" id="myNavbar">
    
  		<!--item lado izquierdo-->
      <ul class="nav navbar-nav">
        <li><a class="items" href="index.php">Inicio</a></li>       
        <li class="dropdown">
          <a class="items" class="dropdown-toggle" data-toggle="dropdown" href="#">Productos<span class="caret"></span></a>
          <ul id="desplegable" class="dropdown-menu">
            <li><a class="menudespl" href="#">Consola</a></li>
            <li role="separator" class="divider"></li> 
            <li><a class="menudespl" href="#">Videojuegos</a></li>
            <li role="separator" class="divider"></li> 
            <li><a class="menudespl" href="#">Accesorios</a></li>
          </ul>
        </li>
        <li><a class="items" href="contactos.php">Contactenos</a></li>
      </ul>
      <!--item lado izquierdo-->
      
      
<!--items lado derecho-->
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a class="items" href="#"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>-->
        <li class="dropdown"><a class="items" href="loguear.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
        <li><a class="items" href="#"><span class="glyphicon glyphicon-download"></span> Carrito</a></li>
      </ul>
       <!--items lado derecho-->
       
    </div>
     <!--items del menu-->
     
  </div>
  
</nav>
 <!--menu de navegacion-->
 
 
 
 
  <!--registro de ususario-->
<div id="contenido" class="container">

<!--grid-->
<div class="row">
 <div class="col-md-10 col-md-offset-1">
	
    <!--tabla de registro-->
    <div class="panel panel-default">
       
    <!--cabecera datos personales-->
  		<div class="panel-heading"><h4>Informacion Personal</h4></div>
      <!--cabecera datos personales-->        
      
      
      <!--cuerpo datos personales-->           
     	<div class="panel-body">  
         
        <!--formulario-->
        <form action="#" method="post" enctype="multipart/form-data">
            	
     	<div class="row">
            <!--nombre-->                                    
           	<div class="col-sm-8">
            	<div class="form-group">
          		<label for="nombre">Nombre</label>
                <input type="text" placeholder="Ingrese su Nombre" name="nombre" id="nombre" class="form-control" required>              	
      			</div>              
           	</div>
            <!--nombre-->             
      	</div>              
            
    	<div class="row">
            <!--apellidos-->        
            <div class="col-sm-6">
            	<div class="form-group">
            	<label for="paterno">Apellido Materno</label>
            	<input type="text" placeholder="Ingrese su Apellido Paterno" name="apellido_paterno" id="paterno" class="form-control" required>
     			</div>            
            </div>
            
            <div class="col-sm-6">
            	<div class="form-group">
          		<label for="materno">Apellido Paterno</label>
                <input type="text" placeholder="Ingrese su Apellido Materno" name="apellido_materno" id="materno" class="form-control" required>              	
         		</div>
            </div>
            <!--apellidos-->            
      	</div>                     
            
     	<div class="row"> 
            <!--fecha de nacimiento-->       	        
            <div class="col-sm-3">            
           		<div  class="form-group">
					<label for="nacimiento">Fecha Nacimiento</label><!--consultar para que sirve   class="control-label"-->
					<input type="date" class="form-control" id="nacimiento" value="2010-01-01" required>
				</div>
            </div>
            <!--fecha de nacimiento-->
            <br>              
           	<!--sexo-->          
          	<div class="col-sm-3">  
             	<div class="form-group">             
            		<label class="col-sm-2">Sexo</label>            	
            		<label for="man" class="radio-inline">Hombre</label>
            		<input type="radio" name="sexo" value="hombre" id="man">            
            		<label for="woman" class="radio-inline">Mujer</label>
            		<input type="radio" name="sexo" value="mujer" id="woman">                            
           		</div>
			</div>              
           	<!--sexo-->  
    	</div>    
            
     	<div class="row">
        	<!--telefono-->
            <div class="col-sm-4">
            	<div class="form-group">
            		<label for="telefono">Movil</label>
            		<input type="text" placeholder="Ingrese su numero" name="celular" id="telefono" class="form-control">
            	</div>   
            </div>
            <!--telefono--> 
  		</div>               
               
        <div class="row">     
         	<!--direccion-->
            <div class="col-sm-10">      	
            	<div class="form-group">
            		<label for="direccion">Direccion</label>
            		<input type="text" placeholder="Ingrese su Direccion" name="direccion" id="direccion" class="form-control" required>
            	</div> 
            </div>        
            <!--direccion-->
      	</div>             
              
     	<div class="row">                    
            <!--ciudad-->      
            <div class="col-sm-4">     
            	<div class="form-group">
            		<label for="departamento">Departamento</label>
            		<select name="departamento" id="departamento" class="form-control" required>
            		<option value="" selected="" disabled="">--Seleccione un departamento--</option>                    
            		</select>
            	</div>
            </div>
             <!--ciudad-->
             
            <!--distrito-->
            <div class="col-sm-4">
            	<div class="form-group">
        			<label for="distrito">Distrito</label>
            		<select name="distrito" id="distrito" class="form-control" required>
               		<option value="" selected="" disabled="">--Seleccione un Distrito--</option>            		
              		</select>
          		</div>
            </div>
            <!--distrito-->
    	 </div>            
            
       	<div class="row">
        	<!--correo-->
            <div class="col-sm-4">
            	<div class="form-group">
            		<label for="correo">Correo</label>
            		<input type="email" placeholder="Ingrese su Email" name="correo" id="correo" class="form-control" required>
            	</div>
            </div>
            <!--correo-->  
      	</div>    
       
             
 		<!--boton enviar-->       	
        	<input type="submit" value="Registrar" class="btn btn-primary">   		
        <!--boton enviar--> 
        
          
       </form> 
       <!--formulario-->        
                 
  	</div>
    <!--cuerpo datos personales--> 
       
</div>
<!--tabla de registro-->

 </div>
</div>

</div>
<!--registro de ususario-->

<div id="footer" class="container-fluid"></div>

    
     <!--jquery para el dezplazamiento vertical del submenu-->
   <script>
    $(document).ready(function() {
   // Muestra y oculta los menús
   		$('ul li:has(ul)').hover(
     		 function(e)
      			{
         		$(this).find('ul').css({display: "block"});
      			},
      		function(e)
      			{
         		$(this).find('ul').css({display: "none"});
      			}
   		);
	});	   
   </script>
    <!--jquery para el dezplazamiento vertical del submenu-->  
      
    </body>
</html>
