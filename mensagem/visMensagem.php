<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Mensagens</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php";
          include_once "../conexao/db_conexao.php";
          if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    
    ?>

    <h2 class="font-weight-bold text-center my-5">Visualizar Mensagens</h1>

        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th scope="col">Cód.</th>
                            <th scope="col"></th>
                            <th scope="col">Modelo Mensagem</th>
                            <th scope="col"></th>
                            <th scope="col">Descrição Mensagem</th>
                            <th scope="col"></th>
                            <th scope="col">Arquivo</th>
                            <th scope="col"></th>
                            <th scope="col">Sequência</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "select id, modelo, descricao, upload, sequencia from mensagem";
                        $resultado_mensagem = mysqli_query($conn, $sql);
                        while ($dados = mysqli_fetch_array($resultado_mensagem)) :
                            ?>
                        <tr>
                            <?php require 'delMensagem.php'; ?>

                            <td scope="row"><?php echo $dados['id']?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['modelo']?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['descricao']?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['upload']?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['sequencia']?></td>
                            <th scope="row"></th>
                            <td><a class="btn btn-primary btn-sm" href="edtMensagem.php?id=<?php echo $dados['id']; ?>"><i class="fas fa-edit"></i>Editar</a></td>
                            <th scope="row"></th>
                            <td><a class="btn btn-danger btn-sm" data-toggle="modal" href="#basicExampleModal<?php echo $dados['id']; ?>"><i class="fas fa-trash"></i>Deletar</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php include_once '../_part/pagination.php'; ?>
            <div class="mx-auto" style="padding-left: 500px;">
                <a class="btn btn-primary btn-block col-md-4" href="cadMensagem.php">Cadastrar Mensagem</a>
            </div>
        </div>
</body>

</html>