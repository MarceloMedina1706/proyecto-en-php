<?php 

  $servidor = "localhost";
  $usuario = "root";
  $contrasenia = "";
  $basededatos = "closesports";

  $conexion = mysqli_connect($servidor, $usuario, $contrasenia)
              or die ("No se ha podido conectar al servidor de Base de Datos.");
  $db = mysqli_select_db($conexion, $basededatos);


 ?>