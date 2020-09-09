<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <!-- Modal para Exibir e Selecionar os Leads -->
    <div class="modal fade" id="centralModalMensagens" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Selecione as mensagens</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-hover">
                <thead>pegando 
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Arquivo</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked"></label>
                        </div>
                    </th>
                    <td>teste</td>
                    <td>compareJá.png</td>
                  </tr>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-success btn-sm">Selecionar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal para Exibir e Selecionar os Leads -->   
</body>
</html>