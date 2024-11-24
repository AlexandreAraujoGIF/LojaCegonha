<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Cegonha</title>

</head>

<body>

<!-- Begin Wrapper -->
<div id="wrapper">
    <!-- Begin Sidebar -->
    <div id="sidebar">
         <div id="logo"><a href="index.php"><img src="style/images/logo.png" alt="Caprice" /></a></div>
         
    <!-- Begin Menu -->
    <div id="menu" class="menu-v">
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="portfolio.php">Produtos</a></li>
        <li><a href="typography.php">Sobre</a></li>
        <li><a href="contact.php">Contatos</a></li>
      </ul>
    </div>
    <!-- End Menu -->
   
    
    <div class="sidebox">
    <ul class="share">
        <li><a href="cadastro.php"><img src="style/images/icon-user.png" title="Login" /></a></li>
        <li><a href="#"><img src="style/images/cc.png" title="Carrinho" /></a></li>
    </ul>
    </div>

    
    </div>
    <!-- End Sidebar -->
    
    <!-- Begin Content -->
    <div id="content">
    <h1 class="title" >Crie uma Conta</h1>
    <div class="line"></div>

    <div id="cadastro">
    <form method="POST" action="cadastro.php">
        <label>Usuario:</label><input type="text" name="usuario" id="usuario"> <br><br>
        <label>Senha:</label><input type="password" name="senha" id="senha"> <br><br>
        <label>Email:</label><input type="text" name="email" id="email"> <br><br>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>
    </div>

    </div>
    <div class="line"></div> 
    </div>
    <!-- End Content -->
    
</div>
<!-- End Wrapper -->
<div class="clear"></div>
<script type="text/javascript" src="style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="style/js/jquery.corner.js"></script>
<!-- <![endif]-->
</body>
</html>


<?php 
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $connect = mysqli_connect('localhost','root','');
    $db = 'site';
    $query_select = "SELECT usuario FROM usuarios WHERE usuario = '$usuario' ";
    $select = mysqli_query($query_select,$connect);
    $array = mysqli_fatch_array($select);
    $logarray = $array['usuario'];

    if($usuario == "" || $usuario == null){
        echo "<script>alert('O campo de login deve ser preenchido');window.location.href='cadastro.php';</script>";
    }else{
        if($logarray == $login){
        echo "<script>alert('Esse login já existe');window.location.href='cadastro.php';</script>"; die();
        }else{
        $query  = "INSERT INTO usuarios (usuario,senha,email) VALUES ('$usuario,$senha,$email')";
        $insert = mysqli_query($query,$connect);

            if($insert){
              echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='admin/index.php';</script>";  
            }else{
              echo "<script>alert('Não foi possivel cadastrar esse usuário');window.location.href='cadastro.php';</script>";
            }
        }
    }
?>