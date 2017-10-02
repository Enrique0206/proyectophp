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
        <li><a class="items" href="#">Contactenos</a></li>
      </ul>
      <!--item lado izquierdo-->
      
      
<!--items lado derecho-->
      <ul class="nav navbar-nav navbar-right">
        <li><a class="items" href="registrarse.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        <!--<li class="dropdown"><a class="items" href="#"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>-->
        <li><a class="items" href="#"><span class="glyphicon glyphicon-download"></span> Carrito</a></li>    
      </ul>
       <!--items lado derecho-->
       
    </div>
     <!--items del menu-->
     
  </div>
  
</nav>
 <!--menu de navegacion-->
 
<!--contenido-->  
<div id="contenido" class="container">

<!--grid-->
<div class="row">
 <div class="col-md-6 col-md-offset-3">

	<!-- Table -->
	<div class="panel panel-default">
    
		<div class="panel-heading"><h4>CONTACTENOS</h4></div>       
        
        <div class="well">Si tienes alguna sugerencia déjanos un mensaje.</div>
        
  		<div class="panel-body">     		   
   			<!--formulario-->
            <form action="" method="post" role="form" enctype="multipart/form-data">
            
            	<div class="row">
                	<div class="col-md-8">
                	<div class="form-group">
                    <label for="email">E-mail</label>                                    
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required autofocus>
                                    	
                    <label for="nombres">Nombres</label>                    
                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
                    </div>
                    </div>
                    
               	</div>

                	<div class="form-group">
                    <label for="mensaje">Mensaje</label>                    
                    <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Tu mensaje" rows="7" required></textarea>
                    </div>
                
				<div class="row">
                	<div class="col-md-8">
                	<div class="form-group">
                    <label for="adjunto">Adjuntar Archivo</label>                    
                    <input type="file" class="form-control"id="adjunto" name="adjunto">
                    </div>
                    </div>
                </div>	
                
                	                    
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    
                    
                             
            </form>
			<!--formulario-->	
		</div>
         		 
		</div>	
    <!-- Table -->
  			
	</div>

</div>
<!--grid-->
</div>
<!--contenido-->



<!--pie de pagina-->
<div id="footer" class="container-fluid"></div>
<!--pie de pagina-->

    
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