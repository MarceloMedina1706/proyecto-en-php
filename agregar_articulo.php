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
	
	<div id="div-agg-art-admin">
		<h2>Agregar articulo</h2>
		<form action="Agregar_articulo_bdd.php" method="post" enctype="multipart/form-data">
			Tipo: <select name='tipo' >
                        <option value='Camiseta'>Camiseta</option>
                        <option value='Short'>Short</option>
                  </select><br>
            Nombre del articulo: <input type='text' name='nombre_art' required=""><br>
            Equipo: <select name='equipo'>
                            <option value='Boca'>Boca</option>
                            <option value='Racing'>Racing</option>
                            <option value='Riber'>Riber</option>
                            <option value='Independiente'>Independiente</option>
                            <option value='San Lorenzo'>San Lorenzo</option>
                    </select><br>
                    
            Precio: <input type='number' name='precio' min='1' required=""><br>
            Stock: <input type='number' name='stock' min='1' required=""><br>
            Para: <select name='para'>
                            <option value='Mujer'>Mujer</option>
                            <option value='Hombre'>Hombre</option>
                            <option value='Ninio'>Ninio</option>
                    </select><br>
            Foto: <input type='file' name='foto'><br>
                
            <input type="submit" id="agregar-2" name="enviar" value="Agregar articulo">
        </form>
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

		$("#cerrar").click(function(){

			location.href = "cerrar_sesion.php";
		});

		$("#agregar").click(function(){

			let tipo = $("#tipo option:selected").text();
			let nombre = $("#nombre_art").val();
			let equipo = $("#equipo option:selected").text();
			let precio = $("#precio").val();
			let stock = $("#stock").val();
			let para  = $("#para option:selected").text();
		})

		$("#web-service").click(function(){

			window.open("rest/post.php", '_blank');

		});

	})

</script>