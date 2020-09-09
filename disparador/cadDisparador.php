<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Disparo de Mensagens</title>
</head>
<body>
    <?php require "../dashboard/dashboard.php";
          include_once "../conexao/db_conexao.php";
          include "selLeads.php";
          include "selMensagens.php";
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>

<div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5 mb-4">Realizar Disparo</h1>
                    <!-- Material input -->
                    <form action="procCadDisparador.php" method="POST">
                        <input type="hidden" name="id">

                        <form action="selLeads.php" method="POST">
                        <label for="form1">Escolha a origem do Lead</label>
                            <select class="browser-default custom-select my-1" name="selectorigemlead" id="selectorigemlead">
                                <option selected disabled>Selecione</option>
                                <?php
                                    $resultado_origem_lead = "select * from origemlead";
                                    $origemlead = mysqli_query($conn, $resultado_origem_lead);
                                    while($row_origem_lead = mysqli_fetch_assoc($origemlead)):
                                ?> 
                                <option value="<?php echo $row_origem_lead['id'];?>"><?php echo $row_origem_lead['origemlead']; ?></option>
                                    <?php endwhile; ?>
                            </select>

                        <label for="form1">Escolha o grupo do Lead</label>
                            <select class="browser-default custom-select my-1 mb-3" name="selectgrupolead" id="selectgrupolead">
                                <option selected disabled>Selecione</option>
                                <?php 
                                    $resultado_grupo_lead = "select * from grupolead";
                                    $grupolead = mysqli_query($conn, $resultado_grupo_lead);
                                    while($row_grupo_lead = mysqli_fetch_assoc($grupolead)):
                                ?>
                                <option value="<?php echo $row_grupo_lead['id']; ?>"><?php echo $row_grupo_lead['grupolead']; ?></option>
                                    <?php endwhile; ?>
                            </select>

                        <a class="btn btn-primary btn-md mb-3" data-toggle="modal" href="#centralModalLeads" id="filtrarlead">Selecionar os Leads</a>
                        <br>
                        </form>
                        <label for="form1">Escolha a sequência da mensagem</label>
                            
                            <select class="browser-default custom-select my-1 mb-3" name="sequenciamensagem">
                                <option selected disabled>Selecione</option>
                                <?php 
                                    $resultado_grupo_lead = "select * from mensagem";
                                    $grupolead = mysqli_query($conn, $resultado_grupo_lead);
                                    while($row_grupo_lead = mysqli_fetch_assoc($grupolead)):
                                ?>
                                <option value="<?php echo $row_grupo_lead['id']; ?>"><?php echo $row_grupo_lead['sequencia']; ?></option>
                                    <?php endwhile; ?>
                            </select>

                        <a class="btn btn-primary btn-md mb-3" data-toggle="modal" href="#centralModalMensagens">Selecionar as Mensagens</a>
                        <br>

                        <label for="form1">Escolha a data de envio</label>
                        <br>                
                        <input type="text" id="datepicker" class="mb-3">

                    <button class="btn btn-primary btn-block" name="btnCadastrar">Realizar Disparo</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>