<?php

include "conexao.php"; 

$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

echo "email: $email<br>";
echo "senha: $senha<br>";

$query = "SELECT nome FROM agricultor WHERE email = '$email' && senha = '$senha'";
$result = $conn->query($query);
while ($querynavbar = mysqli_fetch_array($query)){
	if($querynavbar['email'] == $email && $querynavbar['senha'] == $sehna){
		$nome = $querynavbar['nome'];
		break; 
	}
}

session_start();

if (!is_writable(session_save_path())) {
    echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}
else
{
    echo 'Session path "'.session_save_path().'" is writable for PHP!'; 
}

if (mysqli_num_rows($result) > 0) 
{
		echo "logado";
		$_SESSION["email"] = $email;
		$_SESSION["senha"] = $senha;
		$_SESSION["senha"] = $senha;
		$_SESSSION["nome"] = $nome;
		$_SESSION["zim"] = "An invader from another planet.";
		$_COOKIE["password"] = $senha;
		$_SESSION["senha"] = $senha;

		echo "<hr>";
		echo "email: " . $_SESSION["email"] . "<br>";
		echo "senha: " . $_SESSION["senha"]. "</br>";
		header('location:index.php');
} 
else 
{
		echo "senha incorreta";
}

mysqli_close($conn);


?>

<hr>
<a href="logout.php">Sair</a>
