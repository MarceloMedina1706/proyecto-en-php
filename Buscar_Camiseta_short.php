<?php

	require_once("conexion.php");

	$opc = $_POST['opc'];

	$sql = "SELECT * from articulos where Tipo = '".$opc."'";

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
                        $boca .= '<div class="articulos-oferta" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-oferta">
                                      <figure>
                                        <div class="grid-item-oferta">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-oferta">
                                        </div>
                                        <div class="grid-item-oferta"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'Independiente':
                        $ind .= '<div class="articulos-oferta" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-oferta">
                                      <figure>
                                        <div class="grid-item-oferta">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-oferta">
                                        </div>
                                        <div class="grid-item-oferta"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'Racing':
                        $rac .= '<div class="articulos-oferta" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-oferta">
                                      <figure>
                                        <div class="grid-item-oferta">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-oferta">
                                        </div>
                                        <div class="grid-item-oferta"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'San Lorenzo':
                        $slo .= '<div class="articulos-oferta" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-oferta">
                                      <figure>
                                        <div class="grid-item-oferta">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-oferta">
                                        </div>
                                        <div class="grid-item-oferta"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
                                      </figure>
                                    </div>
                                  </div>';
                        break;

                    case 'Riber':
                        $rib .= '<div class="articulos-oferta" data-id='.$registro["id_articulo"].'>
                                    <div class="grid-container-oferta">
                                      <figure>
                                        <div class="grid-item-oferta">
                                          <img src="Image/'.$registro["Foto"].'" alt="Shorts" class="resaltar-oferta">
                                        </div>
                                        <div class="grid-item-oferta"><figcaption>'.$registro['Nombre_articulo']." - ".$registro['Para'].'</figcaption></div>
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