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
	<button id="agregar">Agregar articulo</button>
	<div id="div-art-admin">
		

	</div>


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

		$("#div-art-admin").load("Buscar_todos_articulos.php");

		$("#cerrar").click(function(){

			location.href = "cerrar_sesion.php";
		});

		$(document).on("click", ".btn-modificar", function(){

			let art = $(this).data("id");

			location.href = "modificar_articulo.php?art="+art;
		});

		$(document).on("click", ".btn-eliminar", function(){

			let id = $(this).data("id");

			$.post("eliminar_articulo_bdd.php", {id:id}, function(){

				location.href = "admin_articulos.php";
			});

		});

		$(document).on("click", ".btn-oferta", function(){

			let id = $(this).data("id");

			location.href = "agregar_oferta.php?art="+id;
			

		});

		$("#agregar").click(function(){

			location.href = "agregar_articulo.php";
		});

		$("#web-service").click(function(){

			window.open("rest/post.php", '_blank');

		});

	})

</script>