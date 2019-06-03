<?php
include'conexao.php';
include 'edados.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$nick = $_POST['nick'];
$rsenha = $_POST['rsenha'];

$editar = "UPDATE usu SET  Nome='$nome', Email='$email', Nick='$nick', Senha='$rsenha' WHERE Id='$id'";
$resultado = $conn->query($editar);

if($resultado){
    echo "<script type=\"text/javascript\">
             alert(\"Dados editados com sucesso.\");
          </script>";
    header('location:Log.php');
}else{
    echo "<script type=\"text/javascript\">
             alert(\"Os dados não forma editados.\");
          </script>";
}


