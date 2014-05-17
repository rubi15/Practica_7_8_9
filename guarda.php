<?php

require_once ("funcion.php");

	$producto = new productos();
	$productos->codigo = $_POST["codigo"];
	$productos->nombre = $_POST["nombre"];
	$productos->descripcion = $_POST["descripcion"];
	$productos->costo = $_POST["costo"];
	$productos->gardar();

?>;

