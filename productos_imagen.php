<?php
require_once ("autoload.php");

try{
	
	$id = $_GET['id'];	
	
	$producto = ProductosDAO::obtener($id);
	
	$filename = Constantes::RUTA_IMAGENES . $producto->imagen;
	
	header("Content-type: ".$producto->imagen_tipo);
    header("Content-Length: ".$producto->imagen_tamanio); 
    header("Content-Disposition: inline; filename=".$producto->imagen); 
    
	echo file_get_contents($filename);

        
} catch (Exception $ex) {
   echo $exc->getTraceAsString();
}