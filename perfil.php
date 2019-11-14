
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

</style>

<body>
	<?php
		include 'navbar.php';
	?>
	<br>
		
	<div class="container">
		<div class="card" style="width: 100%; margin-top: 50px">
		  <!--<img src="..." class="card-img-top" alt="...">-->
		  <div class="card-body">
		    <h5 class="card-title">Meu Perfil</h5>
		    <p class="card-text">Configure seu perfil</p>

		    <?php
		    	if(isset($_SESSION['login_error'])){
		    		echo '<div class="alert alert-danger" role="alert">Erro ao logar, verifique as credenciais!</div>';
		    		unset($_SESSION['login_error']);
		    	}
		    ?>
		    
		    <form method="POST" action="update_system.php">
			<div class="form-group required">

				    <label for="input-name" class="control-label">Nome</label>
				    <input type="text" class="form-control" id="input-name" placeholder="Insira seu nome completo" name="nome" required value="Steve Jobs">
				  </div>

				  <div class="form-group required">
				    <label for="input-propriedade" class="control-label">Propriedade</label>
				    <input type="text" class="form-control" id="input-propriedade" placeholder="Insira o nome da propiedade" name="propriedade" required value="Fazenda Azul">
				  </div>
				  
				  <div class="form-group required">
				    <label for="input-email" class="control-label">Email</label>
				    <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="Insira seu Email" name="email" required value="steve@apple.com">
				  </div>
				  <div class="form-group required">
				    <label for="input-pass" class="control-label">Senha</label>
				    <input type="password" class="form-control" id="input-pass" placeholder="Insira sua senha" name="senha" required>
				  </div>
				  <button type="submit" class="btn btn-green">Atualizar</button>
				</form>
		  </div>
		</div>
	</div>
	<div style=
	"
	 position: absolute;
  	bottom: 0;
  	width: 100%;
  	height: 2.5rem;
	"
	>
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
