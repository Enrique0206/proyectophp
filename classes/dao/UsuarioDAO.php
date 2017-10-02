<?php
class UsuarioDAO{
	
	public static function validar($email, $userpass) {
        
        $con = Conexion::getConexion();
        
        $sql = "select u.id, username, nombres, rol_id, email
                from usuarios u
                inner join roles r on r.id=u.rol_id
                where email=:email and password=:userpass";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':userpass', $userpass);
        $stmt->execute();
        
        if($objeto = $stmt->fetchObject('Usuario')){
            return $objeto;
        }
        
        return null;
	}
	
	
	
	public static function registrar($usuario){
		
		$con = Conexion::getConexion();
		
		$sql = "insert into usuarios (username, password, nombres, rol_id, email)
				values (:username, :password, :nombres, :rol_id, :email)";
				
		$stmt = $con->prepare($sql)	;
		
		$stmt->bindParam(':username', $usuario->username);
		$stmt->bindParam(':password', $usuario->password);
		$stmt->bindParam(':nombres', $usuario->nombres);
		$stmt->bindParam(':rol_id', $usuario->rol_id);
		$stmt->bindParam(':email', $usuario->email);
		
		$stmt->execute();
				
		
		}
	
}