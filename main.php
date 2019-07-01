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
		
		<div class="row">
			<div class="col-md-12 text-center">
			<div class="container">	
				<div class="dropdown">
					<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" 			id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Selecione seu cálculo
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<button class="dropdown-item" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >Consumo de materia seca</button>
							<button class="dropdown-item" type="button">Action</button>
							<button class="dropdown-item" type="button">Action</button>
					</div>
				</div>


			</div>	


					<br>
					<div class="container">
							<div class="collapse" id="collapseExample">
									<h4 align="left">CMS - Consumo de Matéria Seca</h1>
									<hr>
										<div class="form-group row">
											  <label for="inputPassword" class="col-sm-1 col-form-label">Peso Vivo Médio</label>
											  <div class="col-sm-10">
												<input type="text" class="form-control" id="pvm" placeholder="">
											  </div>
											</div>
										
									  <button type="button" class="btn btn-primary btn-lg" onclick="calcular_cms()" >Calcular</button>  			
									  <button type="button" class="btn btn-primary btn-lg" onclick="clear_cms()" >Limpar</button>
									  <br></br>
									  <button type="button" class="btn btn-primary btn-lg">Adicionar a ficha</button>

									  
									  <br></br>

									  <div class="form-group row">
											<label for="inputPassword" class="col-sm-1 col-form-label">Resultado</label>
											<div class="col-sm-10">
											  <input class="form-control" id="resultado" placeholder="" disabled>
											</div>
										  </div>
										</form>
							</div>
					</div>

			<a href="#" class="btn btn-secondary btn-lg" role="button" aria-disabled="true">Imprimir ficha</a>


		</div>
		

		


		<script src="function.js"></script> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	</body>
</html>
  

