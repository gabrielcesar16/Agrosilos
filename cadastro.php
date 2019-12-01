<?php

include "conexão.php";

if (mysqli_connect_error())
	echo mysqli_connect_error();

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Check connection
if ($conn->connect_error) {
    die("A conexao falhou: " . $conn->connect_error);
}
$nome = $_REQUEST['nome'];
$propriedade = $_REQUEST['propriedade'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

$senha = md5($senha);

echo "nome: $nome<br>";
echo "propriedade: $propriedade<br>";
echo "email: $email<br>";
echo "senha: $senha<br>";

$query = "INSERT INTO usuario
(
    nome,
    email,
    senha,
    propriedade,
    perfil
)
VALUES
(
    '$nome',
    '$email',
    '$senha',
    '$propriedade',
    'agricultor'
)";

mysqli_query($conn, $query);
mysqli_close($conn);
header('location:index.php');

?>