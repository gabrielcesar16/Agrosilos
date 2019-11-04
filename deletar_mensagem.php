<?php


include "conexao.php";

$id = $_REQUEST['id'];

//echo "nome: $nome<br>";

$query = "DELETE FROM mensagem where id='$id'";

mysqli_query($conn, $query);
mysqli_close($conn);

header("location: administrador.php\n");

?>

