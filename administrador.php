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
        <li><a class="items" href="#">Catalogo</a></li>
        <!--desplegable productos-->
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
        <!--desplegable productos-->
        <!--desplegable mantenimiento-->
        <li class="dropdown">
          <a class="items" class="dropdown-toggle" data-toggle="dropdown" href="#">Mantenimiento<span class="caret"></span></a>
          <ul id="desplegable" class="dropdown-menu">
            <li><a class="menudespl" href="#">Usuarios</a></li>            
            <li><a class="menudespl" href="#">Roles</a></li>
            <li role="separator" class="divider"></li>            
            <li><a class="menudespl" href="#">Categorias</a></li>
            <li><a class="menudespl" href="#">Productos</a></li>
            <li role="separator" class="divider"></li>
            <li><a class="menudespl" href="#">Clientes</a></li>
            <li><a class="menudespl" href="#">Pedidos</a></li>
          </ul>
        </li>
        <!--desplegable mantenimiento-->
      </ul>
      <!--item lado izquierdo-->
      
      <!--items lado derecho-->
      <ul class="nav navbar-nav navbar-right">
        <li><a class="items" href="registrarse.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
        <li><a class="items" href="loguear.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
        <li><a class="items" href="#"><span class="glyphicon glyphicon-download"></span> Carrito</a></li>        
      </ul>
       <!--items lado derecho-->
       
    </div>
     <!--items del menu-->
     
  </div>
  
</nav>
 <!--menu de navegacion-->
 
  
<div id="contenido" class="container-fluid"></div>


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
