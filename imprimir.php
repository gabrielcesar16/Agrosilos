<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <style type="text/css">
       
       
       body *
        {
            font-size: 24px !important;
            color: #000;
            font-family: Arial !important;
        }

        .dropdown-item *
        {
          
          color: black !important;
          font-family: Arial !important;

        }
        
        .info *
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

        @media print
        {    
          .no-print, .no-print *
        {
          display: none !important;
        }
}

        </style>		
   
  </head>
  <br>
  <div class='no-print' style="color:white">
      <div style="text-align: center;">
      <a href="calculadora.php" class="btn btn-success btn-lg" style="color:white" role="button" aria-disabled="true">Voltar</a>
      </div>
  </div>
  
  <body onload="window.print()">
  
  <?php
	session_start();
  include "conexao.php"; 

  $email = $_SESSION["email"];
  $senha = $_SESSION["senha"];
					
	$query = "SELECT * FROM calculos where usuario_id=".$_SESSION['id']." order by data desc;";
  $result = $conn->query($query);
  $row = mysqli_fetch_assoc($result);
  
  $nquery = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";
  $nresult = mysqli_query($conn, $nquery);
  $nrow = mysqli_fetch_assoc($nresult);

?>

	

                <h1> 
                <img src="images/logo.svg" width="60" height="60" class="d-inline-block align-top" alt=""></img>
                Agro Silos</h1>
                <hr>
                <br>
                <h4>Usuario : <?= $nrow["nome"] ?></h4>
                   <h4>Propriedade : <?= $nrow["propriedade"] ?></h4><br>
    				<h4 align="left">Resultados</h4>
            <br>

          <table border=1 style="width:100%">
            <tr>
              <th>Quantidade de silagem(kg)</th>
              <td><?= $row["quantidade_silo"] ?></td>
            </tr>
            <tr>
              <th>VS - Volume do silo (m³)</th>
              <td><?= $row["volume_silo"] ?></td>

              </th>
            </tr>
            <tr>
              <th>VD - Volume diário (m³)</th>
              <td><?= $row["volume_dia"] ?></td>

            </tr>
            <tr>
              <th>AS - Área da seção a ser retirada por dia (m²)</th>
              <td><?= $row["area_secao"] ?></td>
            </tr>

            <tr>
              <th>b - Base Menor do Silo (m)</th>
              <td><?= $row["base_menor"] ?></td>
            </tr>

            <tr>
              <th>B - Base Maior do Silo (m)</th>
              <td><?= $row["base_maior"] ?></td>
            </tr>

            <tr>
              <th>C - Comprimento do Silo (m)</th>
              <td><?= $row["comprimento_silo"] ?></td>
            </tr>





          </table>

          <br>
                    <div class="form-group">
										<div class="separator"></div>
											<div class="set" style="width: 40%; height: 50%; border: 0px solid #aaa; position: relative; left:50%; margin-left:-20%;">
											  <img src="images/silo.png" style="width: 100%;">
											  <div class="chart chart_base_maior"><?= $row["base_maior"] ?></div>
											  <div class="chart chart_base_menor "  style="top: 185%;   width: 68px;
"><?= $row["base_menor"] ?></div>
											  <div class="chart chart_comprimento_silo" style="top: 40%; left:-5%;"><?= $row["comprimento_silo"] ?></div>
											  <div class="chart chart_altura_silo" style="top: 110%; left:100%;";><?= $row["altura_silo"] ?></div>
											</div>
                    </div>
                    
                    <div class="info">
                    <p style=" color:black; font-size: 10px; display:inline; font-weight: bold;" > B - Base maior do silo</p><br>
										<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" >H - Altura do silo</p><br>
										<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" > b - Base menor do silo</p><br>
										<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" > AS  - Area da seção do silo</p><br>
                    <p style=" color:black; font-size: 10px; display:inline; font-weight: bold" > C - Comprimento do silo</p><br>
                  </div>

           
            <?php
              $conn->close();
            ?>
                    
        
        
        
    <link rel="stylesheet" href="css/estilo2.css">
		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </body>
    
    
</html>
  

