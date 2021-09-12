<?php

	require_once("conexion.php");

	$id = $_POST['num_tarjeta'];

  $importe = $_POST['importe'];

	$sql = "SELECT * from tarjetas where Numero_tarjeta = " . $id;

    if($resultado = mysqli_query($conexion,$sql)){

    	while($registro = mysqli_fetch_array($resultado)){
    		
    		if ($registro['Saldo'] < $importe) {
          
          echo "NO CUENTA CON SALDO SUFICIENTE";
        
        }else{

          echo "SI";
        }
				
        exit();
    	}

    	
      echo "NO";
    }



?>