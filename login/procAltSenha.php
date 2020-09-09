<?php
    session_start();
    include_once '../conexao/db_conexao.php';

    if(isset($_POST['email']) && isset($_POST['action']) 
    && ($_POST["action"]=="update")){
        $novaSenha = mysqli_real_escape_string($conn, $_POST['novaSenha']);
        $confirmarNovaSenha = mysqli_real_escape_string($conn, $_POST['confirmarNovaSenha']);
        $email = $_POST['email'];
        
        $curDate = date("Y-m-d H:i:s");

        if($novaSenha != $confirmarNovaSenha){
            $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Senhas não conferem.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header('Location: alterarSenha.php');
        } else {
            $novaSenha = md5($novaSenha);
            mysqli_query($conn, "update usuario set senha = '$novaSenha', modified = '$curDate' where 
            email = '$email'");
        }
        mysqli_query($conn, "delete from password_reset_temp where email = '$email'");
        $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Senha alterada com sucesso.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header('Location: login.php');
    }
?>
