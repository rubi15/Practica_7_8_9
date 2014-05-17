<?php

require_once ("funcion.php");

	$id=$_GET["id"];
	$productos = new productos();
	$productos->eliminar($id);

?>

