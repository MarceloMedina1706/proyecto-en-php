<?php 

	session_start();

	if(isset($_SESSION['user'])){

		require_once("conexion.php");

		$id_prod= $_POST["idprod"];
		
		$id_persona = $_SESSION['id'];

		$sql = "INSERT INTO Carrito (id_persona, id_articulo) VALUES (?, ?)";

		$resultado = mysqli_prepare($conexion, $sql);

		$ok = mysqli_stmt_bind_param($resultado, "ii", $id_persona, $id_prod);

		$ok = mysqli_stmt_execute($resultado);

		if($ok == false){

			echo "ERROR";
			
		}else{
		
			echo "Bien";
		}

	}else{

		echo "Nosesion";
	}




?>