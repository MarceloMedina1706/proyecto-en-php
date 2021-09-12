<?php 
	
	require_once("conexion.php");

	$usuario= $_POST["usuario"];

	$nombre = $_POST["nombre"];

	$apellido = $_POST["apellido"];

	$contrasenia= $_POST["contra"];
	
	$pass_cifrado = password_hash($contrasenia, PASSWORD_DEFAULT);

	$sql = "INSERT INTO usuarios (usuario, nombre, apellido, password, Tipo_usuario) VALUES (?, ?, ?, ?, ?)";

	$resultado = mysqli_prepare($conexion, $sql);

	$tipo = "usuario";

	$ok = mysqli_stmt_bind_param($resultado, "sssss", $usuario, $nombre, $apellido, $pass_cifrado, $tipo);

	$ok = mysqli_stmt_execute($resultado);

	if($ok == false){

		echo "ERROR";
		
	}else{

		echo "Usuario insertado con exito";

		mysqli_stmt_close($resultado);


	}


 ?>