<?php
    session_start();
    include_once '../conexao/db_conexao.php';

    if(isset($_POST['btnDeletar'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result_origemlead= "delete from origemlead where id = '$id'";

    if(mysqli_query($conn, $result_origemlead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Deletado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visOrigemLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Erro ao deletar
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: edtOrigemLead.php");
    }
}

?>