<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>
	<body>

			<?php
				include 'navbar.php';
			?>
		
		<br>
		mobileHide

		<div class="container">
			<div class="form-row">
				<div class=" form-group col">
			
				<h4 align="left">Inserir</h1>
				<hr>

				<form method="post" action="gravar.php">

				<div class="form-group col">
				<label for="inputtext" >Número de Animais:</label>
				<input type="number" class="form-control" name="numero_animais" placeholder="" value="20" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Dias de Fornecimento:</label>
					<input type="number" class="form-control" name="dias_fornecimento" placeholder="" value="100" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Consumo de forragem de cada animal por dia (kg):</label>
					<input type="number" class="form-control" name="consumo_forragem" placeholder="" value="35" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Altura do Silo (m):</label>
					<input name="altura_silo"  class="form-control" type="number" min="2" max="4" step=0.1 value="2"> 
				</div>
				<div class="form-group col">
					<label for="inputtext" > <a href="index2.php"><img src="images/mudar.png"></a> Espessura da fatia a ser retirada diariamente (cm):</label>
					<input type="number" class="form-control" name="espessura_fatia" placeholder="" value="" min=20>
				</div>

				<div class="form-group col">
					<label for="inputtext" >Densidade considerada (kg/m³)</label>
					<input type="number" class="form-control" name="densidade" placeholder="" value="500">
				</div>
			</div>
			<div class="form-group col">
	
									<h4 align="left">Resultados</h1>
									<hr>

										<div class="form-group col">
											<label for="inputtext" > QS - Quantidade de silagem que o silo deve armazenar (kg):</label>
											<input type="text" class="form-control" name="quantidade_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > VS - Volume do silo (m³):</label>
											<input type="text" class="form-control" name="volume_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > VD - Volume diário (m³): </label>
											<input type="text" class="form-control" name="volume_dia" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > AS - Área da seção a ser retirada por dia (m²):</label>
											<input type="text" class="form-control" name="area_secao" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > b - Base menor do silo (m):</label>
											<input type="text" class="form-control" name="base_menor" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > B - Base Maior do Silo (m):</label>
											<input type="text" class="form-control" name="base_maior" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > CS - Comprimento do Silo (m):</label>
											<input type="text" class="form-control" name="comprimento_silo" placeholder="" readonly="readonly">
										</div>
		</div>
	</div>
</div>

	<?php
	
	if ($email && $senha) {
	echo "<div class=' form-group col text-center'>"; 
	echo "<button type='submit' class='btn btn-green'>Gravar</button>";
	echo "</div>;";
	}else{
		echo "<div class=' form-group col text-center'>"; 
		echo "<a class='btn btn-green' href='cadastrar.php'>Cadastre-se para gravar resultados</button></a>";
		echo"</div>;";
	}
	?>
    </form>
	
			<br>
			<br>
			<br>
			<br>
			<br>

			<?php
				include 'footer.php';
			?>
		
		<link rel="stylesheet" href="css/estilo2.css">
		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  	</body>
</html>
  

