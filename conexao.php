<?php

$servidor ="localhost";
$usuario ="admin";
$senha ="admin";
$dbname ="20162290202";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id_usuario, nome FROM Agricultor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - Name: " . $row["nome"] . "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);

?>