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

	


</body>

</html>

<script type="text/javascript">
	
	$(document).ready(function(){
		
		$("#articulos").click(function(){

			location.href = "admin_articulos.php";
		});

		$("#ofertas").click(function(){

			location.href = "admin_ofertas.php";
		});

		$("#cerrar").click(function(){

			location.href = "cerrar_sesion.php";
		});

		$("#web-service").click(function(){

			window.open("rest/post.php", '_blank');

		});

	})

</script>