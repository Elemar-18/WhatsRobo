<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Grupo do Lead</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php";
    include_once "../conexao/db_conexao.php";
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if (isset($_GET['id'])) {
        $id = mysqli_escape_string($conn, $_GET['id']);
        $sql = "select id, grupolead, descricao from grupolead where id = '$id'";
        $resultado = mysqli_query($conn, $sql);
        $dados = mysqli_fetch_array($resultado);
    }
    ?>

    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5">Editar Grupo de Lead</h1>
                <form action="procEdtGrupoLead.php" method="post">
                    <!-- Material input -->
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                    <label for="form1">Grupo do Lead</label>
                    <input type="text" id="form1" class="form-control my-2" name="grupolead" value="<?php echo $dados['grupolead']; ?>">

                    <label for="form7">Descrição do Grupo</label>
                    <textarea id="form7" class="md-textarea form-control my-2 mb-3" rows="3" name="descricao"><?php echo $dados['descricao'];?></textarea>

                    <button class="btn btn-primary btn-block" type="submit" name="btnAtualizar">Atualizar</button>
                    <a class="btn btn-light-green btn-block my-2" href="visGrupoLead.php">Listar Grupo dos Leads</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>