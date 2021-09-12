<?php 
	
	session_start();
	
	if(isset($_SESSION['user'])){

		require_once("conexion.php");

		$id_prod= $_POST["idprod"];

		$precio= $_POST["precio"];
		
		$id_persona = $_SESSION['id'];

		$laFecha = date("y-m-d H-i-s");

		if($id_prod != 0){
			
			$sql = "INSERT INTO reservas (id_articulo, id_persona, Fecha, Precio) VALUES (?, ?, ?, ?)";

			$resultado = mysqli_prepare($conexion, $sql);

			$ok = mysqli_stmt_bind_param($resultado, "iisi", $id_prod, $id_persona, $laFecha, $precio);

			$ok = mysqli_stmt_execute($resultado);

			if($ok == false){

				echo "ERROR";
			
			}else{

				echo "Reserva insertado con exito";

				$sql2 = "SELECT Stock FROM articulos where id_articulo = ". $id_prod;

    			 if($query = mysqli_query($conexion,$sql2)){

    			 	while($registro = mysqli_fetch_array($query)){

    			 		$stock = $registro['Stock'];

    			 	}

    			 }

    			 $stock--;

				$sql3 = "UPDATE articulos SET Stock = ? where id_articulo = ?";

				$resultado = mysqli_prepare($conexion, $sql3);

				$ok = mysqli_stmt_bind_param($resultado, "ii", $stock, $id_prod);

				$ok = mysqli_stmt_execute($resultado);

				

				mysqli_stmt_close($resultado);

				

			

			
			}
		}

	}else{

		echo "Nosesion";
	}



?>