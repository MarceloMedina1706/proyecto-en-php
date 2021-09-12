<?php

	require_once("conexion.php");

	$opc = $_POST['opc'];

	$sql = "SELECT * from articulos where Para = '".$opc."'";

    if($resultado = mysqli_query($conexion,$sql)){

            $boca = "";

            $ind = "";

            $rac = "";

            $slo = "";

            $rib = "";

    	while($registro = mysqli_fetch_array($resultado)){

            

            if($registro['Stock'] > 0){

                switch ($registro['Equipo']) {
                    
                    case 'Boca':
                        $boca .=   '<div class="articulos-genero" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-genero">
                                      <figure>
                                        <div class="grid-item-genero">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-genero">
                                        </div>
                                        <div class="grid-item-genero"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'Independiente':
                        $ind .= '<div class="articulos-genero" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-genero">
                                      <figure>
                                        <div class="grid-item-genero">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-genero">
                                        </div>
                                        <div class="grid-item-genero"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'Racing':
                        $rac .= '<div class="articulos-genero" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-genero">
                                      <figure>
                                        <div class="grid-item-genero">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-genero">
                                        </div>
                                        <div class="grid-item-genero"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'San Lorenzo':
                        $slo .= '<div class="articulos-genero" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-genero">
                                      <figure>
                                        <div class="grid-item-genero">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-genero">
                                        </div>
                                        <div class="grid-item-genero"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'Riber':
                        $rib .= '<div class="articulos-genero" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-genero">
                                      <figure>
                                        <div class="grid-item-genero">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-genero">
                                        </div>
                                        <div class="grid-item-genero"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                }//final del foreahc


            }//final del if

    		  
    	}//Final del while

        echo "<section>";

        if($boca != "")
           
            echo "<article><p class='pequipo'>Boca juniors</p>".$boca."</article>";
        
        if($ind != "")

            echo "<article><p class='pequipo'>Independiente</p>".$ind."</article>";

        if($rac != "")

            echo "<article><p class='pequipo'>Racing club</p>".$rac."</article>";

        if($slo != "")

            echo "<article><p class='pequipo'>San Lorenzo</p>".$slo."</article>";

        if($rib != "")

            echo "<article><p class='pequipo'>Riber Plate</p>".$rib."</article>";


        echo "</section>";

    }

?>