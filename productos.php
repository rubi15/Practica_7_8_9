<?php    
   class productos{
    
    Public $producto;
    
 public function crearTabla(){
          
      echo "<a href='/productos/nuevo.php'>Añadir producto </a>";
        echo '<table border="1">';
        
          echo '</tr>';
              echo '<th> id </th>';
              echo '<th> codigo </th>';
              echo '<th> nombre </th>';
              echo '<th> descripocion </th>';
              echo '<th> costo </th>';
         echo '</tr>';
         
         foreach ($this->producto as $producto){
             
         echo '<tr>';
              echo '<td>'.$producto['id'].'</td>';
              echo '<td>'.$producto['codigo'].'</td>';
              echo '<td>'.$producto['descripcion'].'</td>';
              echo '<td>'.$producto['costo'].'</td>';
              
              echo '<td><a href="editar.php?id='.$producto['id'].'">Editar</a></td>';
                  echo '<td><a href="eliminar.php?id='.$producto['id'].'">Eliminar</a></td>';
                     echo '<td><a href="ver.php?id='.$producto['id'].'">Ver</a></td>';
         echo '</tr>';
         
         }
        
        echo '</table>';
}
    
}

?>
