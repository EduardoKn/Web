<?php
session_start();
include'conexao.php';

$nick = $_POST['nick'];
$senha = $_POST['senha'];


$achar = "SELECT * FROM usu WHERE nick='$nick' AND senha='$senha'";
$resultado = $conn->query($achar);

if($resultado->num_rows > 0){
    $_SESSION['nick'] = $nick;
    $_SESSION['senha'] = $senha;
    header('location: Prin.php');
}else{
    session_unset();
    session_destroy();
    echo "<script>
        alert('Login ou senha incorreto');
        window.location.href = 'Log.php';
        </script>";
    
}


