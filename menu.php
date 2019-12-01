<html>
<head>
  <title>Silagem</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  html, body {
    max-width: 100%;
    overflow-x: hidden;
  }
  </style>
}

    
</head>
<body style="background-color:#558114">

  <?php
        include 'navbar.php';
   ?>
    
    <br>
    <br>
    
    <div class="row">
			<div class="col-md-12 text-center">
			    <div class="container">
                <div class="container">
                    <div class="row">
                      <div class="col">
                        <a href="calculadora.php" style= "color:white; font-style:bold; font-size:22px;">
                          <img src="images/calculadora.svg" class="img-fluid" alt="HTML tutorial" style="width:130px;height:130px;border:1px;">
                          <br>
                          <br>
                          <p>Calculadora</p>
                        </a> 
                      </div>
                        <div class="col">
                        <a href="historico.php" style= "color:white; font-style:bold; font-size:22px;">
                          <img src="images/historico.svg" class="img-fluid" alt="HTML tutorial" style="width:130px;height:130px;border:1px;">
                          <br>
                          <br>
                          Histórico
                          <?php if ($email & $senha){
                          ?>
                          </li>
                          <?php
                           }else{
                          ?>
                         <p style=" color:white; font-size: 11px;" >*dispónivel somente para usuários cadastrados</p>
                          <?php
                           }?>
                          <br>
                          <br>
                          <br>
                        </a>
                        </div>
                        
                        <div class="container">
                        <div class="row">
                        <div class="col">
                        <a href="ajuda.php" style= "color:white; font-style:bold; font-size:22px;">
                          <img src="images/ajuda.svg" class="img-fluid" alt="HTML tutorial" style="width:130px;height:130px;border:1px;">
                          <br>
                          <br>
                          Ajuda
                        </a>
                        </div>
                        <div class="col">
                        <a href="contato.php" style= "color:white; font-style:bold; font-size:22px;">
                          <img src="images/contato.svg" class="img-fluid" alt="HTML tutorial" style="width:130px;height:130px;border:1px;">
                          <br>
                          <br>
                          Contato
                        </a>
                        </div>
                    </div>
                    
                    <hr size="20">

                    <a href="sobre.php" style= "color:white; font-style:bold; font-size:16px;">
                    Sobre nós
                    </a>
      
    </div>
    </div>
    </div>
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
