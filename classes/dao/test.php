<?php
require_once ("../common/Conexion.php");
require_once ("../common/Constantes.php");
require_once ("ProductosDAO.php");
require_once ("../dto/Producto.php");
require_once ("CategoriasDAO.php");
require_once ("../dto/Categoria.php");
include ("UsuarioDAO.php");
include ("../dto/Usuario.php");



/*$lista = ProductosDAO::listar();

var_dump($lista);


$producto = new Producto();

$producto->categoria_id = 1;
$producto->nombre = 'sega';
$producto->descripcion = 'primer lote';
$producto->precio = 100;
$producto->stock = 1;

ProductosDAO::registrar($producto);

echo 'producto registrado';

$lista = CategoriasDAO::listar();

var_dump($lista);*/


//$producto = ProductosDAO::obtener(14);

//var_dump($producto);


/*$producto = new Producto();


$producto->categoria_id = 1;
$producto->nombre = 'golden axe mod';
$producto->descripcion = 'primer lote mod';
$producto->precio = 150;
$producto->stock = 4;
$producto->estado = 1;
$producto->id = 25;

echo 'producto actualizado';

$lista = ProductosDAO::actualizar($producto);*/


/*$usuario = UsuarioDAO::validar('luisabrigo@hotmail.com','tecsup');

var_dump($usuario);*/





?>