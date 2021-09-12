<?php
  
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

	$id = $_POST['idprod'];

	$sql = "SELECT * from articulos where id_articulo = " . $id;

    if($resultado = mysqli_query($conexion,$sql)){

    	while($registro = mysqli_fetch_array($resultado)){

        $precio = $registro['Precio_articulo'];

        $html_precio = "<span id='precio'>".$precio."</span></p>";

        for($i=0; $i<count($vec_art_ofertas); $i++) {

          if($vec_art_ofertas[$i]['id_articulo'] == $registro['id_articulo']){

            $precio = $precio - (($precio*$vec_art_ofertas[$i]['Descuento'])/100);

             $html_precio = "<strike>".$registro['Precio_articulo']."</strike> <span id='precio'>".$precio."</span></p>";
          }

        }
    		
    		echo "<div class='contenedor-articulo'>
                      <div class='imagen-articulo'>
                        <img src='Image/".$registro['Foto']."' alt='Articulo'>
                      </div>
                      <div class='datos-articulo'>
                        <p>Tipo: ".$registro['Tipo']."</p>
                        <p>Nombre: ".$registro['Nombre_articulo']."</p>
                        <p>Equipo: ".$registro['Equipo']."</p>
                        <p>Precio(ARS):".$html_precio."</p>
                        <p>Stock: ".$registro['Stock']."</p>
                        <p>Para: ".$registro['Para']."</p>
                        <button id='reservar' class='reservar'>Comprar</button>
                        <button id='carrito' class='carrito'>Agregar al carrito</button>
                      </div>
                    </div>
                  ";
					
    	}

    	

    }



?>