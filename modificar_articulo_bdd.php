<?php
	
	require_once("conexion.php");

	$id = $_POST['id'];
   	$tipo = $_POST['tipo'];
   	$nombre = $_POST['nombre'];
   	$equipo = $_POST['equipo'];
   	$precio = $_POST['precio'];
   	$stock = $_POST['stock'];
   	$para = $_POST['para'];

	$sql = "UPDATE articulos SET Tipo=?, Nombre_articulo=?, Equipo=?, Precio_articulo=?, Stock=?, Para=? WHERE id_articulo=?";

	$resultado = mysqli_prepare($conexion, $sql);

	$ok = mysqli_stmt_bind_param($resultado, "sssiisi", $tipo, $nombre, $equipo, $precio, $stock, $para, $id);

	$ok = mysqli_stmt_execute($resultado);

	echo "Bien";


?>