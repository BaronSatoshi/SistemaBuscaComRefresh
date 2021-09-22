<?php

include('config.php');
error_reporting(0);

if(isset($_GET['buscar'])){

    $buscar = $_GET['buscar'];
    $sql = $con->prepare("SELECT * FROM INFO WHERE NOME LIKE '%$buscar%'");
    $sql->execute();
    $info = $sql->fetchAll();
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pesquisa</title>
</head>
<body>
    <form method="get">
        <input type="search" name="buscar" placeholder="Fazer pesquisa">
        <input type="submit" value="Buscar">
    </form>
    <?php 
      
      foreach($info as $key => $value){
          echo utf8_encode($value['NOME']) . '<br>';
      }
      
    ?>
</body>
</html>