<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Origem do Lead</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php"; 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            if(! $_SESSION){
                session_start(); 
            }
    ?>
    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5">Cadastro da Origem do Lead</h1>
                    <form action="procCadOrigemLead.php" method="post">
                        <!-- Material input -->
                        <input type="hidden" name="id">

                        <label for="form1">Origem do Lead</label>
                        <input type="text" id="form1" class="form-control my-2 mb-4" name="origemlead" required>

                        <button class="btn btn-primary btn-block my-1" name="btnCadastrar">Cadastrar</button>
                        <a class="btn btn-light-green btn-block my-2" href="visOrigemLead.php">Listar Origem dos Leads</a>
                    </form>
            </div>
        </div>
    </div>

</body>

</html>