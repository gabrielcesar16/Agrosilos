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
				<input type="number" class="form-control" name="numero_animais" placeholder="" min="1" max="1024" value="20">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Dias de Fornecimento:</label>
				<input type="number" class="form-control" name="dias_fornecimento" placeholder="" min="1" max="1024" value="100">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Consumo por dia:</label>
				<input type="number" class="form-control" name="consumo_forragem" placeholder=""min="1" max="1024" value="35">
			</div>

			<div class="dropdown">
				<label for="inputtext" >Altura do Silo:</label>
<<<<<<< HEAD
				<input type="number" class="form-control" name="altura_silo" placeholder="" min="2" max="4" value="2">
			</div>
=======
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
    					<li><a href="#">2</a></li>
    					<li><a href="#">3</a></li>
    					<li><a href="#">4</a></li>
 				 </ul>
			</div> 
>>>>>>> 57c95ef20c1123880d49569ef73dcf60f2ccb584

			<div class="form-group row">
				<label for="inputtext" >Espessura da fatia a ser retirada diariamente:</label>
				<input type="number" class="form-control" name="espessura_fatia" placeholder="" value="0.20">
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
  

