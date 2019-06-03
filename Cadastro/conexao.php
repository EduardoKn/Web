<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname="Lol";

$conn = new mysqli($servidor, $usuario, $senha, $dbname);
if($conn->connect_error=== TRUE){
    die("Falha na conexão:".$conn->connect_error);
}

