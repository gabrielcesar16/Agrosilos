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

$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

echo "email: $email<br>";
echo "senha: $senha<br>";

$sql = "SELECT nome FROM Agricultor WHERE email = '$email' && senha = '$senha'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) 
{
    echo "logado";
} 
else 
{
    echo "senha incorreta";
}

mysqli_close($conn);

?>