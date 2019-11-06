<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
      .mobileHide { display: inline; }

      /* Smartphone Portrait and Landscape */
      @media only screen
        and (min-device-width : 320px)
        and (max-device-width : 480px){
         .mobileHide { display: none;}
      }
      .navbar {background-color: #558114;}  
      .navbar-light span.navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='yellow' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        color: white;
      }
      button.navbar-toggler.navbar-toggler-right {
        border-color: white;
      }
    </style>
    
  </head>
<body>
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


<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php"style="color: white;" >
    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Agro Silos
  </a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="ajuda.php" id="nav-principal" style="color: white;">Ajuda</a>
      </li>

      <?php 
        if ($email && $senha) {
          echo "<li class='nav-item'>";
          echo "<a class='nav-link' href='historico.php' id='nav-regulamento' style='color: white;'>Histórico</a>";
          echo "</li>";
        }
      ?>

      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          Sobre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="sobre.php">Sobre a empresa</a>
          <a class="dropdown-item" href="contato.php">Contato</a>
        </div>
      </li>

    </ul>

    <ul class="navbar-nav ml-auto">
    <div class="dropdown-divider"></div>
        
        <?php if ($email & $senha){
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: white" data-toggle="dropdown" href="#">
          <img src='images/outline-account_circle-24px.svg' width='30' alt='Conta'>
          <?php echo $nrow["nome"];?>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="perfil.php">Meu perfil</a>
            <?php if ($nrow["perfil"] == "admin"){
            ?>
              <a class="dropdown-item" href="administrador.php">Mensagens</a>
            <?php
            }
            ?>
            <a class="dropdown-item" href="logout.php">Logout</a>
            <a class="dropdown-item" href="logout.php">
            <div class="mobileHide">Baixe o nosso aplicativo</div>
            </a>
         </div>
        </li>
        <?php
        }else{
        ?>
          <a style='color: white' href='account.php'>
          <img src='images/outline-account_circle-24px.svg' width='30' alt='Conta'>
          Entrar
          </a>
        <?php
        }?>
    </ul>
  </div>
</nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="css/bootstrap.min.js"></script>
    <script src="css/estilo2.css"></script>

<div style="margin-bottom: 30px"></div>
  </body>
</html>
