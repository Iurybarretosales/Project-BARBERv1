
<?php 
 // incluindo arquivo de conexao
  include_once('conexao.php');
    //verificando se existe os post TELEFONE E SENHA 
  if(isset($_POST['telefone']) || isset($_POST['senha'])) {
    // verificando se os campos foram completados 
    if (strlen($_POST['telefone'] == 0)){
      echo "Preencha seu telefone!";
    } else if (strlen($_POST['senha'] == 0)) {
       echo "Preencha sua senha";
    } else {
  
      //limpando string das variaveis por segurança
      $telefone = $mysqli->real_escape_string(($_POST['telefone']));
      $senha = $mysqli->real_escape_string(($_POST['senha']));

      // criando codigo de consulta sql
      $mysqli_code = "SELECT * FROM usuario_sistemas WHERE telefone = '$telefone' AND senha = '$senha' ";

      // criando query para capturar dados do banco
      $mysqli_query = $mysqli->query($mysqli_code) or die("Falha na execução ". $mysqli->error);

      // variavel de controle de quantidade de linhas do banco de dados 
      $quantidade = $mysqli_query->num_rows;

      // verificando de a quantidade de lkinhas é igual a 1
      if ($quantidade == 1){
        $usuario = $mysqli_query->fetch_assoc();

        //verificando se nao existe sessao
        if(!isset($_SESSION)) {
          //startano uma sessao
          session_start();
        } 

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['Nome'];


      }else {
        echo"Falha ao logar! TELEFONE OU SENHA INCORRETO";
      }
    }

        
        
       
       
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body class="hold-transition login-page" cz-shortcut-listen="true"><div id="in-page-channel-node-id" data-channel-name="in_page_channel_sSkRZe"></div>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AGENDA SERVIÇO</title>
  <link rel="icon" type="image/x-icon" href="../../dist/img/favicon.png">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="style_index.css">
 

  <div class="login-box">

    <div class="card card-outline card-dark">
      <div class="card-header text-center">
        <a class="h1"><b>Faça seu login</b></a><b>
      </b></div><b>
      <div class="card-body">

        <form role="form" action="" method="POST">
          <div class="input-group mb-3">
            <input type="tel" id="telefone" name="telefone" value="" class="form-control" placeholder="Telefone" required="">
            <script>
              document.getElementById('telefone').addEventListener('input', function(e) {
                var aux = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
                e.target.value = !aux[2] ? aux[1] : '(' + aux[1] + ')' + aux[2] + (aux[3] ? '-' + aux[3] : '');
              });
            </script>
            <div class="input-group-append">
              <div class="input-group-text">
                <i class="fa fa-mobile" aria-hidden="true"></i>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" id="senha" name="senha" value="" class="form-control" placeholder="Senha" required="">
            <div class="input-group-append">
              <div class="input-group-text">
                <input style="margin-left:10px" type="checkbox" onclick="showCampo()"> <span style="margin-left:10px"></span>
                <i class="fa fa-eye" aria-hidden="true"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" name="login" class="btn btn-dark btn-block">Entrar</button>
            </div>
          </div>
        </form>

      </div>
    </b></div><b>
  </b></div><b>




<script>
  function showCampo() {
    var x = document.getElementById("senha");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script></b>
</body>
</html>