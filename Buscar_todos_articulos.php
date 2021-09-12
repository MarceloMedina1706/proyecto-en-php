<?php
	
	require_once("conexion.php");

	$sql = "SELECT * from articulos";

	$html = "";

    if($resultado = mysqli_query($conexion,$sql)){

    	$html .= "<table id='tabla'>
    	  			<tr id='cabecera'>
    				<td>ID</td>
    				<td>TIPO</td>
    				<td>NOMBRE</td>
    				<td>EQUIPO</td>
    				<td>PRECIO</td>
    				<td>STOCK</td>
    				<td>PARA</td>
    				<td>FOTO</td>
    			</tr>";

        /*$html .= "<tr id='cabecera'>
                    <td>-</td>
                    <td><select id='tipo'>
                            <option value='1'>Camiseta</option>
                            <option value='2'>Short</option>
                        </select>
                    </td>
                    <td><input type='text' id='nombre_art'></td>
                    <td><select id='equipo'>
                            <option value='1'>Boca</option>
                            <option value='2'>Racing</option>
                            <option value='3'>Riber</option>
                            <option value='4'>Independiente</option>
                            <option value='5'>San Lorenzo</option>
                        </select>
                    </td>
                    <td><input type='number' id='precio' min='1'></td>
                    <td><input type='number' id='stock' min='1'></td>
                    <td><select id='para'>
                            <option value='1'>Mujer</option>
                            <option value='2'>Hombre</option>
                            <option value='3'>Ninio</option>
                        </select></td>
                    <td><input type='file' id='foto'></td>
                </tr>";*/

    	while($registro = mysqli_fetch_array($resultado)){

    		$html .= "<tr>
    				<td>".$registro['id_articulo']."</td>
    				<td>".$registro['Tipo']."</td>
    				<td>".$registro['Nombre_articulo']."</td>
    				<td>".$registro['Equipo']."</td>
    				<td>".$registro['Precio_articulo']."</td>
    				<td>".$registro['Stock']."</td>
    				<td>".$registro['Para']."</td>
    				<td>".$registro['Foto']."</td>
    				<td><button class='btn-modificar' data-id='".$registro['id_articulo']."'>Modificar</button></td>
    				<td><button class='btn-eliminar' data-id='".$registro['id_articulo']."'>Eliminar</button></td>
    				<td><button class='btn-oferta' data-id='".$registro['id_articulo']."'>Agregar a oferta</button></td>
    			</tr>";
    	}

    	$html .="	</tbody>
    	     </table>";

    	 echo $html;

    }


?>