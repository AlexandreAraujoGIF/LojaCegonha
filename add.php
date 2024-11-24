<?php
    $add = $_POST['carrinho'];
    $connect = mysqli_connect('localhost','root','','site');

    $query = "SELECT * FROM produtos";
    $resultado = mysqli_query($connect, $query);
    

header("location:carrinho/index.php");		
?>