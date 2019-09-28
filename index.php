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
				<input type="number" class="form-control" name="numero_animais" placeholder="" value="20" min="1" max="1024">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Dias de Fornecimento:</label>
				<input type="number" class="form-control" name="dias_fornecimento" placeholder="" value="100" min="1" max="1024">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Consumo por dia:</label>
				<input type="number" class="form-control" name="consumo_forragem" placeholder="" value="35" min="1" max="1024">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Altura do Silo:</label>
				<input type="number" class="form-control" name="altura_silo" placeholder="" value="2" min="2" max="4">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Espessura da fatia a ser retirada diariamente:</label>
				<input type="number" class="form-control" name="espessura_fatia" placeholder="" value="0.15" min="0.15" max="8.0">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Densidade considerada</label>
				<input type="number" class="form-control" name="densidade" placeholder="" value="500">
			</div>
			

			</div>	


					<br>
					<div class="container">
									<h4 align="left">Resultados</h1>
									<hr>

										<div class="form-group row">
											<label for="inputtext" >Quantidade de silagem que o silo deve armazenar (QS):</label>
											<input type="text" class="form-control" name="quantidade_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Volume do silo:</label>
											<input type="text" class="form-control" name="volume_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Volume diário:</label>
											<input type="text" class="form-control" name="volume_dia" placeholder="" readonly="readonly">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Área da seção a ser retirada por dia:</label>
											<input type="text" class="form-control" name="area_secao" placeholder="" readonly="readonly">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Base menor do silo:</label>
											<input type="text" class="form-control" name="base_menor" placeholder="" readonly="readonly">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Base Maior do Silo:</label>
											<input type="text" class="form-control" name="base_maior" placeholder="" readonly="readonly">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Comprimento do Silo:</label>
											<input type="text" class="form-control" name="comprimento_silo" placeholder="" readonly="readonly">
										</div>
										<br>
										<button type="submit" class="btn btn-primary">Gravar</button>

										<br>
										<br>

										</form>
							</div>
					</div>


		</div>
		


			<?php
				include 'footer.php';
			?>
		

		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  	</body>
</html>
  

