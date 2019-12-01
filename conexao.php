<?php

$servidor ="localhost";
$usuario ="admin  ";
$senha ="admin";
$dbname ="20162290202";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
