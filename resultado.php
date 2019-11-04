<h4 align="left">Resultados</h1>
									<hr>
                            <div class="form-row">
				                <div class=" form-group col">
                                    <form>
										<div class="form-group">
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
											<label for="inputtext" > Espessura da fatia a ser retirada diaramente (cm): </label>
											<input type="text" class="form-control" name="espessura_resultado" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > B - Base Maior do Silo (m):</label>
											<input type="text" class="form-control" name="base_maior" placeholder="" readonly="readonly">
										</div>

										<div class="form-group col">
											<label for="inputtext" > CS - Comprimento do Silo (m):</label>
											<input type="text" class="form-control" name="comprimento_silo" placeholder="" readonly="readonly">
										</div>
                                    </form>
                                </div>
                            </div>

                                        <?php if ($email && $senha) {
	?>
		<div class=' form-group col text-center'>
		<button type='submit' class='btn btn-green'>Gravar</button>
		</div>
	<?php
	}else{
	?>
		<div class=' form-group col text-center'>"; 
		<a class='btn btn-green' href='cadastrar.php'>Cadastre-se para gravar resultados</button></a>";
		</div>
	<?php 
	}
	?>