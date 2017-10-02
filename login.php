<?php

var_dump($_POST);

require_once ("autoload.php");

try {
	
if(isset($_POST['email'])){
	
	$email = $_POST['email'];
	$userpass = $_POST['userpass'];
	
	$usuario = UsuarioDAO::validar($email, $userpass);
	
	if($usuario !=null){
		$_SESSION['usuario'] = $usuario; // Guardar en la sesión
                Flash::success('Bienvenido al sistema');
                header('location:mantenimiento.php');
                exit();
            }else{
                Flash::error('Usuario y/o clave inválido');
                header('location:loguear.php');
                exit();
            }
		
		}
	
	} catch (Exception $ex) {
		echo 'Error General:' . $e->getMessage();
}
	
?>