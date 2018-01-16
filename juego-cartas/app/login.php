<?php

$email = isset($_POST['inputEmail']) ? $_POST['inputEmail'] : null;
$password = isset($_POST['inputPassword']) ? $_POST['inputPassword'] : null;

$conexion = null;

if (!isset($conexion)) {
	try {
		include_once 'config.php';
	   
		$conexion = new PDO('mysql:host='.NOMBRE_SERVIDOR.'; dbname='.NOMBRE_BD, NOMBRE_USUARIO, PASSWORD);
		$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion -> exec("SET CHARACTER SET utf8");
		
		$sql = 'SELECT * FROM usuarios WHERE email=:email AND activo = 1';
		
		$sentencia = $conexion -> prepare($sql);
                
		$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
		
		$usuario_recuperado = $sentencia -> execute();
		$usuario = $sentencia -> fetch(PDO::FETCH_NAMED);

		if(password_verify($password, $usuario["password"])) {
			echo json_encode($usuario);
		} else {
			echo "epic fail";
		}
				
	} catch (PDOException $ex) {
		print "ERROR: " . $ex -> getMessage() . "<br>";
		die();
	}
}
//password_verify