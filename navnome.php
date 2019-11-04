<?php
include "conexao.php"; 

session_start();

$email = $_SESSION["email"];
$senha = $_SESSION["senha"];
$loggedin = $_SESSION['loggedin'];

$nquery = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
$nresult = mysqli_query($conn, $nquery);
$nrow = mysqli_fetch_assoc($nresult);

echo $nrow["nome"]; 
echo $nrow["perfil"];


?>
