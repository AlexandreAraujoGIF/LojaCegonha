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
    <h1 class="title" >Conjunto Masculino R$: 95,00</h1>
    <div class="line"></div>

<div>
<img src="../style/images/fotos/IMG-20180224-WA0081.jpg" alt="" title="Conjunto Masculino" /></a>
<br><br><br>
    <!-- Begin Form -->
          <div class="form-container">
            <form class="forms" action="adicionar5.php" method="POST">
              <fieldset>
                <ol>
                  <li class="form-row text-input-row">
                    <label>Nome</label>
                    <input type="text" name="name" value="" class="text-input required" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>Email</label>
                    <input type="text" name="email" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>CPF</label>
                    <input type="text" name="cpf" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>CEP</label>
                    <input type="number" name="cep" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>Endereço</label>
                    <input type="text" name="end" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row text-input-row">
                    <label>Numero do Cartão</label>
                    <input type="text" name="nc" value="" class="text-input required email" title="" />
                  </li>
                  <li class="form-row hidden-row">
                    <input type="hidden" name="hidden" value="" />
                  </li>
                  <li class="button-row">
                    <input type="submit" value="Comprar" name="submit" class="btn-submit" />
                  </li>
                </ol>
                <input type="hidden" name="v_error" id="v-error" value="Required" />
                <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
              </fieldset>
            </form>
            <div class="response"></div>
          </div>
        <!-- End Form -->

</div>    

<script>
function Login(event) {
  event.preventDefault();
  var name = document.getElementsByName('name')[0].value;
  name = name.toLowerCase();
  var email = document.getElementsByName('email')[0].value;
  email = email.toLowerCase();
  var cpf = document.getElementsByName('cpf')[0].value;
  cpf = cpf.toLowerCase();
  var cep = document.getElementsByName('cep')[0].value;
  cep = cep.toLowerCase();
  var end = document.getElementsByName('end')[0].value;
  end = end.toLowerCase();
  var nc = document.getElementsByName('nc')[0].value;
  nc = nc.toLowerCase();

  if (name == "" && email == "" && cpf == "" && cep == "" && end == "" && nc == "") {
    alert("Preencha os Campos");
  }else{
    alert("Obrigado pela preferencia, Aguarde a etrega do produto.");
  }
}
</script>

    
<h3></h3><br>
    


    <div class="line"></div> 
    </div>
    <!-- End Content -->
    
</div>
<!-- End Wrapper -->
<div class="clear"></div>
<script type="text/javascript" src="../style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="../style/js/jquery.corner.js"></script>
<!-- <![endif]-->
</body>
</html>