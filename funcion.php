<?php
require_once ("Conexion.php");

class funcion{

	public $codigo;
	public $nombre;
	public $descripcion;
	public $costo;

	public function obtenerTodos(){
		try{
                    
            $arreglo = array();
            $Conexion = new Conexion();
            
            if(!$Conexion->conectaMySQL())
            {
                throw new Exception($Conexion->getError());
            }
            $sql = "SELECT * FROM productos";
            if ($result = $Conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc()) {
                         $arreglo[] = $row;
                     }
                }
            }
            $Conexion->cerrar();
            return $arreglo;
        }
        catch(Exception $e)
        {
            return array();
        } 
	}

	public function guardar(){

	try{
		$Conexion = new Conexion();
                
            if(!$Conexion->conectaMySQL()){
                
               throw new Exception($Conexion->getError());
            }

            $sql="INSERT INTO `productos` ".
            "(codigo, nombre, descripcion, costo)".
            "VALUES".
            "('" . $this->codigo . "', '" . $this->nombre . "', '" . $this->descripcion . "', " . $this->costo . ");";

            $resultado = $Conexion->mysqli->query($sql);
            $Conexion->cerrar(); 
            header("Location: /ingresar.php");

		}catch(Exception $e){
			return false;
		}
	} 

	public function editar($id){

	try{
			$Conexion = new Conexion();
            if(!$Conexion->conectaMySQL())
            {
                throw new Exception($Conexion->getError());
            }

            $sql="UPDATE `productos` SET codigo = '" . $this->codigo . "', nombre = '" . $this->nombre . "', " .
            "descripcion = '" . $this->descripcion . "', precio = '" . $this->descripcion . "' WHERE id = " . $id . ";";

            $resultado = $Conexion->mysqli->query($sql);
            $Conexion->cerrar(); 
            header("Location: /ingresar.php");

		}catch(Exception $e){
			return false;
		}
	}

    public function borrar($id1){

        try{
                $Conexion = new Conexion();
                if(!$Conexion->conectaMySQL()){
                    throw new Exception($Conexion->getError());
                }
                $sql = "DELETE FROM productos WHERE id = " . $id1 . ";";

                $resultado = $Conexion->mysqli->query($sql);
                $Conexion->cerrar();
                header("Location: /ingresar.php");


        }catch(Exception $e){
            return false;
        }

    }

	public function buscar($indice){

			$arreglo=array();
		try{

			$Conexion = new Conexion();
            if(!$Conexion->conectaMySQL()){
                throw new Exception($Conexion->getError());
            }

            $sql="SELECT * FROM productos WHERE id='".$indice."';";

            if ($result = $Conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                         $arreglo = $row;
                     }
                }
            }

            $Conexion->cerrar(); 
            return $arreglo;

		}catch(Exception $e){
			return array();
		}
	}
}
?>;