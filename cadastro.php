<?php

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
$senha = $_REQUEST['senha'];

echo "nome: $nome<br>";
echo "propriedade: $propriedade<br>";
echo "email: $email<br>";
echo "senha: $senha<br>";




?>