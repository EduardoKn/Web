<?php
include'conexao.php';


$editar = "SELECT Id, Nome, Email, Nick, Senha FROM usu ";
$resultado = $conn->query($editar);
while ($dados = $resultado->fetch_assoc()){
    $id = $dados["Id"];
    $nome = $dados["Nome"];
    $email = $dados["Email"];
    $nick = $dados["Nick"];
    $senha = $dados["Senha"];
    
}

