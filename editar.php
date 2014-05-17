<?php

require_once ("funcion.php");

	$id=$_GET["id"];
	$obj = new productos();
	$resultado = $obj->buscar($id);
?>
<!DOCTYPE HTML>

<html>
    
   <FIELDSET>
	 <form method="POST" action="edit.php">
           <input type="hidden" name="id" value="<?php echo $id; ?>"><br>codigo<br>
           <input type="text" name="codigo" size="10" value="<?php echo $resultado["codigo"]; ?>"><br>nombre<br>
	   <input type="text" name="nombre" size="10" value="<?php echo $resultado["nombre"]; ?>"><br>descripcion<br>
           <input type="text" name="descripcion" size="10" value = "<?php echo $resultado["descripcion"];?>"><br>costo<br>
	   <input type="text" name="costo" size="10" value = "<?php echo $resultado["costo"]; ?>"><br><br>
		<input type="submit" value="Guardar cambios">
		
         </form>

	</FIELDSET>
</html>



