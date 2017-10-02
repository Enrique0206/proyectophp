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
	
}