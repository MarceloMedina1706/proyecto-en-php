<?php

	require_once("conexion.php");

	$id = $_POST['idprod'];

	$sql = "SELECT * from articulos where id_articulo = " . $id;

    if($resultado = mysqli_query($conexion,$sql)){

    	while($registro = mysqli_fetch_array($resultado)){
    		
    		echo "<div class='contenedor-articulo'>
                      <div class='imagen-articulo'>
                        <img src='Image/".$registro['Foto']."' alt='Articulo'>
                      </div>
                      <div class='datos-articulo'>
                        <p> ".$registro['Nombre_articulo']."</p>
                        <p> ".$registro['Para']."</p>
                        <p id='precio'></p>
                        <p>Ingrese numero de tarjea:</p>
                        <p><input type='number' id='numero-tarjeta' class='tarjeta'></p>
                        <p><button id='confirmar' class='botones-sesion'>Confirmar</button></p>
                      </div>
                    </div>
                  ";
					
    	}

    	

    }



?>