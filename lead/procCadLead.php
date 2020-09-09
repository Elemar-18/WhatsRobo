<?php
    session_start();
    include_once '../conexao/db_conexao.php';
    // include_once 'cadLead.php';
    
    if(isset($_POST['btnCadastrar'])){
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $origemlead_id = mysqli_real_escape_string($conn, $_POST['origemlead_id']);
    $grupolead_id = mysqli_real_escape_string($conn, $_POST['grupolead_id']);

    $result_lead = "insert into lead(nome, telefone, email, origemlead_id, grupolead_id) values ('$nome', '$telefone', '$email', '$origemlead_id', '$grupolead_id')";

    if(mysqli_query($conn, $result_lead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Erro ao cadastrar
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: cadLead.php");
    }
}
?>