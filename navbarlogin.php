<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style type="text/css">
      .mobileHide { display: inline; }

      /* Smartphone Portrait and Landscape */
      @media only screen
        and (min-device-width : 320px)
        and (max-device-width : 480px){
         .mobileHide { display: none;}
      }
    </style>
    
  </head>
</html>
<?php
include "conexao.php"; 

session_start();

$email = $_SESSION["email"];
$senha = $_SESSION["senha"];
$loggedin = $_SESSION['loggedin'];


$nquery = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
$nresult = mysqli_query($conn, $nquery);
$nrow = mysqli_fetch_assoc($nresult);

?>


<nav class="navbar navbar-expand navbar-dark" style="background-color:#558114; color:white;">

  <a class="navbar-brand" href="index.php"style="color: white;" >
    <img src="images/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Agro Silos
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>

  </div>
</nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/estilo2.css"></script>

<div style="margin-bottom: 30px"></div>
