<?php
session_start();

function randomText($length){

	$pattern ="1234567890abcdefghijklmnopqrstuvwxyz";

	$key     ='';

	for($i=0;$i<$length;$i++){

		$key.=$pattern{rand(0,35)};

	}
	return $key;
}

$_SESSION['tmptxt'] = randomText(5);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="estilos.css"/>

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
	<div id="formlogin">
	<span class="tipotexto">Usuario</span><br><input class="input-datos" type="text" id="usuario" required="">
	<br><br>
	<span class="tipotexto">Contraseña</span><br><input class="input-datos" type="password" id="contra" required="">
	<br><br>
	<img src="captcha.php">	
	<br><br>
	<span class="tipotexto">Captcha</span><br><input class="input-datos" type="text" id=captcha name="captcha">
	<br><br>
	<button class="boton-crear-cuenta" id="login" type="button">Entrar</button>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){

		$('#login').click(function(){

			if($("#captcha").val() == '<?php echo $_SESSION['tmptxt']; ?>'){

				let user = $('#usuario').val();

				let pass = $('#contra').val();

				$.post('Verificar_usuario.php',{usuario:user, password:pass},function(data){
					
					if(data == "error"){

						alert("No se ha encontrado al usuario");
					}else if(data == "admin"){
						
						location.href = "index_admin.php";

					}else{

						location.href = "index.php";
					}
					
				})

			}else{

				alert("Volve a hacer el captcha");
			}
		})

		$("#logo").click(function(){

			location.href = "index.php";
		})

	})


</script>