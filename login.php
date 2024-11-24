<?php  
	@$login  = $_POST['login'];
	$entrar = $_POST['entrar'];
  @$senha  = MD5($_POST['senha']);
    $connect = mysqli_connect('localhost','root','','site');

    if (isset($entrar)) {
    $select = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
    $verifica = mysqli_query($connect, $select);
      
      	if (mysqli_num_rows($verifica) <=0) {
      		echo "<script>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
      		die(); 
      	}else{
      		setcookie("login",$login);
      		header("location:portfolio.php");
      	}

    }
?>