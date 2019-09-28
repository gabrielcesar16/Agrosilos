<html>
	<head>
		<title>Silagem</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>

			<?php
				include 'navbar.php';
			?>
		
		<br>
		<br>
		
		<div class="container">
			<div class="row">
			<div class="col-md-12 text-center">
			<div class="container">	

			<h4 align="left">Inserir dados</h1>
			<hr>

			<form method="post" action="gravar.php">

			<div class="form-group row">
				<label for="inputtext" >Número de Animais:</label>
				<input type="text" class="form-control" name="numero_animais" placeholder="" min="1" max="1024">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Dias de Fornecimento:</label>
				<input type="text" class="form-control" name="dias_fornecimento" placeholder="" min="1" max="1024">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Consumo por dia:</label>
				<input type="text" class="form-control" name="consumo_forragem" placeholder=""min="1" max="1024">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Altura do Silo:</label>
				<input type="text" class="form-control" name="altura_silo" placeholder="" min="2" max="4">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Espessura da fatia a ser retirada diariamente:</label>
				<input type="text" class="form-control" name="espessura_fatia" placeholder="" min="0.15" max="8">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Densidade considerada</label>
				<input type="text" class="form-control" name="densidade" placeholder="">
			</div>
			

			</div>	


					<br>
					<div class="container">
									<h4 align="left">Resultados</h1>
									<hr>

										<div class="form-group row">
											<label for="inputtext" >Quantidade de silagem que o silo deve armazenar (QS):</label>
											<input type="text" class="form-control" name="quantidade_silo" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Volume do silo:</label>
											<input type="text" class="form-control" name="volume_silo" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Volume diário:</label>
											<input type="text" class="form-control" name="volume_dia" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Área da seção a ser retirada por dia:</label>
											<input type="text" class="form-control" name="area_secao" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Base menor do silo:</label>
											<input type="text" class="form-control" name="base_menor" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Base Maior do Silo:</label>
											<input type="text" class="form-control" name="base_maior" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Comprimento do Silo:</label>
											<input type="text" class="form-control" name="comprimento_silo" placeholder="">
										</div>
										<br>
										<button type="submit" class="btn btn-primary">Gravar</button>

										<br>
										<br>

										</form>
							</div>
					</div>


		</div>
		

		


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	</body>
</html>
  

