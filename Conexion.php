<?php
class Conexion{
    
    public $mysqli;
    private $error;
    
    public function conectaMySQL(){
        
        try{
            $this->mysqli = new mysqli('localhost', 'root', 'rubi15', 'programacion');
            if($this->mysqli->connect_errno){
                
                throw new Exception("Error al obtener conexion: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error);
              
            }
            
            return true;
            
        } catch (Exception $e){
            
            $this->error = $e->getMessage();
            return false;
        }
    }
    
    public function Host(){
        
        echo $this->mysqli->host_info . "\n";
    }
    
     public function getError(){
        
        return $this->error;
    }   
         public function cerrar(){
        $this->mysqli->close();
    }
}
?>