<!DOCTYPE html>
<?php
    session_start();
    
?>
<head>
	<title>Iniciar sesion</title>
</head>
<?php
		if(isset($_SESSION['username']) && isset($_SESSION['typo'])){
                    
			header('Location: ingresar.php');
		};
	?>
<html>
	
	<body>
	<form method = "POST" action = "ingresar.php">usuario</br>
		<input type = "text" name = "username" size = "10" maxlength= "10"></br></br>contraseña </br>
	<input type = "password" name = "typo" size = "10" maxlength = "10"></br>
		<input type = "submit" value= "Entrar">
		
	</form>
	</body>
	
</html>