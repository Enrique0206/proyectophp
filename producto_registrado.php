<?php
//var_dump($_POST);

//var_dump($_FILES);

require_once ("autoload.php");


try{
	
	if(!isset($_POST['categoria_id']) || $_POST['categoria_id'] == '')
		die('debe indicar una categoria');
		
	 if($_FILES['imagen']['error']==0 && $_FILES['imagen']['size'] > 1048576)
        die('Archivo demasiado grande ( > 1MiB)');	
				
$producto = new Producto();

$producto->categoria_id = $_POST['categoria_id'];
$producto->nombre = $_POST['nombre'];
$producto->descripcion = $_POST['descripcion'];
$producto->precio = $_POST['precio'];
$producto->stock = $_POST['stock'];
$producto->estado = (isset($_POST['estado']))?1:0;

if($_FILES['imagen']['error']==0){
$producto->imagen = $_FILES['imagen']['name'];
$producto->imagen_tipo = $_FILES['imagen']['type'];
$producto->imagen_tamanio = $_FILES['imagen']['size'];
	
	 if (!file_exists(Constantes::RUTA_IMAGENES)) {
            mkdir(Constantes::RUTA_IMAGENES, 0777, true); 
        }

	move_uploaded_file($_FILES['imagen']['tmp_name'], Constantes::RUTA_IMAGENES . $_FILES['imagen']['name']);
	
}

ProductosDAO::registrar($producto);

Flash::success('Registro guardado satisfactoriamente');

header('location:listado_productos.php');
		
	
	
	} catch (Exception $ex){
		die('Error: ' . $ex->getMessage());
		}
		
?>