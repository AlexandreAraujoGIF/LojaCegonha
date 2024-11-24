<html>
<head>
<title> Área Restrita </title>
<body bgcolor="#fffdd0">

<br><br><br><br><br><br><br>

<div align="center">  
<div class="row">
  <div class="container login col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-4 col-lg-4">
    <br />
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="title-login">Painel Administrativo</h1>
        <h3>Faça Login para acessar o conteudo</h3>
      </div>
      <div class="panel-body">
        <form method="post">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i
                                        class="glyphicon glyphicon-user" style="width: auto"></i>

                                    </span> <input id="txtUsuario" runat="server" type="text" class="form-control" name="username" placeholder="Usuário" required="" />

            </div>
          </div><br>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"> <i
                                        class="glyphicon glyphicon-lock" style="width: auto"></i>
                                    </span> <input id="txtSenha" runat="server" type="password" class="form-control" name="password" placeholder="Senha" required="" />
            </div>
          </div><br>
          <!--div class="alert lert-danger">
                                <strong>Atenção!</strong> Usuário e/ou senha incorretos.
                            </div-->
          <div>
            <input class="btn btn-xm btn-block btn-entrar" type="submit" value="Entrar" onclick="Login(event)" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<script>

</script>

<script>
function Login(event) {
  event.preventDefault();
  var usuario = document.getElementsByName('username')[0].value;
//  usuario = usuario.toLowerCase();
  var senha = document.getElementsByName('password')[0].value;
  senha = senha.toLowerCase();

  if (usuario == "admin" && senha == "1234") {
    alert("dados corretos");
    window.location = "teste.php";
  }else{
    alert("Dados incorretos, tente novamente");
  }
}
</script>

</head>
</body>
<html>