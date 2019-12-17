<?php 
        session_start();
        include_once '../conexao/db_conexao.php';

        $nomecompleto = filter_input(INPUT_POST, 'nomecompleto', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $numtelefone = filter_input(INPUT_POST, 'numtelefone', FILTER_SANITIZE_STRING);

        $result_usuario = "insert into cadusuario(nomecompleto, email, senha, numtelefone, created) values ('$nomecompleto', '$email', MD5('$senha'), '$numtelefone', NOW())";
        $usuario = mysqli_query($conn, $result_usuario);
        if(mysqli_insert_id($conn)){
            $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Cadastrado com sucesso
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: login.php");
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Complete seu cadastro
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: register.php");
        }
    ?>
    