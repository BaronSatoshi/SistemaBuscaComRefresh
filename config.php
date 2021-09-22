<?php

$host = 'firebird:dbname=localhost:C:\xampp\htdocs\BuscaDinamico\BUSCA.fdb';

$username = 'SYSDBA';

$password = 'masterkey';

$con = new PDO($host, $username, $password);

/*try{
    $con = new PDO('mysql:host=localhost;dbname=listatarefas', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOexception $e){
    echo 'Error: ' . $e->getMessage();
}*/


?>