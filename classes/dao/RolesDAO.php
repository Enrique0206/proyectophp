<?php

class RolesDAO{
	
	public static function listar(){
		
		$con = Conexion::getConexion();
		
		$sql = "select * from roles";
		
		$stmt = $con->prepare($sql);
		
		$stmt->execute();
		
		
		$registro = [];
		while ($registro = $stmt->fetchObject('Rol')){
			
				$lista [] = $registro;
			}
		
		return $lista;
		}
	
	}

?>