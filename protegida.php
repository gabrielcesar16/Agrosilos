<?php

include "conexao.php"; 

session_start();

$email = $_SESSION["email"];
$senha = $_SESSION["senha"];

		/*
		echo "<hr>";
		echo "email: " . $_SESSION["email"] . "<br>";
		echo "senha: " . $_SESSION["senha"]. "<br>";
		*/

//$query = "SELECT nome FROM agricultor WHERE email = '$email' and senha = '$senha'";
$query = "SELECT * FROM mensagem where id = '2'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

Nome: <?= $row["nome"] ?><br>

<hr>
<a href="logout.php">Sair</a>
