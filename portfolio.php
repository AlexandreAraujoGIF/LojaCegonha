<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Cegonha</title>
<link rel="shortcut icon" type="image/x-icon" href="style/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="style/css/prettyPhoto.css"  />
<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="style/js/carousel.js"></script>
<script type="text/javascript" src="style/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>

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
      <li><a href="cadastro.html"><img src="style/images/icon-user.png" title="Login" /></a><h3><span>Cadastro/Login</span></h3></li><br><br>
      <li><a href="carrinho/index.php"><img src="style/images/cc.png" title="Login" /></a><h3><span>Carrinho</span></h3></li>
    </ul>
    </div>

    
  </div>
  <!-- End Sidebar -->
  
  <!-- Begin Content -->
  <div id="content">
  <h1 class="title">Portfolio</h1>
  <div class="line"></div>
<?php 
    @$login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
            echo"Bem-vindo, $login_cookie<br>";
        }else{
            echo"";
            echo"<h4> Você pode optar por fazer login </h4>";
        }
?><br><div class="line"></div>
  <div class="intro">Conheça os nossos produtos.</div>
    
    
    <!-- Begin Portfolio -->
      <div id="portfolio">
        <ul id="filtering-nav">
          <li><a class="all" href="#all">Todos os Produtos</a></li>
          <li><a class="1" href="#all">Recém Nascido</a></li>
          <li><a class="3" href="#web">1 á 3 Anos</a></li>
          <li><a class="4" href="#photo">4 á 7 Anos </a></li>
          <li><a class="8" href="#video">8 á 12 Anos</a></li><br><br>
          <li><a class="h" href="#video">Higiene e Saúde </a></li>
          <li><a class="brinquedos" href="#video">Brinquedos</a></li>
        </ul>

        <div class="clear"></div>
        
        <div class="items">
          
          <div class="box col4 brinquedos">
          <div class="image">
            <a href="style/images/fotos/23.jpeg" rel="prettyPhoto[portfolio]" title="Bicicleta Dino"><span class="overlay zoom"></span><img src="style/images/fotos/23.jpeg" alt="" /></a>
          </div>
          <h4><a href="#">Bicicleta Dino R$: 350,00</a></h4>
          
          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto1.php">Comprar</a></button>
          </form>          
          </div>

          <div class="box col4 brinquedos">
          <div class="image">
            <a href="style/images/fotos/27.jpeg" rel="prettyPhoto[portfolio]" title="Boneco dos Minions"><span class="overlay zoom"></span><img src="style/images/fotos/27.jpeg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Boneco dos Minions R$:50,00</a></h4>
          <p></p>
          
          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto2.php">Comprar</a></button>
          </form>
          </div>

          <div class="box col4 1">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0015.jpg" rel="prettyPhoto[portfolio]" title="Sapatinho"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0015.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Sapatinho R$: 45,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto3.php">Comprar</a></button>
          </form>

          </div>

          <div class="box col4 1">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0031.jpg" rel="prettyPhoto[portfolio]" title="Kit de mamadeiras-feminino"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0031.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Kit de mamadeiras-feminino R$: 82,00 </a></h4><br>
          <p></p>
          
          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto4.php">Comprar</a></button>
          </form>

          </div>
          
          <div class="box col4 3">
          <div class="image" id="1" name="1">
            <a href="style/images/fotos/IMG-20180224-WA0051.jpg" rel="prettyPhoto[portfolio]" title="Roupão de banho"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0051.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Roupão de banho R$: 125,00</a></h4>
          <p></p><br>
       
          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto6.php">Comprar</a></button>
          </form>
          </div>

          <div class="box col4 4">
          <div class="image" id="2" name="2" >
            <a href="style/images/fotos/IMG-20180224-WA0081.jpg" rel="prettyPhoto[portfolio]" title="Conjunto Masculino"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0081.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Conjunto Masculino R$: 95,00</a></h4>
          <p></p>
          
          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto5.php">Comprar</a></button>
          </form>
          </div>

          <div class="box col4 3">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0088.jpg" rel="prettyPhoto[portfolio]" title="Vestido Feminino"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0088.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Vestido Feminino 80,00</a></h4>
          <p></p>
          
          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto7.php">Comprar</a></button>
          </form>          
          </div>

          <div class="box col4 1">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0057.jpg" rel="prettyPhoto[portfolio]" title="Roupinha de salva-vidas"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0057.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Roupinha de salva-vidas R$: 45,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto8.php">Comprar</a></button>
          </form>       
          </div>

          <br><br>
          <div class="box col4 1">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0090.jpg" rel="prettyPhoto[portfolio]" title="Conjunto Casual"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0090.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Conjunto Social R$: 98,00</a></h4>
          <p></p>

          <form method="POST" action="add9.php" class="carrinho">
          <button><a href="p/produto9.php">Comprar</a></button>
          </form>       
          </div>

          
          <div class="box col4 4">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0093.jpg" rel="prettyPhoto[portfolio]" title="Casaco Jeans"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0093.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Casaco Jeans R$: 50,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto10.php">Comprar</a></button>
          </form>       
          </div>

          <div class="box col4 h">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0075.jpg" rel="prettyPhoto[portfolio]" title="Fralda Turma da monica Tamanho P"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0075.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Fralda Turma da monica Tamanho P R$: 67,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto11.php">Comprar</a></button>
          </form>       
          </div>

          <div class="box col4 h">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0082.jpg" rel="prettyPhoto[portfolio]" title="Fralda Mili Tamanho XG"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0082.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Fralda Mili Tamanho XG R$: 70,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto12.php">Comprar</a></button>
          </form>       
          </div>


<div class="box col4 h">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0073.jpg" rel="prettyPhoto[portfolio]" title="Shampoo, Condicionador e creme de pentar Zoo Pers"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0073.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Shampoo, Condicionador e creme de pentar Zoo Pers R$: 110,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto12.php">Comprar</a></button>
          </form>       
          </div>


<div class="box col4 h">
          <div class="image">
            <a href="style/images/fotos/IMG-20180224-WA0063.jpg" rel="prettyPhoto[portfolio]" title="Kit de mamadeiras"><span class="overlay zoom"></span><img src="style/images/fotos/IMG-20180224-WA0063.jpg" alt="" /></a>
          </div>
          <h4><a href="http://themes.iki-bir.com/caprice/portfolio-post.html">Kit de mamadeiras R$: 40,00</a></h4>
          <p></p>

          <form method="POST" action="add.php" class="carrinho">
          <button><a href="p/produto13.php">Comprar</a></button>
          </form>       
          </div>


        </div>
    <!-- .wrap --> 
<!-- .wrap<div class="line"></div>  -->
    </div>
    <!-- End Portfolio -->
    
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