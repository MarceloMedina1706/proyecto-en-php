<?php
	
	require_once("conexion.php");

	$id = $_POST['id'];

   	$descuento = $_POST['descuento'];

   	$sql = "INSERT INTO ofertas (id_articulo, Descuento) VALUES (?, ?)";

	$resultado = mysqli_prepare($conexion, $sql);

	$ok = mysqli_stmt_bind_param($resultado, "ii", $id, $descuento);

	$ok = mysqli_stmt_execute($resultado);

	echo "Bien";


?>