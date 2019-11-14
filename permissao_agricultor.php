<?php

include "conexao.php"; 

session_start();

$senha = $_SESSION["senha"];

if (isset($email)){
    $status = true;
}

if ($status != true)
{
    header("location:index.php\n");
}

?>
