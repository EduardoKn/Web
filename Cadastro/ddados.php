<?php
include'conexao.php';

$id = $_GET['Id'];

$excluir = "DELETE FROM usu WHERE Id='$id'";
$resultado = mysqli_query($conn, $excluir);

if($resultado){
    echo "<script type=\"text/javascript\">
             location.href='Tabela/Tab.php';
          </script>";
}else{
    echo "<script type=\"text/javascript\">
             alert(\"Não foi possível deletar o usuário.\");
          </script>";
}
