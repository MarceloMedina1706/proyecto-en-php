<?php
	
	require_once("conexion.php");

	$id = $_POST['id'];
   	$desc = $_POST['descuento'];

	$sql = "UPDATE ofertas SET Descuento = ? WHERE id_articulo = ?";

	$resultado = mysqli_prepare($conexion, $sql);

	$ok = mysqli_stmt_bind_param($resultado, "ii", $desc, $id);

	$ok = mysqli_stmt_execute($resultado);

	echo "Bien";


?>