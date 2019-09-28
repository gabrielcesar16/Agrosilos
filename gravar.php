<?php

include "conexao.php"; 

if (mysqli_connect_errno())
	echo mysqli_connect_error();

/*
numero_animais    
dias_fornecimento 
consumo_forragem  
altura_silo       
espessura_fatia   
densidade 
        
quantidade_silo   
volume_silo       
volume_dia        
area_secao        
tamanho_base      
base_menor        
base_maior        
comprimento_silo  
*/


$numero_animais = $_REQUEST['numero_animais'];
$dias_fornecimento = $_REQUEST['dias_fornecimento'];
$consumo_forragem = $_REQUEST['consumo_forragem'];  
$altura_silo = $_REQUEST['altura_silo'];       
$espessura_fatia = $_REQUEST['espessura_fatia'];   
$densidade = $_REQUEST['densidade'];         
$quantidade_silo = $_REQUEST['quantidade_silo'];   
$volume_silo = $_REQUEST['volume_silo'];      
$volume_dia = $_REQUEST['volume_dia'];       
$area_secao = $_REQUEST['area_secao'];        
$tamanho_base = $_REQUEST['tamanho_base'];     
$base_menor = $_REQUEST['base_menor'];       
$base_maior = $_REQUEST['base_maior'];       
$comprimento_silo = $_REQUEST['comprimento_silo'];  

/*
echo "numero_animais : $numero_animais<br>";
echo "dias_fornecimento : $dias_fornecimento<br>";
echo "consumo_forragem : $consumo_forragem<br>";
echo "altura_silo : $altura_silo<br>";
echo "espessura_fatia : $espessura_fatia<br>";
echo "densidade : $densidade<br>";
echo "quantidade_silo : $quantidade_silo<br>";
echo "volume_silo : $volume_silo<br>";
echo "volume_dia : $volume_dia<br>";
echo "area_secao : $area_secao<br>";
echo "tamanho_base : $tamanho_base<br>";
echo "base_menor : $base_menor<br>";
echo "base_maior : $base_maior<br>";

	numero_animais = '$numero_animais',
	dias_fornecimento = '$dias_fornecimento',
	consumo_forragem = '$consumo_forragem',
	altura_silo = '$altura_silo',
	espessura_fatia = '$espessura_fatia',
	densidade = '$densidade'

INSERT INTO agricultor VALUES
    (DEFAULT, 'Steve Jobs', 'steve@apple.com', 'steve', '123', 'Apple'),
    (DEFAULT, 'Bill Gates', 'bill@microsoft.com', 'bill', 'qwe', 'Microsoft')
;  

*/



$query = "INSERT INTO calculos 
(
	numero_animais,
	dias_fornecimento,
	consumo_forragem,
	altura_silo,
	espessura_fatia,
	densidade,
	quantidade_silo,   
	volume_silo,  
	volume_dia,        
	area_secao,             
	base_menor,        
	base_maior,        
	comprimento_silo
)
VALUES
(
	'$numero_animais',
	'$dias_fornecimento',
	'$consumo_forragem',
	'$altura_silo',
	'$espessura_fatia',
	'$densidade',
	'$quantidade_silo',   
	'$volume_silo',  
	'$volume_dia',        
	'$area_secao',             
	'$base_menor',        
	'$base_maior',        
	'$comprimento_silo'
)";

mysqli_query($conn, $query);
mysqli_close($conn);

echo $query;

?>

<hr>
<a href="logout.php">Sair</a>
