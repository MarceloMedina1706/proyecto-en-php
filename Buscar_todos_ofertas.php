<?php
	
	require_once("conexion.php");

	$sql = "SELECT * FROM articulos INNER JOIN ofertas ON articulos.id_articulo=ofertas.id_articulo";

	$html = "";

    if($resultado = mysqli_query($conexion,$sql)){
        
    	$html .= "<table id='tabla'>
    	  			<tr id='cabecera'>
    				<td>ID</td>
    				<td>TIPO</td>
    				<td>NOMBRE</td>
    				<td>EQUIPO</td>
                    <td>PARA</td>
    				<td>PRECIO</td>
                    <td>DESCUENTO(%)</td>
                    <td>IMPORTE</td>    				
    			</tr>";

    	while($registro = mysqli_fetch_array($resultado)){

            $importe = $registro['Precio_articulo'] - ($registro['Precio_articulo']*$registro['Descuento'])/100;

    		$html .= "<tr>
    				<td>".$registro['id_articulo']."</td>
    				<td>".$registro['Tipo']."</td>
    				<td>".$registro['Nombre_articulo']."</td>
    				<td>".$registro['Equipo']."</td>
                    <td>".$registro['Para']."</td>
    				<td>".$registro['Precio_articulo']."</td>
                    <td>".$registro['Descuento']."</td>
                    <td>".$importe."</td>
    				<td><button class='btn-modificar' data-id='".$registro['id_articulo']."'>Modificar</button></td>
    				<td><button class='btn-eliminar' data-id='".$registro['id_articulo']."'>Eliminar</button></td>
    			</tr>";
    	}

    	$html .="	</tbody>
    	     </table>";

    	 echo $html;

    }


?>