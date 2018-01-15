<?php
//filter_input
//uganda warriors
//https://www.youtube.com/watch?v=BLZJwzjQFpc
//hash
//https://www.youtube.com/watch?v=XfOxyQcbawc
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$password = password_hash($password, PASSWORD_DEFAULT);

$conexion = null;

if (!isset($conexion)) {
	
	try {
		include_once 'config.php';
	   
		$conexion = new PDO('mysql:host='.NOMBRE_SERVIDOR.'; dbname='.NOMBRE_BD, NOMBRE_USUARIO, PASSWORD);
		$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion -> exec("SET CHARACTER SET utf8");
		
		$sql = "INSERT INTO usuarios(nombre, email, password, fecha_registro, activo) VALUES(:nombre, :email, :password, NOW(), 0)";
		
		$sentencia = $conexion -> prepare($sql);
                
		$sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
		$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
		$sentencia -> bindParam(':password', $password, PDO::PARAM_STR);
		
		$usuario_insertado = $sentencia -> execute();
		
		echo $usuario_insertado;
				
	} catch (PDOException $ex) {
		print "ERROR: " . $ex -> getMessage() . "<br>";
		die();
	}
}