<?php

require_once ("funcion.php");

	$id=$_GET["id"];
	$obj = new productos();
	$resultado = $obj->buscar($id);
?>

<!DOCTYPE html>
<html>
	<?php
		echo "<b> id: </b> " . $resultado["id"] . "<br>";
		echo "<b> codigo: </b>" . $resultado["codigo"] . "<br>";
		echo "<b> nombre: </b>" . $resultado["nombre"] . "<br>";
		echo "<b> descripcion: </b>" . $resultado["descripcion"] . "<br>";
		echo "<b> costo: </b>" . $resultado["costo"] . "<br>";
	?>
	<br>
        
        <a href="index.php">Regresar</a>
</html>