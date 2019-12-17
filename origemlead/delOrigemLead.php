<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
    <div class="modal fade" id="basicExampleModal<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Opa!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir essa origem?
                </div>
                <div class="modal-footer">  
                    <form action="procDelOrigemLead.php" method="post">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                        <button type="button" class="btn btn-danger" name="btnDeletar">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>