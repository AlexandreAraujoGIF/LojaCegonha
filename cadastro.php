<?php 
    @$login = $_POST['login'];
    @$senha = MD5($_POST['senha']);
    $connect = mysqli_connect('localhost','root','','site');
    $query_select = "SELECT login FROM usuarios WHERE login = '$login' ";
    $select = mysqli_query($connect,$query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];

    if($login == "" || $login == null){
        echo "<script>alert('O campo de login deve ser preenchido');window.location.href='cadastro.html';</script>";
    }else{
        if($logarray == $login){
            echo "<script>alert('Esse login já existe');window.location.href='cadastro.html';</script>"; 
            die();
        }else{
        $query  = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect,$query);

            if($insert){
              echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='login.html';</script>";  
            }else{
              echo "<script>alert('Não foi possivel cadastrar esse usuário');window.location.href='cadastro.html';</script>";
            }
        }
    }
?>