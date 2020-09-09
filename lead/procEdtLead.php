<?php
    session_start();
    include_once '../conexao/db_conexao.php';

    if(isset($_POST['btnAtualizar'])){
    
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $origemlead_id = mysqli_real_escape_string($conn, $_POST['origemlead_id']);
    $grupolead_id = mysqli_real_escape_string($conn, $_POST['grupolead_id']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $result_lead= "update lead set 
                        nome = '$nome', 
                        telefone = '$telefone', 
                        email = '$email', 
                        origemlead_id = '$origemlead_id', 
                        grupolead_id = '$grupolead_id' 
                        where id = '$id'";

    if(mysqli_query($conn, $result_lead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Atualizado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Erro ao atualizar
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: edtLead.php");
    }
}

?>