<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Mensagens</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php"; ?>

    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5">Cadastro de Mensagens</h1>
                    <!-- Material input -->
                    <label for="form1">Modelo da Mensagem</label>
                    <input type="text" id="form1" class="form-control my-2">

                    <label for="form7">Descrição da Mensagem</label>
                    <textarea id="form7" class="md-textarea form-control my-2" rows="3"></textarea>

                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary white-text" id="inputGroupFileAddon01">Envio</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
                        </div>
                    </div>

                    <label for="form1">Nome da Sequência</label>
                    <input type="text" id="form1" class="form-control mb-4 my-2">


                    <button class="btn btn-primary btn-block">Salvar</button>
            </div>
        </div>
    </div>
</body>

</html>