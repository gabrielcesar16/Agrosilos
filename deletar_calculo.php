<?php


include "conexao.php";

$id = $_REQUEST['id'];

//echo "nome: $nome<br>";

$query = "DELETE FROM calculos where id='$id'";

mysqli_query($conn, $query);
mysqli_close($conn);

header("location: historico.php\n");

?>