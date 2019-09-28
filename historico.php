<html>
	<head>
		<title>Silagem</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>

<?php
	include "conexao.php"; 
	include "navbar.php";
					
					
	$query = "SELECT * FROM calculos";
	$result = $conn->query($query);

?>
		
		<br>
		<br>
		
		<div class="container">
			<div class="row">
			<div class="col-md-12 text-center">
			<div class="container">	

			<h4 align="left">Histórico</h1>
			<hr>

            <div class="table-responsive-lg">
             <table class="table">
             <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Número de Animais</th>
                <th scope="col">Dias de Fornecimento</th>
                <th scope="col">Consumo por dia</th>
                <th scope="col">Altura do Silo</th>
                <th scope="col">Espessura diaria</th>
                <th scope="col">Densidade considerada</th>
                <th scope="col">Quantidade de silagem </th>
                <th scope="col">Volume do silo</th>
                <th scope="col">Volume diário</th>
                <th scope="col">Área da seção</th>
                <th scope="col">Base menor</th>
                <th scope="col">Base Maior</th>
                <th scope="col">Comprimento do Silo</th>
             </tr>
             </thead>
            <tbody>
            
            
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
    	echo "<tr><th scope=\"row\">" . date("d/m/Y", strtotime($row["data"])) . "</th>";
        echo "<td>" . $row["numero_animais"] . "</td>";
        echo "<td>" . $row["dias_fornecimento"] . "</td>";
        echo "<td>" . $row["consumo_forragem"] . "</td>";
        echo "<td>" . $row["altura_silo"] . "</td>";
        echo "<td>" . $row["espessura_fatia"] . "</td>";
        echo "<td>" . $row["densidade"] . "</td>";
        echo "<td>" . $row["quantidade_silo"] . "</td>";
        echo "<td>" . $row["volume_silo"] . "</td>";
        echo "<td>" . $row["volume_dia "] . "</td>";
        echo "<td>" . $row["area_secao"] . "</td>";
        echo "<td>" . $row["base_menor"] . "</td>";
        echo "<td>" . $row["base_maior"] . "</td>";
        echo "<td>" . $row["comprimento_silo"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}



	
	$conn->close();
?>
            
           </tbody>
             </table>
            </div>
