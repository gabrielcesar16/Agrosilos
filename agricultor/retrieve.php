<?php

include "conexao.php";
include "menu.php";

$sql = "SELECT id, nome FROM agricultor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["id"] . ' - '; 
		echo "<a href=\"detail.php?id=" . $row["id"] . "\">" . $row["nome"] . "</a>";
		echo "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
