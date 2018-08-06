<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "bancoLogin";
$conn = new mysqli($servername, $username, $password, $dbname);

$modo = "";
if(isset($_POST['modo'])) {
$modo = $_POST['modo'];
}

//como printar uma variavel
$nome = "";
if (isset($_POST['nome'])) {
$nome = $_POST['nome'];
}

$senha = "";
if (isset($_POST['senha'])) {
$senha = $_POST['senha'];
}

if ($modo == 'logar') {
	$sql = "SELECT `senha`, `login` FROM `cadastro` WHERE  senha = '$senha' AND login = '$nome'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if ($row) {
		echo "<script> alert('inseriu!'); </script>";
		header('Location: projetoantigo/projeto1.html');
	} else {
		echo "<script> alert('Senha ou Login incorreto!'); </script>";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<div class = geral>
		<div class = divLogin>
			<form method="post" action="login.php">
				<h1 id = "nomeLogin">Tela De Login</h1><br> 
				<label id = "labelNome">Nome:</label> <input type="text" name="nome" placeholder=" digite seu nome aqui" required><br><br>
				<label id = "labelSenha">Senha:</label> <input type="password" name ="senha" placeholder=" digite sua senha aqui" required><br><br>
				<input type="hidden" name="modo" value="logar">
				<button type="submit" class="botao">Entrar</button>
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