<!DOCTYPE HTML>
<?php
session_start();

require_once ("productos.php");
require_once ("funcion.php");

		if($_POST['username'] == "root" && $_POST['typo'] == "administrador"){

			if(!isset($_SESSION['username']) && !isset($_SESSION['typo']) ){
				$_SESSION['username'] = "root";
				$_SESSION['typo'] = "administrador";
			};

		}else if(isset($_SESSION['username']) && isset($_SESSION['typo']) ){

		}else{
			header('Location: /index.php');
		};

?>
<html>
    
	<body>
	<?php
		$obj = new productos();
		$resultado = $obj->obtenerTodos();
		$tabla = new tabla();
		$tabla->producto = $result;
		$tabla->crearTabla();
                
		echo "<a href = 'prodcutos/cerrar.php'>Cerrar sesion</a>";
	?>
	</body>

</html>