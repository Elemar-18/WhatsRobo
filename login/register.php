<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acesso ao WhatsRobô - Registrar</title>
    <?php require "../links/links_css.php"; ?>
</head>

<body>
    <?php 
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <div class="container col-md-4 py-5">
    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="procRegUsuario.php" method="POST">

        <h1>Whats<b style="color: aquamarine;">Robô</b></h1>

        <p class="h6 mb-4">Faça o seu cadastro</p>

        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-4" placeholder="Nome Completo" name="nomecompleto">

        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="Email" name="email">

        <!-- Password -->
        <input type="password" id="defaultRegisterFormPassword" class="form-control mb-4" placeholder="Senha" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="senha">
        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Número Telefone" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="numtelefone">
        </small>

        <!-- Newsletter -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
            <label class="custom-control-label my-2" for="defaultRegisterFormNewsletter">Assine a nossa Newsletter</label>
        </div>

        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit" name="regUsuario">Registrar</button>

        <!-- Social register -->
        <p>ou inscreva-se com:</p>

        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

        <hr>

        <!-- Terms of service -->
        <p>Você clicando em 
            <em>Logar</em> você concorda com os nossos 
            <a href="" target="_blank">Termos de Serviço</a>

    </form>
    <!-- Default form register -->
    </div>

    <?php require "../links/links_js.php"; ?>
</body>

</html>