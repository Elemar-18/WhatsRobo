<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Mensagens</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php";
          include_once "../conexao/db_conexao.php";
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    if(isset($_GET['id'])){
        $id = mysqli_escape_string($conn, $_GET['id']);
        $sql = "select id, modelo, descricao, upload, sequencia from mensagem where id = '$id'";
        $resultado = mysqli_query($conn, $sql);
        $dados = mysqli_fetch_array($resultado);
    }

    ?>

    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5">Cadastro de Mensagens</h1>
                    <form action="procEdtMensagem.php" method="post" enctype="multipart/form-data">
                    <!-- Material input -->
                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                    <label for="form1">Modelo da Mensagem</label>
                    <input type="text" id="form1" class="form-control my-2" name="modelo" value="<?php echo $dados['modelo']; ?>">

                    <label for="form7">Descrição da Mensagem</label>
                    <textarea id="form7" class="md-textarea form-control my-2" rows="3" name="descricao"><?php echo $dados['descricao']; ?></textarea>

                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary white-text" id="inputGroupFileAddon01">Envio</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="upload" value="<?php echo $dados['upload']; ?>">
                            <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
                        </div>
                    </div>

                    <label for="form1">Nome da Sequência</label>
                    <input type="text" id="form1" class="form-control mb-4 my-2" name="sequencia" value="<?php echo $dados['sequencia']; ?>">

                    <button class="btn btn-primary btn-block" name="btnAtualizar">Atualizar</button>
                    <a class="btn btn-light-green btn-block my-2" href="visMensagem.php">Listar Mensagens</a>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>