<?php
    session_start();
    include_once '../conexao/db_conexao.php';

    if(isset($_POST['btnAtualizar'])){
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $grupolead = mysqli_real_escape_string($conn, $_POST['grupolead']);
        $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    
        $result_grupolead= "update grupolead set grupolead = '$grupolead', descricao = '$descricao' where id = '$id'";

    if(mysqli_query($conn, $result_grupolead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Atualizado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visGrupoLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Erro ao atualizar
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: edtGrupoLead.php");
    }
}
