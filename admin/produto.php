<?php 
    $nome = $_POST['nome'];
    $preco = ($_POST['preco']);
    $connect = mysqli_connect('localhost','root','','site');
    $query_select = "SELECT nome FROM produtos WHERE nome = '$nome' ";
    $select = mysqli_query($connect,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['nome'];

    if($nome == "" || $nome == null){
        echo "<script>alert('Os Campos devem ser preenchidos');window.location.href='teste.php';</script>";
    }else{
        if($logarray == $nome){
            echo "<script>alert('Esse produto já existe');window.location.href='teste.php';</script>"; 
            die();
        }else{
        $query  = "INSERT INTO produtos (nome,preco) VALUES ('$nome','$preco')";
        $insert = mysqli_query($connect,$query);

            if($insert){
              echo "<script>alert('Produto cadastrado com sucesso!');window.location.href='teste.php';</script>";  
            }else{
              echo "<script>alert('Não foi possivel cadastrar esse Produto');window.location.href='teste.php';</script>";
            }
        }
    }
?>