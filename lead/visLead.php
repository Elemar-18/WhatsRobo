<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Leads</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php"; 
          include_once "../conexao/db_conexao.php";
          ;
    ?>

    <h2 class="font-weight-bold text-center my-5">Visualizar Leads</h1>

        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th scope="col">Cód.</th>
                            <th scope="col"></th>
                            <th scope="col">Nome</th>
                            <th scope="col"></th>
                            <th scope="col">Telefone</th>
                            <th scope="col"></th>
                            <th scope="col">Email</th>
                            <th scope="col"></th>
                            <th scope="col">Origem do Lead</th>
                            <th scope="col"></th>
                            <th scope="col">Grupo do Lead</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                $sql = " select l.id as lId,
                                                l.nome,
                                                l.telefone,
                                                l.email,
                                                ol.id as olId,
                                                ol.origemlead as origemLead,
                                                gl.id as glId,
                                                gl.grupolead as grupoLead
                                           from lead l 
                                           join origemlead ol on (ol.id = l.origemlead_id) 
                                           join grupolead gl on (gl.id = l.grupolead_id)";
                                $resultado_lead = mysqli_query($conn, $sql);
                                while($dados = mysqli_fetch_array($resultado_lead)):
                            ?>

                            <?php include_once 'delLead.php'; ?>

                            <td scope="row"><?php echo $dados['lId']; ?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['nome']; ?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['telefone']; ?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['email']; ?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['origemLead']; ?></td>
                            <th scope="row"></th>
                            <td><?php echo $dados['grupoLead']; ?></td>
                            <th scope="row"></th>
                            <td><a class="btn btn-primary btn-sm" href="edtLead.php?id=<?php echo $dados['lId']; ?>"><i class="fas fa-edit"></i>Editar</a></td>
                            <th scope="row"></th>
                            <td><a class="btn btn-danger btn-sm" data-toggle="modal" href="#basicExampleModal<?php echo $dados['lId']; ?>"><i class="fas fa-trash"></i>Deletar</a></td>
                        </tr>
                                <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
            <?php include_once '../_part/pagination.php'; ?>
            <div class="mx-auto" style="padding-left: 500px;">
                <a class="btn btn-primary btn-block col-md-4" href="cadLead.php">Cadastrar Lead</a>
            </div>
        </div>
</body>

</html>