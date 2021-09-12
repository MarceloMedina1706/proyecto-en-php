<?php

	session_start();

	if(isset($_SESSION['user'])){

        $cont=0;

		$id = $_SESSION['id'];

		require_once("conexion.php");

		$sql = "SELECT * FROM articulos INNER JOIN Carrito ON ".$id."=Carrito.id_persona AND articulos.id_articulo=Carrito.id_articulo";

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
    			  	<p>Precio(ARS):".$registro['Precio_articulo']."</p>
    			  	<p>Para:".$registro['Para']."</p>
                    <p><button id='quitar_carrito' class='quitar-carrito' data-art=".$registro['id_articulo'].">Quitar del carrito</button></p>
    			  	<hr>
    			  </div>
    			  </div>
    			  ";
    		$cont=1;  
    	   }

           if($cont == 1){

                echo "";
           }
            
		}


	}else{

		echo "NONONNO";
	}



?>