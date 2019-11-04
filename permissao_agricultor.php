<?php

include "conexao.php"; 

session_start();

$email = $_SESSION["email"];
$senha = $_SESSION["senha"];

/*
$query = "SELECT nome FROM agricultor WHERE email = '$email' and senha = '$senha'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
*/

if (isset($email) && isset($senha))
    header("location:account.php\n");


?>
