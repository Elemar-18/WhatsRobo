<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Grupo do Lead</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php"; ?>

    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5">Cadastro do Grupo de Lead</h1>
                    <!-- Material input -->
                        <label for="form1">Grupo do Lead</label>
                        <input type="text" id="form1" class="form-control my-2">
                        
                        <label for="form7">Descrição do Grupo</label>
                        <textarea id="form7" class="md-textarea form-control my-2 mb-3" rows="3"></textarea>
                        

                    <button class="btn btn-primary btn-block">Salvar</button>
            </div>
        </div>
    </div>
</body>

</html>