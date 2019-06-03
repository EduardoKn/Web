<!DOCTYPE html>
<?php
include 'C:\xampp\htdocs\Web\Cadastro\conexao.php';

$consulta = "SELECT * FROM usu";
$var = $conn->query($consulta) or die($conn->error);



?>
<html lang="pt-br">
<head>
     <?php
        session_start();
        if((!isset ($_SESSION['nick']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'http://localhost/Web/Cadastro/Log.php';
                </script>";

        }
        $logado = $_SESSION['nick'];
        ?>
	<title>My Plans - Usuários</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="Cadastro/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Nome</th>
								<th class="column3">E-mail</th>
								<th class="column4">Nickname</th>
								<th class="column5">Ação</th>
								
							</tr>
						</thead>
						<tbody>
                                                                <?php while($dado = $var->fetch_array()){ ?>
								<tr>
									<td class="column1"><?php echo $dado["Id"]; ?></td>
									<td class="column2"><?php echo $dado["Nome"]; ?></td>
									<td class="column3"><?php echo $dado["Email"]; ?></td>
                                                                        <td class="column4"><?php echo $dado["Nick"]; ?></td>
                                                                        <td class="column5"><a href="http://localhost/Web/Cadastro/Atl.php?edados&Id=<?php echo $dado["Id"]; ?>">Editar</a> |
                                                                                            <a href="javascript: if(confirm('Certeza que deseja excluir?'))location.href='http://localhost/Web/Cadastro/ddados.php?ddados&Id=<?php echo $dado["Id"]; ?>';">Excluir</a></td>
									
								</tr>
								
                                                                <?php }?>
                                                <a href="http://localhost/Web/Cadastro/Prin.php">Voltar</a>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
        

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

