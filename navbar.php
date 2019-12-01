<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
    <style type="text/css">
      .mobileHide { display: inline; }

      /* Smartphone Portrait and Landscape */
      @media only screen
        and (min-device-width : 320px)
        and (max-device-width : 720px){
         .mobileHide { display: none;}
      }

      @media screen and (min-width: 1000px) {
        .desktopHide { display: none;}
       
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
  <a class="navbar-brand" href="menu.php"style="color: white;" >
    <img src="images/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Agro Silos
  </a>
 
    <ul class="navbar-nav ml-auto"  style="">
        
        <?php if ($email & $senha){
        ?>
        <li class="nav-item dropdown" 
        >
          <a class="nav-link dropdown-toggle" style="color: white" data-toggle="dropdown" href="#">
          <img src='images/outline-account_circle-24px.svg' width='30' alt='Conta'>
          <?php echo $nrow["nome"];?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" data-no-collapse="true">
            <div class="desktopHide">
             <?php echo $nrow["nome"];?>
            <hr>
            </div>
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
          <a style='color: white' href='index.php'>
          <img src='images/outline-account_circle-24px.svg' width='30' alt='Conta'>
          Entrar
          </a>
        <?php
        }?>
    </ul>
  </div>
</nav>

    <script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
    <script src="css/bootstrap.js"></script>
    <script src="css/estilo2.css"></script>

<div style="margin-bottom: 30px"></div>
  </body>
</html>
