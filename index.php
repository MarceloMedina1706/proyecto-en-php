<!DOCTYPE html>
<?php session_start(); ?>
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
		<div class="cabecera-display" id="div-logo"><img id="logo" src="Image/closesports.png"></div>
		<div class="cabecera-display" id="div-titulo"></div>
		<div class="cabecera-display" id="div-botones-sesion">
			<button id="iniciar" class="botones-sesion">Iniciar sesion</button>
			<button id="crearcuenta" class="botones-sesion">Crear cuenta</button>
			<button id="carrito" class="botones-sesion">Ver carrito</button>
			<button id="reservaciones" class="botones-sesion">Ver compras</button>
			<button id="cerrar" class="botones-sesion">Cerrar sesion</button>

		</div>
	</header>

	<nav>
		<ul>
			<li><button class="botones-seccion" id="mujer">Mujer</button></li>
			<li><button class="botones-seccion" id="hombre">Hombre</button></li>
			<li><button class="botones-seccion" id="ninos">Niños</button></li>
			<li><a href="#off"><button class="botones-seccion" data-id="ofertas">Ofertas</button></a></li>
		</ul>
	</nav>
	
	<section id="seccion">
		<div id="general">
			<div class="articulos-general">
				<div class="grid-container">
						<figure>
						  	<div class="grid-item">
						  		<img src="Image/Hombre_CamisetaTitular_Boca.png" alt="Camisetas" class="resaltar">
						  	</div>
						  	<div class="grid-item"><figcaption>Camisetas</figcaption></div>
					  	</figure>
				</div>
			</div>
			<div class="articulos-general">
				<div class="grid-container">
						<figure>
							<div class="grid-item">
							  	<img src="Image/Hombre_Short1_Boca.png" alt="Shorts" class="resaltar">
							</div>
							<div class="grid-item"><figcaption>Shorts</figcaption></div>
						</figure>
				</div>
			</div>
		</div>

		<p id="off" class="poferta">Ofertas</p>

		<div id="divofertas">
			

		</div>

	</section>

	<footer>
		Contactos
	</footer>
</body>

</html>

<script type="text/javascript">
	
	$(document).ready(function(){
		
		if(("<?php echo isset($_SESSION['user']); ?>") == 1){

			$("#iniciar").hide();

			$("#crearcuenta").hide();

			$("#reservaciones").show();

			$("#carrito").show();

			$("#cerrar").show();

			$("#div-titulo").load("backend.php");
		
		}else{

			$("#iniciar").show();//show

			$("#crearcuenta").show();//show

			$("#reservaciones").hide();

			$("#carrito").hide();

			$("#cerrar").hide();

			$("#div-titulo").text("Indumentarias deportivas");
		}

		$("#divofertas").load("Buscar_ofertas.php");

		$(document).on("click", ".articulos-oferta", function(){

			let idarticul = $(this).data('id');

			location.href = "Articulo.php?art=" + idarticul;
		})

		$("#mujer").click(function(){

			location.href = "cs_mujer.php";
		});

		$("#hombre").click(function(){

			location.href = "cs_hombre.php";
		});

		$("#ninos").click(function(){

			location.href = "cs_ninio.php";
		});

		$("#logo").click(function(){

			location.reload();
		});

		$(document).on("click", ".resaltar", function(){

			let cs = $(this).attr('alt');

			location.href = "Camisa_short.php?tipo="+cs;

		});

		$("#iniciar").click(function(){

			location.href = "Ingresar.php";
		});

		$("#crearcuenta").click(function(){

			location.href = "Crear_cuenta.php";
		});

		$("#cerrar").click(function(){

			location.href = "cerrar_sesion.php";
		});

		$("#reservaciones").click(function(){

			location.href = "Ver_compras.php";
		});

		$("#carrito").click(function(){

			location.href = "Ver_carrito.php";
		});

	})

</script>