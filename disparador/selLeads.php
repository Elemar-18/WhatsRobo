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
    <div class="modal fade" id="centralModalLeads" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Selecione os Leads</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php 

                            $sql = "select l.id as lId,
                                          l.nome,
                                          l.telefone,
                                          l.email,
                                          ol.id as olId,
                                          ol.origemlead as origemLead,
                                          gl.id as glId,
                                          gl.grupolead as grupoLead
                                    from lead l 
                                    join origemlead ol on (ol.id = l.origemlead_id) 
                                    join grupolead gl on (gl.id = l.grupolead_id)
                                    where ol.origemlead = $origemLeadId and gl.grupolead = $grupoLeadId";
                      $filtrar_lead = mysqli_query($conn, $sql);
                      while ($dados = mysqli_fetch_array($filtrar_lead)): 
                    ?>
                    <th scope="row">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                            <label class="custom-control-label" for="defaultUnchecked"></label>
                        </div>
                    </th>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['telefone']; ?></td>
                  </tr>
                      <?php endwhile;?>
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

    <script type="text/javascript">
      document.getElementById('selectorigemlead').value;
      document.getElementById('selectgrupolead').value;

      document.getElementById('filtrarlead').onclick = function(e){

      }
    </script>   
</body>
</html>