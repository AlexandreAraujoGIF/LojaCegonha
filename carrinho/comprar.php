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

$sql = "DELETE FROM carrinho";

if (mysqli_query($conn, $sql)) {
    echo "Obrigado pela Preferencia. Aguarde a entrega do produto<script>window.location.href='index.php';</script> ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>