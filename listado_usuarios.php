<?php

require_once ("autoload.php");
require_once ("includes/security.php");


$lista = UsuarioDAO::listar();

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
        
        <!--0estilos-->        <!--estilos-->
         
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
        <link href="css/estilo_listado.css" rel="stylesheet" type="text/css">
        <script src="js/jquery.colorbox-min.js"></script>        
        <!--colorbox-->
        
        <!--bootbox-->
        <script src="js/bootbox.min.js"></script>
        <!--bootbox-->
        
        
        <!--Adicionando el jquery para el colorbox-->
		<script>
			$(function(){
				$('a.colorbox').colorbox({
					photo: true	
				});				
			});	
			
			
		//usando el bootbox		
			function eliminar(id)			{
			bootbox.confirm('Realmente desea eliminar?', function(isOK){
				if(isOK){
					window.location.href = 'eliminar_productos.php?id='+id;
				}
				
				});
			}		
			
			
		
     <!--jquery para el dezplazamiento vertical del submenu-->	
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
    <!--jquery para el dezplazamiento vertical del submenu-->  	
	
											
		</script>			          
        
        
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
                <li class="dropdown">
          			<a class="items" class="dropdown-toggle" data-toggle="dropdown" href="#">Mantenimiento<span class="caret"></span></a>
          			<ul id="desplegable" class="dropdown-menu">
            			<li><a class="menudespl" href="listado_productos.php">Productos</a></li>
            			<li role="separator" class="divider"></li> 
            			<li><a class="menudespl" href="#">Usuarios</a></li>
            			<li role="separator" class="divider"></li> 
            			<li><a class="menudespl" href="#">Otros</a></li>
          			</ul>
        		</li>
      		</ul>
      
      		<!--item lado izquierdo-->
      
      		<!--items lado derecho-->
      		<ul class="nav navbar-nav navbar-right">        		
        		<li><a class="items" href="loguear.php"><span class="glyphicon glyphicon-log-in"></span>Salir</a></li>
        		      
      		</ul>
       		<!--items lado derecho-->
       
    		</div>
     		<!--items del menu-->
     
  		</div>
  
	</nav>
 	<!--menu de navegacion-->
 
 
<!--llamamos a la clase Flash y al metodo show para mostrar el mensaje-->
	<div class="container-fluid"><?= Flash::show() ?></div>
<!--bloque de alertas-->
 
	
	<div id="contenido" class="container">	
 
				<!-- Table -->
				<div class="panel">
    
					<div class="panel-heading">
                    	<h4>Lista de Productos</h4>
                  	</div>       
        
  					<div class="panel-body">   					 
  						<table class="table">
         					<thead>
                	 			<tr>
                    				<th>ID</th>
                        			<th>CATEGORÍA</th>
                        			<th>MODELO</th>
                        			<th>PRECIO</th>
                        			<th>IMAGEN</th>                            
                        			<th>ESTADO</th>                            
                        			<th width="50"></th>
                        			<th width="50"></th>
                        			<th width="50"></th>
                   				</tr>
            				</thead>
        		
                			<tbody>
                   			<?php foreach ($lista as $producto) {?>
                    			<tr>
                  					<td><?=$producto->id?></td>
                    				<td><?=$producto->categorias_nombre?></td>
                        			<td><?=$producto->nombre?></td>
                        			<td><?=$producto->precio?></td>                                
                        			<td><a href="productos_imagen.php?id=<?=$producto->id?>" class="colorbox"><img src="productos_imagen.php?id=<?=$producto->id?>" height="32"/></a></td>                              
                        			<td><?=$producto->estado?></td>
                                
                        			<!--<td><a href="" class="btn btn-info" >Mostrar</a></td>-->
                        			<td><a href="editar_productos.php?id=<?=$producto->id?>" class="btn btn-warning" >Editar</a></td> 
                        			<!--<td><a href="eliminar_productos.php?id=<?=$producto->id?>" class="btn btn-danger">Eliminar</a></td>-->    
                        			<td><a href="javascript:void(0)"  onclick="eliminar(<?=$producto->id?>)"class="btn btn-danger"></i> Eliminar</a></td>            	                                         

                    			</tr>                   
       	     				<?php }?>
              				</tbody>      		    
        				</table>			
					</div>
        
        
                	<div class="panel-footer">
                    	<a href="registrar_producto.php" class="btn btn-primary">Nuevo</a>
                	</div>
         		 
				</div>	
    			<!-- Table -->
  			
			
	</div> 	
	
	
	

    </body>
</html>

