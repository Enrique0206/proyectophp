<?php
require_once ("autoload.php");
require_once ("includes/security.php");

$lista = RolesDAO::listar();

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>NabsGames</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--bootstrap css-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <!--bootstrap css-->
        
        <!--estilos-->
        <link href="css/estilos.css" rel="stylesheet" type="text/css">        
         <!--estilos-->
         
        <!--bootstrap js mas jquery-->
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--bootstrap js mas jquery-->
        
        <!--bootstrapswitch-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap-switch.min.css">
        <script src="js/bootstrap-switch.min.js"></script>
        <!--bootstrapswitch-->
        
       	<!--ckeditor-->
       <script src="js/ckeditor/ckeditor.js"></script>
       	<!--ckeditor-->
                
        <!--Bootstrap daterpicker-->
		<link href="css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="js/bootstrap-datepicker-locales/bootstrap-datepicker.es.min.js" type="text/javascript"></script>
		<!--Bootstrap daterpicker-->
        
        <!--colorbox-->
        <link rel="stylesheet" type="text/css" href="css/colorbox.css">
        <script src="js/jquery.colorbox-min.js"></script>        
        <!--colorbox-->
        
        <!--bootbox-->
        <script src="js/bootbox.min.js"></script>
        <!--bootbox-->
        
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
        <li><a class="items" href="contactos.php">Contactenos</a></li>
        <li><a class="items" href="contactos.php">Catalogo</a></li>
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
 
 <!--bloque de alertas-->		
	<div class="container-fluid"><?= Flash::show() ?></div>
 <!--bloque de alertas-->
 
 


        <!--contenedor-->
        <div class="container">
            
            <form action="usuario_registrado.php" method="POST" enctype="multipart/form-data">
            
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Registro de Usuarios</h3>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label for="rol_id">Usuario</label>
                            <select name="rol_id" id="rol_id" class="form-control" required>
                            	<option value="" selected="" disabled="">Seleccione un rol</option>
                                
                            	<?php foreach ($lista as $rol) {?>
                                <option value="<?=$rol->id?>"><?=$rol->nombre?></option>
                                <?php }?>
                                
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nombres">Nombres</label>
                            <input type="text" id="nombres" name="nombres" class="form-control" required="" maxlength="100" placeholder="Ingrese el nombre">
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Username</label>                               
                            <input type="text" id="username" name="username" class="form-control" placeholder="Ingrese el username">
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Ingrese el correo">
                        </div>
                        
                        <div class="form-group"><!--se agrega la palabra ckeditor a la classs form control para convertirlo en un editor de texto-->
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese el password">                            
                        </div>
                                                                
                        

                    </div>

                    <div class="panel-footer">
                        <input type="submit" value="Registrar" class="btn btn-primary"/>
                    </div>

                </div>
                
            </form>
            
        </div>
		<!--contenedor-->
 	





<div id="footer" class="container-fluid" style="display:none"></div>




    </body>
</html>


