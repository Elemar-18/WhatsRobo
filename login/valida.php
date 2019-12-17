<?php
    session_start();
    include_once '../conexao/db_conexao.php';
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']);
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        $sql = "select * from cadusuario where email = '$usuario' && senha = '$senha' LIMIT 1";
        $result_login = mysqli_query($conn, $sql);
        $login = mysqli_fetch_assoc($result_login);

        if(empty($login)){
            $_SESSION['login'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Usuário ou Senha inválido
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: login.php");
        } else if(isset($login)){
            $_SESSION['nomecompleto'] = $login['nomecompleto'];
            $_SESSION['email'] = $login['email'];
            $_SESSION['senha'] = $login['senha'];
            $_SESSION['numtelefone'] = $login['numtelefone'];
            header("Location: ../dashboard/dashboard.php");
        }else{
            $_SESSION['login'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Usuário ou Senha inválido
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: login.php");
        }
    } else {

    }
?>