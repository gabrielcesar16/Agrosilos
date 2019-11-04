<?php
	    include "permissao_admin.php"; 
    ?>

<html>
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>

    <?php
	    include "conexao.php"; 
	    include "navbar.php";				
	    $query = "SELECT * FROM mensagem";
	    $result = $conn->query($query);
    ?>
	<br>
    <div class="col text-center">
        <h4 align="left">Mensagens</h1>
            <div class="table-responsive-sm">
                <table class="table table-hover table-sm  table-bordered table-striped ">
                    <thead class=>
                        <tr align="center" valign="center" float="center">
                
                            <th scope="col">Data</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mensagem</th>
                        </tr>
                    </thead>
                <tbody>
<!--
id INTEGER NOT NULL AUTO_INCREMENT, 
nome VARCHAR(64),
email VARCHAR(64),
mensagem TEXT,
-->
    <?php
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
    	    echo "<tr align='center' valign='center'><th scope=\"row\">" . date(" H:i - d/m/Y", strtotime($row["data"])) . "</th>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["mensagem"] . "</td>";
            echo "<td><a style='color: red;' href='deletar_mensagem.php?id=" . $row["id"] . "'>✕</a></td>";
            echo "<td><a style='color: green;' href='visualizar_mensagem.php?id=" . $row["id"] . "'>→</a></td>";
            echo "</tr>";
        }
        } else {
            echo "Sem resultados";
        }
	    $conn->close();
    ?>
        </tbody>
        </table>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
            
