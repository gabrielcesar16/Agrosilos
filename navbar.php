<?php
include "conexao.php"; 

session_start();

$email = $_SESSION["email"];
$senha = $_SESSION["senha"];

$query = "SELECT nome FROM agricultor WHERE email = '$email' and senha = '$senha'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Agro Silos
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="sobre.php" id="nav-principal">Sobre</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="manual.php" id="nav-regulamento">Dicionario</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="historico.php" id="nav-regulamento">Histórico</a>
      </li>

            </li>
    </ul>

    <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle btn-group dropleft" style="color: white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true img src="outline-account_circle-24px.svg" width="30" height="30" class="d-inline-block align-top" alt="Conta" aria-expanded="false">
        <?php 
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
          echo $row["nome"]; 
        }else{
          echo "Log In";
        }
        ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-accounts">
          <a class="dropdown-item" href="logout.php">Logout</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
			<li class="nav-item active">
    		<a id="nav-account" style="color: white" href="account.php">
        <img src="outline-account_circle-24px.svg" width="30" height="30" class="d-inline-block align-top" alt="Conta">
    		  asd
        </a>
			</li>
      
    </ul>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="css/bootstrap.min.js"></script>
<div style="margin-bottom: 80px"></div>
