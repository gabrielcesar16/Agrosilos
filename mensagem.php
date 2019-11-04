<?php

include "conexao.php"; 
session_start();


if (mysqli_connect_error())
	echo mysqli_connect_error();

/*
id
nome
email
mensagem 
*/


$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];  
$mensagem = $_REQUEST['mensagem'];         

/*
echo "nome : $nome<br>";
echo "email : $email<br>";
echo "mensagem : $mensagem<br>";

	id = '$id',
	nome = '$nome',
	email = '$email',
	mensagem = '$mensagem',
	
INSERT INTO mensagem VALUES
    (DEFAULT, 'Steve Jobs', 'steve@apple.com', 'Mensagem 1'),
    (DEFAULT, 'Bill Gates', 'bill@microsoft.com', 'Mensagem 2')
;  

*/



$query = "INSERT INTO mensagem 
(
	nome,
    email,
    mensagem
)
VALUES
(
	'$nome',
    '$email',
    '$mensagem'
)";

mysqli_query($conn, $query);
mysqli_close($conn);

echo $query;

?>

<hr>
<a href="logout.php">Sair</a>