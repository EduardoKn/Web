<?php
include'conexao.php';

$nome = $_POST['nome'];
$email= $_POST['email'];
$nick= $_POST['nick'];
$senha = $_POST['senha'];
$rsenha = $_POST['rsenha'];

if(strcmp($senha, $rsenha)!=0){
    echo "<script>
        alert('As senhas não batem.')
        location.href='Cad.php';
        </script>";
}else{
//$crips = md5(md5($senha));

$inserir = "INSERT INTO usu (nome, email, nick, senha) VALUES ('$nome', '$email', '$nick', '$senha')";
$resultado = mysqli_query($conn, $inserir);

if(mysqli_affected_rows($conn)!= 0){
    echo "<script type=\"text/javascript\">
             alert(\"usuario cadastrado com sucesso.\");
          </script>";
    header('location:Log.php');
}else{
    echo "<script type=\"text/javascript\">
             alert(\"usuario não foi cadastrado com sucesso.\");
          </script>";
}
}