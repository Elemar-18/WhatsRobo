<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Origem dos Leads</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php";
    include_once "../conexao/db_conexao.php";
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>

    <h2 class="font-weight-bold text-center my-5">Visualizar Origem de Leads</h1>

        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th scope="col">Cód.</th>
                            <th scope="col"></th>
                            <th scope="col">Origem do Lead</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "select id, origemlead from origemlead";
                        $resultado_origemlead = mysqli_query($conn, $sql);
                        while ($dados = mysqli_fetch_array($resultado_origemlead)) :
                            ?>
                            <tr>
                                <?php include_once 'delOrigemLead.php'; ?>

                                <td><?php echo $dados['id']; ?></td>
                                <th scope="row"></th>
                                <td><?php echo $dados['origemlead']; ?></td>
                                <th scope="row"></th>
                                <td><a class="btn btn-primary btn-sm" href="edtOrigemLead.php?id=<?php echo $dados['id']; ?>"><i class="fas fa-edit"></i>Editar</a></td>
                                <th scope="row"></th>
                                <td><a class="btn btn-danger btn-sm" data-toggle="modal" href="#basicExampleModal<?php echo $dados['id']; ?>"><i class="fas fa-trash"></i>Deletar</a></td>
                                <!-- Modal para Deletar -->
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination pg-blue justify-content-center">
                    <li class="page-item">
                        <a class="page-link" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item">
                        <a class="page-link">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item ">
                        <a class="page-link">Próximo</a>
                    </li>
                </ul>
            </nav>
            <br>
            <a class="btn btn-primary btn-block col-md-3" href="cadOrigemLead.php">Cadastrar Origem do Lead</a>
        </div>
</body>

</html>