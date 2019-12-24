<?php
    session_start();
    include_once '../conexao/db_conexao.php';
    
    if(isset($_POST['btnCadastrar'])){
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
    $descricao = mysqli_real_escape_string($conn, $_POST['descricao']);
    if(isset($_FILES['upload'])){
        $upload = $_FILES['upload']['name'];
        $diretorio = "./upload/";
        move_uploaded_file($_FILES['upload']['tmp_name'], $diretorio.$upload);
    }
    $sequencia = mysqli_real_escape_string($conn, $_POST['sequencia']);

    $result_mensagem= "insert into mensagem(modelo, descricao, upload, sequencia) values ('$modelo', '$descricao', '$upload', '$sequencia')";

    if(mysqli_query($conn, $result_mensagem)){
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: visMensagem.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
        header("Location: cadMensagem.php");
    }
}
?>