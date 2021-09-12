<?php

		require_once("conexion.php");

      $tipo = $_POST['tipo'];
      $nombre = $_POST['nombre_art'];
      $equipo = $_POST['equipo'];
      $precio = $_POST['precio'];
      $stock = $_POST['stock'];
      $para = $_POST['para'];

      $nombre_imagen = $_FILES['foto']['name'];

      $tipo_imagen = $_FILES['foto']['type'];

      $tam_imagen = $_FILES['foto']['size'];

      if($tam_imagen <= 3000000){

         if($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif"){

            $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . "/intranet/uploads/";

            move_uploaded_file($_FILES['foto']['tmp_name'], $carpeta_destino . $nombre_imagen);

         }else{

            echo "No se admite ese formato";
         }


      }else{

         echo "El tamaño del archivo tiene que ser menor a 3MB";
      }

      $sql = "UPDATE PERSONAS SET FOTO = '$nombre_imagen' WHERE DNI = 1";

      $resultado = mysqli_query($conexion, $sql);


		$sql = "INSERT INTO articulos (Tipo, Nombre_articulo, Equipo, Precio_articulo, Stock, Para, Foto) VALUES (?,?,?,?,?,?,?)";

      $resultado = mysqli_prepare($conexion, $sql);

      $ok = mysqli_stmt_bind_param($resultado, "sssiiss", $tipo, $nombre, $equipo, $precio, $stock, $para, $nombre_imagen);

      $ok = mysqli_stmt_execute($resultado);

      header("location: admin_articulos.php");

   	

	?>