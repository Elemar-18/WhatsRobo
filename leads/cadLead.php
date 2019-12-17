<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Leads</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php"; ?>

    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5 mb-4">Cadastro de Leads</h1>
                    <!-- Material input -->
                        <label for="form1">Nome</label>
                        <input type="text" id="form1" class="form-control my-1">
                        
                        <label for="form1">Telefone</label>
                        <input type="text" id="form1" class="form-control my-1">
                        
                        <label for="form1">Email</label>
                        <input type="email" id="form1" class="form-control my-1">
                    
                    <label for="form1">Escolha a origem do Lead</label>
                    <select class="browser-default custom-select my-1">
                        <option selected value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <label for="form1">Escolha o grupo do Lead</label>
                    <select class="browser-default custom-select my-1 mb-3">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <button class="btn btn-primary btn-block">Salvar</button>
            </div>
        </div>
    </div>
</body>

</html>