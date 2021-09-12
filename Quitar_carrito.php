<?php

	session_start();

	if(isset($_SESSION['user'])){

		$id = $_SESSION['id'];

        $id_prod = $_POST["id_prod"];

		require_once("conexion.php");

		$sql = "DELETE FROM Carrito where id_persona= ? AND id_articulo = ?";

		$resultado = mysqli_prepare($conexion, $sql);

        $ok = mysqli_stmt_bind_param($resultado, "ii", $id, $id_prod);

        $ok = mysqli_stmt_execute($resultado);

        if ($ok) {
            
            echo "Bien";
        }
	}else{

		echo "NONONNO";
	}



?>