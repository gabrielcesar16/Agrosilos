<?php

include "conexao.php";
include "menu.php";

$id = $_REQUEST["id"];

$query = "SELECT * FROM agricultor WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<p>Detail</p><hr>

Nome: <?= $row["nome"] ?><br>
E-mail: <?= $row["email"] ?><br>
Senha: <?= $row["senha"] ?><br>
Propriedade: <?= $row["propriedade"] ?><br>

