<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <style type="text/css">
        html *
        {
            font-size: 24px !important;
            color: #000 !important;
            font-family: Arial !important;
        }
        table *
        {
          font-size: 18px !important;
          color: #000 !important;
          font-family: Arial !important;

        }

        .center {
          padding: 70px 0;
          border: 3px solid green;
          text-align: center;
        }

        </style>		

	</head>

	<body>
  
  <?php
	  include "conexao.php"; 
    include "permissao_agricultor.php";

					
					
	$query = "SELECT * FROM calculos where usuario_id=".$_SESSION['id'].";";
	$result = $conn->query($query);

?>

	<br>
	<br>
		
                <h1> 
                <img src="images/logo.svg" width="60" height="60" class="d-inline-block align-top" alt=""></img>
                Agro Silos</h1>
                <hr>
                <br>
                <h4>Usuario : Joao Silva</h4>
                   <h4>Propriedade : Azul</h4><br>
    				<h4 align="left">Resultados</h4>
            <br>
            <?php

/*
    numero_animais INTEGER DEFAULT 0,
    dias_fornecimento INTEGER DEFAULT 0,
    consumo_forragem INTEGER DEFAULT 0,
    altura_silo INTEGER DEFAULT 0,
    espessura_fatia FLOAT DEFAULT 0.0,
    densidade INTEGER DEFAULT 0,

    quantidade_silo FLOAT DEFAULT 0.0,
    volume_silo FLOAT DEFAULT 0.0,
    volume_dia FLOAT DEFAULT 0.0,
    area_secao FLOAT DEFAULT 0.0,
    tamanho_base FLOAT DEFAULT 0.0,
    base_menor FLOAT DEFAULT 0.0,
    base_maior FLOAT DEFAULT 0.0,
    comprimento_silo FLOAT DEFAULT 0.0,
    */

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td>" . $row["numero_animais"] . "</td>";
        echo "<td>" . $row["dias_fornecimento"] . "</td>";
        echo "<td>" . $row["consumo_forragem"] . "</td>";
        echo "<td>" . $row["altura_silo"] . "</td>";
        echo "<td>" . $row["espessura_fatia"] . "</td>";
        echo "<td>" . $row["densidade"] . "</td>";
        echo "<td>" . $row["quantidade_silo"] . "</td>";
        echo "<td>" . $row["volume_silo"] . "</td>";
        echo "<td>" . $row["volume_dia"] . "</td>";
        echo "<td>" . $row["area_secao"] . "</td>";
        echo "<td>" . $row["base_menor"] . "</td>";
        echo "<td>" . $row["base_maior"] . "</td>";
        echo "<td>" . $row["comprimento_silo"]. "</td>";
        echo "<td><a style='color: red;' href='deletar_calculo.php?id=" . $row["id"] . "'>✕</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}



	
	$conn->close();
?>
                    <br>
                    <div class="form-group">
										<div class="separator"></div>
											<div class="set" style="width: 40%; height: 50%; border: 1px solid #aaa; position: relative; left:50%; margin-left:-20%;">
											  <img src="images/silo.png" style="width: 100%;">
											  <div class="chart chart_base_maior">0</div>
											  <div class="chart chart_base_menor">0</div>
											  <div class="chart chart_comprimento_silo">0</div>
											  <div class="chart chart_altura_silo">0</div>
											</div>
										</div>
        
        
        
    		<link rel="stylesheet" href="css/estilo2.css">
		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  	</body>
</html>
  

