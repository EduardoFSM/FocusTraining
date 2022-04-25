<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error ());
mysqli_select_db($conexao, $banco) or die(mysqli_error());

?>

<script type="text/javascript">

function loginsuccessfully() {

setTimeout ("window.location = 'painel.php'", 5000); 

}

function loginfailed() {

setTimeout ("window.location = 'login.php'", 5000); 

}

</script>

<?php

$email=$_POST ['email'];
$senha=$_POST ['senha'];
$sql = mysqli_query ($conexao, "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die (mysqli_error());
$row = mysqli_num_rows($sql);
if($row == 1) {

$user = mysqli_fetch_array ($sql);

session_start();
$_SESSION ['email']=$_POST['email'];
$_SESSION ['id']=$user['id'];

echo "<center>Login realizado com sucesso!".$user['id']."</center>";
echo "<script>loginsuccessfully()</script>";

} else {

echo "<center>Nome ou senha inválida.</center>";

echo "<script>loginfailed()</script>";

}

?>
