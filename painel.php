<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cadastro";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error ());
mysqli_select_db($conexao, $banco) or die(mysqli_error());

?>

<?php

session_start();
if(!isset($_SESSION["email"])	||	!isset($_SESSION["senha"])) {

echo "<center>FUNCIONOU</center>";

}

?>
