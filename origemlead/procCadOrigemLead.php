<?php
    session_start();
    include_once '../conexao/db_conexao.php';
    
    if(isset($_POST['btnCadastrar'])){
    $origemlead = mysqli_real_escape_string($conn, $_POST['origemlead']);

    $result_origemlead= "insert into origemlead(origemlead) values ('$origemlead')";

    if(mysqli_query($conn, $result_origemlead)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visOrigemLead.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visOrigemLead.php");
    }
}
?>