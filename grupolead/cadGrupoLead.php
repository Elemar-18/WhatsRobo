<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Grupo do Lead</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php";
    if (isset($_SESSION['msg'])) {
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
                <h2 class="font-weight-bold text-center my-5">Cadastro do Grupo de Lead</h1>
                    <form action="procCadGrupoLead.php" method="post">

                        <input type="hidden" name="id">
                        
                        <label for="form1">Grupo do Lead</label>
                        <input type="text" id="form1" class="form-control my-2" name="grupolead" required'>

                        <label for="form7">Descrição do Grupo</label>
                        <textarea id="form7" class="md-textarea form-control my-2 mb-3" rows="3" name="descricao" required></textarea>

                        <button class="btn btn-primary btn-block" name="btnCadastrar">Cadastrar</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>