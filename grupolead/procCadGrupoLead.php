<?php
    session_start();
    include_once '../conexao/db_conexao.php';
    
    if(isset($_POST['btnCadastrar'])){
    $grupolead = mysqli_real_escape_string($conn, $_POST['grupolead']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);

    $result_grupolead= "insert into grupolead(grupolead, descricao) values ('$grupolead', '$descricao')";

    if(mysqli_query($conn, $result_grupolead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visGrupoLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: cadGrupoLead.php");
    }
}
?>