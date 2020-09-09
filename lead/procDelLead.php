<?php
    session_start();
    include_once '../conexao/db_conexao.php';

    if(isset($_POST['btnDeletar'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result_lead= "delete from lead where id = '$id'";

    if(mysqli_query($conn, $result_lead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Deletado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Erro ao deletar
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: edtLead.php");
    }
}

?>