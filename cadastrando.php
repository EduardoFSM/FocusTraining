<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die (mysqli_error());

?>

<?php

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$cpf=$_POST['cpf'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($conexao, "INSERT INTO usuarios(nome, sobrenome, cpf, email, senha)
VALUES('$nome', '$sobrenome', '$cpf', '$email', '$senha')");

?>
