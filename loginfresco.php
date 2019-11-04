<?php
	session_start();

	if(isset($_SESSION['logged'])){
		header('location: user_account.php');
	}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<title>Agro Silos</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style type="text/css">
.center-hor {
  text-align: center;
}

.form-group.required .control-label:after {
  content:"";
  color:red;
}

.hero-image {
  background-image: url("images/login.jpg"); /* The image used */
  background-color: #cccccc; /* Used if the image is unavailable */
  height: 600px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}

</style>

<div class="hero-image">

<body>
	<?php
		include 'navbarlogin.php';
	?>
	<div class="container col-xl-4 col-md-6 rounded " style="
        position: relative;
        float: left;
        margin-top: -0px;

    ">
		<div class="card" style="width: 100%; margin-top: 50px">
		  <!--<img src="..." class="card-img-top" alt="...">-->
		  <div class="card-body">
          <br>
		    <h5 class="card-title">Entrar na Conta</h5>
            <hr>
		    <form method="POST" action="login_system.php">
				  <div class="form-group required">
				    <label for="input-email" class="control-label">E-mail</label>
				    <input type="text" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="Insira seu Email" name="email" required value="steve@apple.com">
				  </div>
				  <div class="form-group required">
				    <label for="input-pass" class="control-label">Senha</label>
				    <input type="password" class="form-control" id="input-pass" placeholder="Insira sua senha" name="senha" required>
				  </div>
                  <?php
		    	        if(isset($_SESSION['login_error'])){
		    		    echo '<div class="alert alert-danger" role="alert">Erro ao logar, verifique as credenciais!</div>';
		    		    unset($_SESSION['login_error']);
		    	        }
		            ?>
                  <br>
				  <button type="submit" class="btn btn-green">Entrar</button>
				  <a href="cadastrar.php" class="btn btn-success">Cadastrar</a>
                   
                  <br>
                  <br>
				</form>
		  </div>
		</div>
	</div>

	</div>
	<div class="" style="
        position: fixed;
        width: 100%;
        top: 100%;
        margin-top: -70px;
    ">
	<?php
	include 'footer.php';
	?>
    </div>


  <link rel="stylesheet" href="css/estilo2.css">		
  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
