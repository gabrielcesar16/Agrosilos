<?php

include "conexao.php";

session_start();

$id = $_REQUEST['id'];
// echo "nome: $id<br>";

$query = "SELECT * FROM mensagem where id = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



?>

<html>
<head>
  <title>Silagem</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<?= $row["nome"] ?>


  <?php
        include 'navbar.php';
   ?>

        
    <div class="container">
		<div class="card" style="width: 100%; margin-top: 50px">
		  <!--<img src="..." class="card-img-top" alt="...">-->
		  <div class="card-body">
            <h4 class="card-title">Visualizar mensagem</h4>


            <form method="post" action="mensagem.php">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" value="<?= $row["nome"] ?>">
                    <br>
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $row["email"] ?>">
                    <br>
                    <label for="mensagem">O que você tem em mente?</label>
                    <textarea class="form-control" name="mensagem" value="" rows="5">
                    <?= $row["mensagem"] ?>
                    </textarea>
                    <br>
                </div>
            </form>
            </div>
      	            

          </div>      
        </div>
    </div>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    <?php
        include 'footer.php';
        mysqli_close($conn);
	  ?>



    <link rel="stylesheet" href="css/estilo2.css">
		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

</body>
</html>
