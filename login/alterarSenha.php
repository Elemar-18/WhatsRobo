<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WhatsRobo - Alterar Senha</title>
  <?php require "../links/links_css.php"; ?>
</head>
<body>
  <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    session_start();
    include_once '../conexao/db_conexao.php';

    if(isset($_GET['token']) && isset($_GET['email']) && isset($_GET['action'])
        && ($_GET["action"]=="reset") && !isset($_POST["action"])){
            $token = $_GET["token"];
            $email = $_GET["email"];
            $curDate = date("Y-m-d H:i:s");
            $sql = mysqli_query($conn, "select * from password_reset_temp where token='$token' and email='$email'");
            $row = mysqli_num_rows($sql);

            if($row==""){
                $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Link Inválido. 
                <a href='http://localhost/WhatsRobo/login/esqueciSenha.php'>Clique aqui</a> para alterar sua senha!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            } else {
                $row = mysqli_fetch_assoc($sql);
                $expDate = $row['expDate'];
                if($expDate >= $curDate):
  ?>
  <div class="container col-md-4 py-5">
    <!-- Início Formulário -->
        <form class="text-center border border-light p-5" action="procAltSenha.php" method="POST">

            <h1>Whats<b style="color: aquamarine;">Robô</b></h1>

            <p class="h6 mb-4">Alterar a Senha</p>
      
            <!-- Campo para atualização dos dados-->
            <input type="hidden" name="action" value="update"/>

            <!-- Nova Senha -->
            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Nova Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="novaSenha">

            <!-- Confirmar Nova Senha -->
            <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Confirmar Nova Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="confirmarNovaSenha">

            <!-- Campo email oculto para atualização dos dados-->
            <input type="hidden" name="email" value="<?php echo $email;?>">

            <!-- Botão Alterar Senha -->
            <button class="btn btn-info my-4 btn-block" type="submit" name="btnAltSenha">Alterar Senha</button>
        </form>
    <!-- Fim Formulário -->
  </div>
  <?php 
                else:
                  $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Link Expirado. 
                  Você está tentando usar um link expirado que só fica válido durante 24 horas (1 dia).
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
                endif;
      } 
    }
  
  require "../links/links_js.php"; ?>
</body>
</html>