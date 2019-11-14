

<html>
<head>
  <title>Silagem</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<br>
<br>

    <?php
        include 'navbar.php';
    ?>
    <br>
    <div class="container">
    <h3 >Como utilizar a calculadora de silo trincheira Agrosilos</h3>
			<br>
			<div class="container">
				<h4>Primeiro Passo:</h4>
				<p align="justify">A tela inicial apresenta no lado esquerdo os campos que deve fornecidos, incialmente forneça os valores aos campos: </p>
                <img src="images/ajuda1.png" alt="imagen selecionar" class="img-fluid rounded mx-auto d-block">
                <p align="justify"> O campo "Altura do Silo" tem um valor mínimo de <b>"2m"</b> e um valor máximo de <b>"4m"</b> equanto que o campo "Espessura da fatia a ser retirada diariamente" apresenta um valor mínimo de <b>"0,15m"</b>.</p>
				<br>
				<h4>Segundo Passo:</h4>
				<p align="justify">O resultado, sera exibido nos campos do lado direito da página principal</p>
				<img src="images/ajuda2.png" alt="imagem qtd" class="img-fluid rounded mx-auto d-block">
				<br>
				<h4>Terceiro Passo:</h4>
                <p align="justify">É necessário se cadastrar para gravar os resultados de um dimensionamento, o botão abaixo na página, pode leva-o a página de cadastro:</p><br>
                <div class=' form-group col text-center'>
                <a class='btn btn-green text-align-center' href='cadastrar.php'>Cadastre-se</button></a>
                </div>
                <br>
                <p align="justify">Já cadastrado e logado clique no botão "gravar" na pagina principal para salvar os resultados do dimensionamento no histórico:</p><br>
                <img src="images/ajuda3.png" alt="img nucleo" class="img-fluid rounded mx-auto d-block">
				<h4>Quarto Passo:</h4>
				<p align="justify">Na barra superior selecione a seção de histórico(essa é uma opção disponível somente a usuários logados):</p>
				<img src="images/ajuda4.png" alt="img nucleo" class="img-fluid rounded mx-auto d-block">
				<br>

				<h4>Ultimo Passo:</h4>
				<p align="justify">O histórico apresenta todos os campos preenchidos e recebidos em forma de tabela assim como também a data e hora que um cálculo foi realizado:</p>
				<img src="images/ajuda5.png" alt="botão" class="img-fluid rounded mx-auto d-block">
                <br>
                <br>
                <p align="justify">Para excluir um registro de cálculo na tabela, clique na cruz em vermelho no final de cada linha:</p>
                <br>
                <img src="images/ajuda6.png" alt="botão" class="img-fluid rounded mx-auto d-block">
                <br>
                <h4>Final:</h4>
                <p align="justify"> Esperamos que sua experiência com esse software seja a melhor possivél, caso encontre algum probelma, ou tenha outras ideias para o software, utilize o botão abaixo para nos contatar, nós ficariamos felizes em ouvir sua opinião!. </p>
                <br>
				<div class=' form-group col text-center'>
                <a class='btn btn-green text-align-center' href='contato.php'>Contato</button></a>
                </div>
				<br>
			</div>
			<br>
		</div>

        <div class="" style="
        	position: bottom;
        	width: 100%;
        	top: 100%;
    		">						
			<?php
				include 'footer.php';
			?>
			</div>

    <link rel="stylesheet" href="css/estilo2.css">
		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>


</body>
</html>
