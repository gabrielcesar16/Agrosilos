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
    <div class="container">
		<div class="card" style="width: 100%; margin-top: 50px">
		  <!--<img src="..." class="card-img-top" alt="...">-->
		  <div class="card-body">
            <h4 class="card-title">Entre em contato</h4>
            <form method="post" action="mensagem.php">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="">
                    <br>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="">
                    <br>
                    <label for="mensagem">O que você tem em mente?</label>
                    <textarea class="form-control" name="mensagem" rows="5"></textarea>
                    <br>
                    <button type='submit' class='btn btn-green'>Enviar</button>
                </div>
            </form>
            </div>
          </div>      
        </div>
    </div>
    

    </body>

    <div class="" style="
 		position: absolute;
  		bottom: 0;
  		width: 100%;
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
</html>
