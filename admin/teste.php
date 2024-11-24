<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Cegonha</title>
<link rel="shortcut icon" type="image/x-icon" href="../style/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="../style.css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="../style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="../style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="../style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="../style/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="../style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="../style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="../style/js/carousel.js"></script>
<script type="text/javascript" src="../style/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="../style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="../style/js/jquery.slickforms.js"></script>
</head>

<body>

<!-- Begin Wrapper -->
<div id="wrapper">
    <!-- Begin Sidebar -->
    <div id="sidebar">
         <div id="logo"><a href="../index.php"><img src="../style/images/logo.png" alt="Caprice" /></a></div>
         
    <!-- Begin Menu -->
    <div id="menu" class="menu-v">
      <ul>
        <li><a href="../index.php" class="active">Home</a></li>
        <li><a href="../portfolio.php">Produtos</a></li>
        <li><a href="../typography.php">Sobre</a></li>
        <li><a href="../contact.php">Contatos</a></li>
      </ul>
    </div>
    <!-- End Menu -->
   
    
    <div class="sidebox">
    <ul class="share">
        <li><a href="../cadastro.php"><img src="../style/images/icon-user.png" title="Login" /></a><h3><span>Cadastro/Login</span></h3></li><br><br>
       <li><a href="../carrinho/index.php"><img src="../style/images/cc.png" title="Carrinho" /></a><h3><span>Carrinho</span></h3></li>
        
    </ul>
    </div>

    
    </div>
    <!-- End Sidebar -->
    
    <!-- Begin Content -->
    <div id="content">
    <h1 class="title" >Bem vindo a area Administrativa</h1>
    <div class="line"></div>

<h3>Lista de Usuarios</h3>
<button><a href="lusers.php">Usuarios cadastrados</a></button><br><br><br>
    <div class="line"></div><br><br>

<h3>Upload de Produtos</h3><br>
<h4>Envie a Imagem do Produto</h4><br>

<form method="post" action="reecbe_upload.php" enctype="multipart/form-data">
<label>Arquivo:</label>
<input type="file" name="arquivo" />
<input type="submit" value="Enviar" />
</form><br><br>
 


    <form method="POST" action="produto.php">
        <label>Nome:</label><input type="text" name="nome" id="nome">
        <label>Preço:</label><input type="text" name="preco" id="preco">

        <label>Categoria</label>
        <select name="select-list" class="select" title="">
        <option value="#"></option>
        <option value="1">Recém Nascido</option>
        <option value="3">1 á 3 Anos</option>
        <option value="4">4 á 7 Anos</option>
        <option value="8">8 á 12 Anos</option>
        <option value="h">Higiene e Saúde</option>
        <option value="brinquedos">Brinquedos</option>
        </select>        

        <input type="submit" value="Enviar" id="enviar" name="enviar">

    </form>
<br><br><br><br><br><br><br><br>
<div align="right"><button><a href="../index.php">Sair</a></button></div>

    </div>
<form></form>    

    <div class="line"></div> 
    </div>
    <!-- End Content -->

<script>
function Login(event) {
alert("Logout Efetuado com Sucesso!");
</script>    

</div>
<!-- End Wrapper -->
<div class="clear"></div>
<script type="text/javascript" src="../style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="../style/js/jquery.corner.js"></script>
<!-- <![endif]-->
</body>
</html>