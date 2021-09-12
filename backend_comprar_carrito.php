<?php

	session_start();
	
	if(isset($_SESSION['user'])){

		$total=0;

		require_once("conexion.php");

		//==============================================================================================

		$query = "SELECT id_articulo, Descuento FROM ofertas";

		$art_oferta = mysqli_query($conexion,$query);

		$cont=0;


		while($vec_ofertas = mysqli_fetch_array($art_oferta)){
			
			$vec_art_ofertas[$cont]['id_articulo'] = $vec_ofertas['id_articulo'];

			$vec_art_ofertas[$cont]['Descuento'] = $vec_ofertas['Descuento'];

			$cont++;


		}


		//==============================================================================================
		
		$id = $_SESSION['id'];

		$sql = "SELECT * FROM articulos INNER JOIN Carrito ON ".$id."=Carrito.id_persona AND articulos.id_articulo=Carrito.id_articulo";

		if($resultado = mysqli_query($conexion,$sql)){
			
			while($registro = mysqli_fetch_array($resultado)){

				$precio = $registro['Precio_articulo'];

				$html_precio = "<span id='precio'>".$precio."</span></p>";

				for($i=0; $i<count($vec_art_ofertas); $i++) {

					if($vec_art_ofertas[$i]['id_articulo'] == $registro['id_articulo']){

						$precio = $precio - (($precio*$vec_art_ofertas[$i]['Descuento'])/100);

						 $html_precio = "<strike>".$registro['Precio_articulo']."</strike><span id='precio'>".$precio."</span></p>";
					}

				}

	            echo "<div class='div-art-car' data-id=".$registro['id_articulo'].">
						<div>
						<img src='Image/".$registro['Foto']."' alt='camiseta' class='img-carrito'>
	    			  </div>
	    			  <div>
	    			  	<p>Tipo:".$registro['Tipo']."</p>
	    			  	<p>Nombre:".$registro['Nombre_articulo']."</p>
	    			  	<p>Equipo:".$registro['Equipo']."</p>
	    			  	<p>Precio(ARS):".$html_precio."</p>
	    			  	<p>Para:".$registro['Para']."</p>
	    			  	<hr>
	    			  </div>
	    			  </div>
	    			  ";

	    		$total += $precio;
    		  
    		}

    		echo "<div id='div-total' class='datos-carrito'>Total: $<span id='precio_total'>".$total."</span></div>";

    		echo "<p class='datos-carrito' >Ingrese numero de tarjea:</p>
                  <p><input type='number' id='numero-tarjeta' class='tarjeta'></p>
                  <p><button id='confirmar' class='botones-confirmar'>Confirmar</button></p>";

		}




	}else{

	
	}



?>