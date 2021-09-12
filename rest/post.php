<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['id']))
    {
      
      $sql = $dbConn->prepare("SELECT * FROM articulos where id_articulos=:id");
      $sql->bindValue(':id', $_GET['id']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
	  }
    else {
      
      $sql = $dbConn->prepare("SELECT * FROM articulos");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
	}
}


header("HTTP/1.1 400 Bad Request");

?>