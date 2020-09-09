<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <?php require "../links/links_css.php"; 
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
    ?>
</head>
<body>
<form action="procEsqueciSenha.php" method="post">
<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Esqueceu a Senha</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <p>Nós enviaremos um link para você para a redefinição da senha.</p>
        <p><strong>Cuidado: </strong>O link tem prazo limitado e pode expirar.</p>
        <div class="mb-5">
          <label data-error="wrong" data-success="right" for="form2">Seu Email</label>
          <input type="email" id="form2" class="form-control validate" placeholder="Digite o email cadastrado" name="email">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default" type="submit">Enviar</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php require "../links/links_js.php"; ?>    
</body>
</html>