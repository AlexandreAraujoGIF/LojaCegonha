<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO carrinho (nome, preco)
VALUES ('Bicicleta Dino', '350')";

if (mysqli_query($conn, $sql)) {
    echo "Produto Adicionado ao Carrinho<script>window.location.href='../carrinho/index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>