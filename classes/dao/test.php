<?php
require_once ("../common/Conexion.php");
require_once ("../common/Constantes.php");
require_once ("ProductosDAO.php");
require_once ("../dto/Producto.php");
require_once ("CategoriasDAO.php");
require_once ("../dto/Categoria.php");
require_once ("UsuarioDAO.php");
require_once ("../dto/Usuario.php");
require_once ("RolesDAO.php");
require_once ("../dto/Rol.php");


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




$usuario= new Usuario();

$usuario->username = 'matimati';
$usuario->password = 'tecsup';
$usuario->nombres = 'polliqui';
$usuario->rol_id = 2;
$usuario->email = 'matias1@hotmail.com';

UsuarioDAO::registrar($usuario);

echo 'producto registrado';





?>