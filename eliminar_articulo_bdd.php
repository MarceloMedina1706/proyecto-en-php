<?php

	require_once("conexion.php");

	$id = $_POST['id'];

	$sql = "DELETE FROM articulos WHERE id_articulo = " . $id;

	if($resultado = mysqli_query($conexion,$sql)){

		echo "Bien";

	}



?>