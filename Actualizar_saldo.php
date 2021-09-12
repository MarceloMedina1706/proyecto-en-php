<?php 
	
	session_start();
	
	if(isset($_SESSION['user'])){

		require_once("conexion.php");

		$num_tarjeta= $_POST["num_tarjeta"];

		$importe= $_POST["importe"];
		
		$sql2 = "SELECT Saldo FROM tarjetas where Numero_tarjeta = ". $num_tarjeta;

    	if($query = mysqli_query($conexion,$sql2)){

    		while($registro = mysqli_fetch_array($query)){

    			$saldo = $registro['Saldo'];

    		}

    	}

    	$saldo = $saldo - $importe;

		$sql3 = "UPDATE tarjetas SET Saldo = ? where Numero_tarjeta = ?";

		$resultado = mysqli_prepare($conexion, $sql3);

		$ok = mysqli_stmt_bind_param($resultado, "ii", $saldo, $num_tarjeta);

		$ok = mysqli_stmt_execute($resultado);

	}else{

		echo "Nosesion";
	}



?>