<?php  
	
	require_once("conexion.php");

	$usuario=strip_tags(addslashes($_POST["usuario"]));
	
	$password=strip_tags(addslashes($_POST["password"]));

	$sql = "SELECT id, Nombre, Apellido, Password, Tipo_usuario from usuarios where Usuario = '".$usuario."' ";

    $resultado = mysqli_query($conexion,$sql);

    $res = mysqli_fetch_array($resultado);

    if(password_verify($password, $res['Password'])){
         
         session_start();
        
         $_SESSION['user'] = $res['Nombre'] . " " . $res['Apellido'];

         $_SESSION['id'] = $res['id'];

         $_SESSION['car'] = "";

         if($res['Tipo_usuario'] == "admin"){

            echo "admin";

            exit();
         }

         echo $_SESSION['user'];

    }else{

         echo 'error';
    
    } 

    //mysql_close($conexion);
?>