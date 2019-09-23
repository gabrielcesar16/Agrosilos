<?php

include "conexao.php";
include "menu.php";

?>

<p>Create</p><hr>

<form method="post" action="create_system.php">
	Nome: <input type="text" name="nome"><br>
	E-mail: <input type="text" name="email"><br>
	Senha: <input type="text" name="senha"><br>
	Propriedade: <input type="text" name="propriedade"><br>
	<button type="submit">Criar</button>
</form>

