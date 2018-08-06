<?php
include 'connection.php';

$modo = "";
if(isset($_POST['modo'])) {
$modo = $_POST['modo'];
}

$nome = "";
if (isset($_POST['nome'])) {
$nome = $_POST['nome'];
}
$senha = "";
if (isset($_POST['senha'])) {
$senha = $_POST['senha'];
}

if ($modo == 'inserir') {
	$sql = "INSERT INTO cadastro (senha, login) VALUES ('".$senha."','".$nome."')";
	if ($conn->query($sql)) {
		echo "<script> alert('você está cadastrado!'); </script>";
		header('Location: login.php');
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>CADASTRO</title>
</head>
<body>
	<div class = geral>
		<div class = divLogin>
			<form method="post" action="cadastro.php">
				<h1 id = "nomeLogin">Tela De Cadastro</h1><br> 
				<label id = "labelNome"><b>Nome:<b></label> <input type="text" name="nome" placeholder=" digite seu nome aqui" required><br><br>
				<label id = "labelSenha"><b>Senha:<b></label> <input type="password" name ="senha" placeholder=" digite sua senha aqui" required><br><br>
				<input type="hidden" name="modo" value="inserir">
				<button type="submit" class="botao">Cadastrar</button>
			</form>
		</div>
	</div>

</body>
</html>
<style type="text/css">
	.geral {
		position: absolute;
		width: 100%;
		height: 630px;
		
	}
	.divLogin {
		text-align: center;
		width: 100%;
		height: 50%;
		margin-top: 15%;
		background-color: grey;

	}
	.botao {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 1px solid transparent;
		padding: 8px 15px;
		margin-left: 5%;
		margin-top: 5%;
		}
</style>
