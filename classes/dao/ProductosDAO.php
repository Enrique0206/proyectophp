<?php 

class ProductosDAO {	
	
	Public static function listar (){
		
		$con = Conexion::getConexion();
		
		$sql ="select p.id, p.categoria_id,c.nombre as categorias_nombre, p.nombre, precio, stock, imagen, creado,estado
				from productos p
				inner join categorias c on c.id=p.categoria_id";
				
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		
		$registro = [];		
		
		while($registro = $stmt->fetchObject('Producto')){
			
			$lista[] = $registro;
			
			}			
			return $lista;		
		}	
		
		
	Public static function registrar($producto){
		
		$con = Conexion::getConexion();
		
		$sql = "insert into productos (categoria_id, nombre, descripcion, precio, stock, estado, imagen, imagen_tipo, imagen_tamanio)
				values (:categoria_id, :nombre, :descripcion, :precio, :stock, :estado, :imagen, :imagen_tipo, :imagen_tamanio)";
				
				
		$stmt = $con->prepare($sql);
		
		$stmt->bindParam(':categoria_id', $producto->categoria_id);
		$stmt->bindParam(':nombre', $producto->nombre);
		$stmt->bindParam(':descripcion', $producto->descripcion);
		$stmt->bindParam(':precio', $producto->precio);
		$stmt->bindParam(':stock', $producto->stock);
		$stmt->bindParam(':estado', $producto->estado);
		$stmt->bindParam(':imagen', $producto->imagen);
		$stmt->bindParam(':imagen_tipo', $producto->imagen_tipo);
		$stmt->bindParam(':imagen_tamanio', $producto->imagen_tamanio);
		
		$stmt->execute();
		
		}	
		
	Public static function obtener($id){
		
		$con = Conexion::getConexion();
		
		  $sql = "select p.id, p.categoria_id,c.nombre as categorias_nombre, p.nombre, precio, stock, descripcion, imagen, imagen_tipo, imagen_tamanio, creado, estado
				from productos p
				inner join categorias c on c.id=p.categoria_id
				where p.id = :id";
				
		$stmt = $con->prepare($sql);
		
		$stmt->bindParam(':id', $id);
		
		$stmt->execute();
		
		if($registro = $stmt->fetchObject('Producto')){
			return $registro;
			}
		
		
		}
		
	Public static function eliminar($id){
		
		$con = Conexion::getConexion();
		
		$sql = "delete from productos where id = :id";
		
		$stmt = $con->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		
		}
		
	Public static function actualizar($producto) {
		
						        
       if(isset($producto->imagen)){
            
            $sql = "update productos set categoria_id=:categoria_id, nombre=:nombre, descripcion=:descripcion, 
                   precio=:precio, stock=:stock, imagen=:imagen, imagen_tipo=:imagen_tipo, imagen_tamanio=:imagen_tamanio, estado=:estado 
                   where id = :id";
            
            $con = Conexion::getConexion();
			
            $stmt = $con->prepare($sql);
			
            $stmt->bindParam(':categoria_id', $producto->categoria_id);
            $stmt->bindParam(':nombre', $producto->nombre);
            $stmt->bindParam(':descripcion', $producto->descripcion);
            $stmt->bindParam(':precio', $producto->precio);
            $stmt->bindParam(':stock', $producto->stock);
			$stmt->bindParam(':estado', $producto->estado);
            $stmt->bindParam(':imagen', $producto->imagen);
            $stmt->bindParam(':imagen_tipo', $producto->imagen_tipo);
            $stmt->bindParam(':imagen_tamanio', $producto->imagen_tamanio);
            $stmt->bindParam(':estado', $producto->estado);
            $stmt->bindParam(':id', $producto->id);
			
            $stmt->execute();
            
        }else{
            
            $sql = "update productos set categoria_id=:categoria_id, nombre=:nombre, descripcion=:descripcion, 
                   precio=:precio, stock=:stock, estado=:estado 
                   where id = :id";
            
            $con = Conexion::getConexion();
			
            $stmt = $con->prepare($sql);
			
            $stmt->bindParam(':categoria_id', $producto->categoria_id);
            $stmt->bindParam(':nombre', $producto->nombre);
            $stmt->bindParam(':descripcion', $producto->descripcion);
            $stmt->bindParam(':precio', $producto->precio);
            $stmt->bindParam(':stock', $producto->stock);
            $stmt->bindParam(':estado', $producto->estado);
            $stmt->bindParam(':id', $producto->id);
			
            $stmt->execute();
            
        	}			
      
    	}
		
	}

?>
