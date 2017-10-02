<?php 
//var_dump($_POST);

require_once ("autoload.php");

try{
	
	if (!isset($_POST['rol_id']) || $_POST['rol_id'] == '')
		die ('Debe indicar una categoria');
		
	$usuario = new Usuario();
	
	$usuario->username = $_POST['username'];
	$usuario->password = $_POST['password'];
	$usuario->nombres = $_POST['nombres'];
	$usuario->rol_id = $_POST['rol_id'];
	$usuario->email = $_POST['email'];
	
	
	UsuarioDAO::registrar($usuario);

	Flash::success('Registro guardado satisfactoriamente');

	header('location:registrar_usuario.php');
	
	
	
	}catch (Exception $ex){
		die ('Error: ' . $ex->getMessage());
		}
		
	



?>