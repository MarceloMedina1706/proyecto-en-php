<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Crear cuenta</title>
	<script
		  src="https://code.jquery.com/jquery-3.5.1.min.js"
		  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		  crossorigin="anonymous">
    </script>
</head>
<body>

	

		<div class="logo-crear-cuenta">
			<img id="logo" src="Image/closesports.png">
		</div>

		<div id="div-crear-cuenta">
			
			<span>Ingresa nombre de usuario</span><br>
			<input class="input-datos" type="text" id="nom_usuario"><br><br>

			<span>Ingresa tu nombre</span><br>
			<input class="input-datos" type="text" id="nombre"><br><br>

			<span>Ingresa tu apellido</span><br>
			<input class="input-datos" type="text" id="apellido"><br><br>

			<span>Crea una contraseña</span><br>
			<input class="input-datos" type="password" id="pass"><br><br>


			<button id="crear" class="boton-crear-cuenta">Crear</button>

		</div>

	

</body>
</html>
<script type="text/javascript">
	
	$(document).ready(function(){

		$("#crear").click(function(){

			let nombre_usuario = $("#nom_usuario").val();

			let nombre = $("#nombre").val();

			let apellido = $("#apellido").val();

			let contrasenia = $("#pass").val();

			if((nombre_usuario=="") || (nombre=="") || (apellido=="") || (contrasenia=="")){

				alert("Completa todos los campos");

			}else{

				$.post("inserta_usuario.php", {usuario:nombre_usuario, nombre:nombre, apellido:apellido, contra:contrasenia}, function(data){

					if(data = "Usuario insertado con exito"){

						$.post('Verificar_usuario.php',{usuario:nombre_usuario, password:contrasenia},function(data){
					
									if(data == "error"){

										alert("No se ha encontrado al usuario");
									}else{
						
										location.href = "index.php";
									}
					
						})

					}

				});
			}

			


		})

		$("#logo").click(function(){

			location.href = "index.php";
		})



	})


</script>