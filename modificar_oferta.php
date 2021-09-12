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



		$sql = "SELECT * FROM articulos INNER JOIN ofertas ON ".$_GET['art']."=ofertas.id_articulo";

   		if($resultado = mysqli_query($conexion,$sql)){

   			while($registro = mysqli_fetch_array($resultado)){

   				$id = $registro['id_articulo'];
   				$tipo = $registro['Tipo'];
   				$nombre = $registro['Nombre_articulo'];
   				$equipo = $registro['Equipo'];
   				$para = $registro['Para'];
   				$precio = $registro['Precio_articulo'];
   				$descuento = $registro['Descuento'];
   				
   				

   				
   			}
   		}


	?>

	<div id="div-modificar-oferta">

		<table>
			
			<thead>
				<tr>
					<td>Tipo</td>
					<td>Nombre</td>
					<td>Equipo</td>
					<td>Para</td>
					<td>Precio</td>
					<td>Descuento(%)</td>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="tipo"><?php echo $tipo; ?></td>
					<td id="nombre_art"><?php echo $nombre; ?></td>
					<td id="equipo"><?php echo $equipo; ?></td>
					<td id="para"><?php echo $para; ?></td>
					<td id="precio"><?php echo $precio; ?></td>
					<td><input type="number" id="desc" min="1" max="100" value="<?php echo $descuento ?>"></td>
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

		$("#ofertas").click(function(){

			location.href = "admin_ofertas.php";
		});

		$("#modificar").click(function(){

			let id = "<?php echo $_GET['art'] ?>";
			
			let descuento = $("#desc").val();

			$.post("modificar_oferta_bdd.php", {id:id, descuento:descuento}, function(data){

				location.href = "admin_ofertas.php";

			})

		});

		
		$("#web-service").click(function(){

			window.open("rest/post.php", '_blank');

		});
		
	})

</script>