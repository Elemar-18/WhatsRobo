<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acesso ao WhatsRobô - Login</title>
    <?php require "../links/links_css.php"; ?>
</head>

<body>
    <div class="container col-md-4 py-5">
        <!-- Default form login -->
        <form class="text-center border border-light p-5" action="valida.php" method="POST">

            <h1>Whats<b style="color: aquamarine;">Robô</b></h1>

            <p class="h6 mb-4">Informe seus dados para entrar</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Email" name="email">

            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Senha" name="senha">

            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Lembrar Me</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="" class="blue-text">Esqueceu a Senha?</a>
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Logar</button>

            <!-- Register -->
            <p>Não é um membro?
                <a href="../login/register.php">Cadastre-se</a>
            </p>

            <!-- Social login -->
            <p>ou entre com:</p>

            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

        </form>
        <!-- Default form login -->
    </div>
</body>
<?php require "../links/links_js.php"; ?>

</html>