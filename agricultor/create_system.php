<?php

include "conexao.php";
include "menu.php";

$nome = $_REQUEST["nome"];
$email = $_REQUEST["email"];
$senha = $_REQUEST["senha"];
$propriedade = $_REQUEST["propriedade"];

$sql = "INSERT INTO agricultor VALUES (default, '$nome', '$email', '$senha', '$propriedade')";

mysqli_autocommit($conn,FALSE);
mysqli_query($conn, $sql);
mysqli_commit($conn);

mysqli_close($conn);

?>
