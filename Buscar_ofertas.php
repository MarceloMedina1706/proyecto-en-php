<?php

	require_once("conexion.php");

    $sql = "SELECT articulos.Nombre_articulo, articulos.Para, articulos.Foto, articulos.id_articulo FROM articulos INNER JOIN ofertas ON articulos.id_articulo=ofertas.id_articulo";

    if($resultado = mysqli_query($conexion,$sql)){

    	while($registro = mysqli_fetch_array($resultado)){

            echo '<div class="articulos-oferta" data-id='.$registro["id_articulo"].'>
                    <div class="grid-container-oferta">
                      <figure>
                        <div class="grid-item-oferta">
                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-oferta">
                        </div>
                        <div class="grid-item-oferta"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                      </figure>
                    </div>
                  </div>';
                  
    	}//Final del while

    }
    

?>