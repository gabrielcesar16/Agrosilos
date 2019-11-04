<?php

include "conexao.php"; 
session_start();


$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$senha = md5($senha);

$query = "SELECT * FROM usuario WHERE email = '$email' && senha = '$senha'";
$result = $conn->query($query);
while ($querynavbar = mysqli_fetch_array($result)){
	$nome = $querynavbar['nome'];
	$id = $querynavbar['id'];
}

if (mysqli_num_rows($result) > 0) 
{
		//echo "logado";
		$_SESSION["email"] = $email;
		$_SESSION["senha"] = $senha;
		$_SESSSION["nome"] = $nome;
		$_SESSION["zim"] = "An invader from another planet.";
		$_COOKIE["password"] = $senha;
		$_SESSION["id"] = $id;
		$_SESSION["perfil"] = $perfil;
	
		$_SESSION['loggedin'] = true;

		echo "<hr>";
		echo "email: " . $_SESSION["email"] . "<br>";
		echo "senha: " . $_SESSION["senha"]. "</br>";
		header('location:index.php?ok');
} 
else 
{
		//echo "senha incorreta";
		$_SESSION['loggedin'] = false;
		$_SESSION['login_error'] = true;
		header('location:loginfresco.php');



}

mysqli_close($conn);


?>	
