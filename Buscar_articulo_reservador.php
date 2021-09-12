<?php

	session_start();

	if(isset($_SESSION['user'])){

		$id = $_SESSION['id'];

		require_once("conexion.php");

		$sql = "SELECT * FROM articulos INNER JOIN reservas ON ".$id."=reservas.id_persona AND articulos.id_articulo=reservas.id_articulo";

		if($resultado = mysqli_query($conexion,$sql)){

			while($registro = mysqli_fetch_array($resultado)){

            echo "<div class='divartcar' data-id=".$registro['id_articulo'].">
					<div>
					<img src='Image/".$registro['Foto']."' alt='camiseta' class='tamimg'>
    			  </div>
    			  <div>'
    			  	<p>Tipo:".$registro['Tipo']."</p>
    			  	<p>Nombre:".$registro['Nombre_articulo']."</p>
    			  	<p>Equipo:".$registro['Equipo']."</p>
    			  	<p>Precio(ARS):".$registro['Precio']."</p>
    			  	<p>Para:".$registro['Para']."</p>
                    <p>Fecha:".$registro['Fecha']."</p>
    			  	<hr>
    			  </div>
    			  </div>
    			  ";
    		  
    	}
		}


	}else{

		echo "NONONNO";
	}



?>