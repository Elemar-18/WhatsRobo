<?if( ! $_SESSION)
{
    session_start();
} ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Leads</title>
</head>

<body>
    <?php require "../dashboard/dashboard.php";
          include_once "../conexao/db_conexao.php";
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
    ?>

    <div class="container col-md-6">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold text-center my-5 mb-4">Cadastro de Leads</h1>
                    <!-- Material input -->
                    <form action="procCadLead.php" method="post">
                        <input type="hidden" name="id">

                        <label for="form1">Nome</label>
                        <input type="text" id="form1" class="form-control my-1" name="nome">
                        
                        <label for="form1">Telefone</label>
                        <input type="text" id="form1" class="form-control my-1" name="telefone">
                        
                        <label for="form1">Email</label>
                        <input type="email" id="form1" class="form-control my-1" name="email">
                    
                        <label for="form1">Escolha a origem do Lead</label>
                            <select class="browser-default custom-select my-1" name="origemlead_id">
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
                            <select class="browser-default custom-select my-1 mb-3" name="grupolead_id">
                                <option selected disabled>Selecione</option>
                                <?php 
                                    $resultado_grupo_lead = "select * from grupolead";
                                    $grupolead = mysqli_query($conn, $resultado_grupo_lead);
                                    while($row_grupo_lead = mysqli_fetch_assoc($grupolead)):
                                ?>
                                <option value="<?php echo $row_grupo_lead['id']; ?>" ><?php echo $row_grupo_lead['grupolead']; ?></option>
                                    <?php endwhile; ?>
                            </select>
                    <button class="btn btn-primary btn-block" name="btnCadastrar">Salvar</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>