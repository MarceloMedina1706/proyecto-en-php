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
		<div class="cabecera-display" id="div-logo"><img id="logo" src="Image/closesports.png"></div>
		<div class="cabecera-display" id="div-titulo">Indumentarias deportivas</div>
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

	<section id="articulos_carrito">
		
		

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

			location.href = "index.php";
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

		$("#articulos_carrito").load("backend_comprar_carrito.php");

		$(document).on("click", "#confirmar", function(){
			
			let num_tarjeta = $("#numero-tarjeta").val();

			let importe = $("#precio_total").text();

			$.post("Verificar_tarjeta.php", {num_tarjeta:num_tarjeta, importe:importe}, function(data){

				if(data == "SI"){

					$(".div-art-car").each(function(){

						let idprod = $(this).data('id');

						let precio = $("#precio").text();

						$.post("Quitar_carrito.php", {id_prod:idprod});

						$.post("Reservar.php", {idprod:idprod, precio:precio}, function(data){

							if(data == "Reserva insertado con exito"){

								$.post("Actualizar_saldo.php", {num_tarjeta:num_tarjeta, importe:importe});

							}else{

								alert(data+"HA OCURRIDO UN ERROR");
							}
						});

						
					});

					location.href = "Ver_compras.php";
						
					alert("Articulo comprado ");



				}else if(data == "NO"){

					alert("TARJETA NO VALIDA");

					$("#numero-tarjeta").text("");
				}else{

					alert(data);

					$("#numero-tarjeta").text("");
				}
			});	
		});

		$("#reservaciones").click(function(){

			location.href = "Ver_compras.php";
		});

		$("#carrito").click(function(){

			location.href = "Ver_carrito.php";
		});


	})

</script>