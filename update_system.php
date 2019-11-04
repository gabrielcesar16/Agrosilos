<?php

include "conexão.php";
session_start();

if (mysqli_connect_error())
	echo mysqli_connect_error();

$servidor ="localhost";
$usuario ="admin";
$senha ="admin";
$dbname ="20162290202";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Check connection
if ($conn->connect_error) {
    die("A conexao falhou: " . $conn->connect_error);
}
$nome = $_REQUEST['nome'];
$propriedade = $_REQUEST['propriedade'];
$email = $_REQUEST['email'];
$senha = $_POST['senha'];
$senha = md5($senha);

/*
echo "nome: " . $_POST['nome'] ."<br>";
echo "propriedade: " . $_POST['propriedade']."<br>";
echo "email: " . $_POST['email']."<br>";
echo "senha: " . $_POST['senha']."<br>";
echo $_SESSION[id];
*/
header("location:logout.php");

$query = "UPDATE usuario SET
    nome = '$_POST[nome]',
    email = '$_POST[email]',
    senha = '$senha',
    propriedade = '$_POST[propriedade]'
 where id = $_SESSION[id]";

mysqli_query($conn, $query);
mysqli_close($conn);

?>

<hr>
<a href="logout.php">Sair</a>
