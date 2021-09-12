<!DOCTYPE html>
<?php session_start(); 
	
	if(!isset($_SESSION["user"])){

		header("location: index.php");
	}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Close Sports</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<script
		  src="https://code.jquery.com/jquery-3.5.1.min.js"
		  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		  crossorigin="anonymous">
    </script>
</head>
<body>
	<header id="cabecera">
		<div class="cabecera-display" id="div-logo">
			<img id="logo" src="Image/closesports.png">
		</div>
		<div class="cabecera-display" id="div-titulo">Administracion</div>
		<div class="cabecera-display" id="div-botones-sesion">
			<button id="web-service" class="botones-sesion">Webservice REST</button>
			<button id="cerrar" class="botones-sesion">Cerrar sesion</button>
		</div>
	</header>

	<nav>
		<ul>
			
			<li><button class="botones-seccion" id="articulos">Articulos</button></li>
			<li><button class="botones-seccion" id="ofertas">Ofertas</button></li>
			
		</ul>
	</nav>
	<?php

		require_once("conexion.php");



		$sql = "SELECT * from articulos where id_articulo = " . $_GET['art'];

   		if($resultado = mysqli_query($conexion,$sql)){

   			while($registro = mysqli_fetch_array($resultado)){

   				$id = $registro['id_articulo'];
   				$tipo = $registro['Tipo'];
   				$nombre = $registro['Nombre_articulo'];
   				$equipo = $registro['Equipo'];
   				$precio = $registro['Precio_articulo'];
   				$stock = $registro['Stock'];
   				$para = $registro['Para'];

   				
   			}
   		}


	?>

	<div id="div-modificar-articulo">

		<table>
			
			<thead>
				<tr>
					<td>Tipo</td>
					<td>Nombre</td>
					<td>Equipo</td>
					<td>Precio</td>
					<td>Stock</td>
					<td>Para</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<select id="tipo">
							<option value="1">Camiseta</option>
							<option value="2">Short</option>
						</select>
					</td>
					<td><input type="text" id="nombre_art" value="<?php echo $nombre ?>"></td>
					<td>
						<select id="equipo">
							<option value="1">Boca</option>
							<option value="2">Racing</option>
							<option value="3">Riber</option>
							<option value="4">Independiente</option>
							<option value="5">San Lorenzo</option>
						</select>
					</td>
					<td><input type="number" id="precio" min="1" value="<?php echo $precio ?>"></td>
					<td><input type="number" id="stock" min="1" value="<?php echo $stock ?>"></td>
					<td>
						<select id="para">
							<option value="1">Mujer</option>
							<option value="2">Hombre</option>
							<option value="3">Ninio</option>
						</select>
					</td>
					<td><button id="modificar" class="btn-modificar-2">Modificar</button></td>
				</tr>
				
			</tbody>

		</table>
		

	</div>


</body>

</html>

<script type="text/javascript">
	
	$(document).ready(function(){
		
		$("#articulos").click(function(){

			location.href = "admin_articulos.php";
		});

		$("#cerrar").click(function(){

			location.href = "cerrar_sesion.php";
		});

		if("<?php echo $tipo ?>" == "Camiseta"){

			$("#tipo").val(1);

		}else if("<?php echo $tipo ?>" == "Short"){

			$("#tipo").val(2);

		}

		if("<?php echo $equipo ?>" == "Boca"){

			$("#equipo").val(1);

		}else if("<?php echo $equipo ?>" == "Racing"){

			$("#equipo").val(2);

		}else if("<?php echo $equipo ?>" == "Riber"){

			$("#equipo").val(3);

		}else if("<?php echo $equipo ?>" == "Independiente"){

			$("#equipo").val(4);

		}else if("<?php echo $equipo ?>" == "San Lorenzo"){

			$("#equipo").val(5);
		}

		if("<?php echo $para ?>" == "Mujer"){

			$("#para").val(1);

		}else if("<?php echo $para ?>" == "Hombre"){

			$("#para").val(2);

		}else if("<?php echo $para ?>" == "Ninio"){

			$("#para").val(3);

		}

		$("#modificar").click(function(){

			let id = "<?php echo $_GET['art'] ?>"
			let tipo = $("#tipo option:selected").text();
			let nombre = $("#nombre_art").val();
			let equipo = $("#equipo option:selected").text()
			let precio = $("#precio").val();
			let stock = $("#stock").val();
			let para  = $("#para option:selected").text()

			$.post("modificar_articulo_bdd.php", {id:id, tipo:tipo, nombre:nombre, equipo:equipo, precio:precio, stock:stock, para:para}, function(data){

				location.href = "admin_articulos.php";

			})

		});

		$("#web-service").click(function(){

			window.open("rest/post.php", '_blank');

		});

		
	})

</script>