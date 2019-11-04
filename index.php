<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
}
		
	</head>
	<body>

			<?php
				include 'navbar.php';
			?>
		
		<br>		
		<div class="container">
			<div class="form-row">
				<div class=" form-group col">
			
				<h4 align="left">Inserir</h4>
				<hr>

				<form method="post" action="gravar.php">

				<div class="form-group col">
				<label for="inputtext" >Número de Animais</label>
				<input type="number" class="form-control " name="numero_animais" placeholder="" value="20" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Dias de Fornecimento</label>
					<input type="number" class="form-control " name="dias_fornecimento" placeholder="" value="100" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Consumo de forragem de cada animal por dia (kg)</label>
					<input type="number" class="form-control " name="consumo_forragem" placeholder="" value="35" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Altura do Silo (m)</label>
					<input name="altura_silo"  class="form-control " type="number" min="2" max="4" step=0.1 value="2"> 
				</div>

				<div class="form-group col">
					<label for="inputtext" > <a href="index.php "><img src="images/mudar.png"></a> Espessura da fatia a ser retirada diariamente (cm)</label>
					<input type="number" class="form-control" name="espessura_fatia" placeholder="" value="15">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Densidade considerada (kg/m³)</label>
					<input type="number" class="form-control " name="densidade" placeholder="" value="500">
				</div>
				<div class="form-group col text-center">
					<button type='button' class='btn btn-green' data-toggle="modal" data-target="#exampleModal">Calcular</button>
				</div>

			</div>
		</div>
	</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 	aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
    	  			<div class="modal-header">
    	    			<h5 class="modal-title" id="exampleModalLabel"> Resultados</h5>
    	    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    	      				<span aria-hidden="true">&times;</span>
    	    			</button>
    	 			 </div>
    	  				<div class="modal-body">
						  <div class="form-row">
				                <div class=" form-group col">
                                    <form>
										<div class="form-group">
											<label for="inputtext" > QS - Quantidade de silagem que o silo deve armazenar (kg)</label>
											<input type="text" class="form-control  " name="quantidade_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > VS - Volume do silo (m³)</label>
											<input type="text" class="form-control  " name="volume_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > VD - Volume diário (m³)</label>
											<input type="text" class="form-control  " name="volume_dia" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > AS - Área da seção a ser retirada por dia (m²)</label>
											<input type="text" class="form-control  " name="area_secao" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > b - Base Menor do Silo (m)</label>
											<input type="text" class="form-control  " name="base_menor" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > B - Base Maior do Silo (m)</label>
											<input type="text" class="form-control  " name="base_maior" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > CS - Comprimento do Silo (m)</label>
											<input type="text" class="form-control  " name="comprimento_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<svg width="400" height="300" viewBox="0 0 100 100" preserveAspectRatio="none">
											<g>
  											<path fill="none" stroke="#000000" stroke-width="2" d="M 15,15 375,	15 295,175 95,175 15,15" />
											</g>
											<text x="140" y="10" font-family="sans-serif" font-size="12px" 	fill="red">Base Maior = </text>
											<text x="230" y="10" font-family="sans-serif" font-size="12px" 	fill="red"> 12</text>
											<text x="140" y="200" font-family="sans-serif" font-size="12px" 	fill="red">Base Menor = </text>
											<text x="230" y="200" font-family="sans-serif" font-size="12px" 	fill="red"> 6</text>
											</svg>
										</div>
                                    </form>
                                </div>
                            </div>
    	  				</div>

    	  				<div class="modal-footer">
					  		<?php if ($email && $senha) {
							?>
							<button type='submit' class='btn btn-green'>Gravar</button>
							</form>
							<button type="button" class="btn btn-green">Imprimir</button>
					  		<?php } ?>
							<button type="button" class="btn btn-green">Fechar</button>
    	  				</div>
  				</div>
			</div>
		</div>

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
  

