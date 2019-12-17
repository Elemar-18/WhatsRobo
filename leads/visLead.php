<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar Leads</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php"; ?>

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
                            <th scope="col">Editar</th>
                            <th scope="col"></th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <th scope="row"></th>
                            <td>Elemar Leonel</td>
                            <th scope="row"></th>
                            <td>+5569000000000</td>
                            <th scope="row"></th>
                            <td>elemar@gmail.com</td>
                            <th scope="row"></th>
                            <td>Instagram</td>
                            <th scope="row"></th>
                            <td>Marceneiros</td>
                            <th scope="row"></th>
                            <td><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
                            <th scope="row"></th>
                            <td><button class="btn btn-primary btn-sm"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <th scope="row"></th>
                            <td>Marcos</td>
                            <th scope="row"></th>
                            <td>+5548000000000</td>
                            <th scope="row"></th>
                            <td>marcos@gmail.com</td>
                            <th scope="row"></th>
                            <td>Facebook</td>
                            <th scope="row"></th>
                            <td>Facebook</td>
                            <th scope="row"></th>
                            <td><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></td>
                            <th scope="row"></th>
                            <td><button class="btn btn-primary btn-sm"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>