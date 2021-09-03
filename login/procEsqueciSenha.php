<?php
    session_start();
    include_once '../conexao/db_conexao.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';
    //require_once 'PHPMailer/src/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['email']) ){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = "select * from usuario where email = '$usuario'";
        $result_esqueceusenha = mysqli_query($conn, $sql);
        $esqueceusenha = mysqli_fetch_array($result_esqueceusenha);
        
        if (($esqueceusenha != null) === false ) {
            $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Email não confere
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: login.php");    
        } else {
            $expFormat = mktime(
                date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y"));
            $expDate = date("Y-m-d H:i:s",$expFormat);
            $email = $usuario;
            $token = md5(2418*2+$email);
            $addToken = substr(md5(uniqid(rand(),1)),3,10);
            $addToken = $token . $addToken;
            $sql_token = "insert into password_reset_temp(email, token, expDate) values ('$email', '$token', '$expDate')";
            mysqli_query($conn, $sql_token);
        }

        $mail = new PHPMailer();


    try {
        // Configurações do Servidor
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                            // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '6974bf32e7bff8';                     // SMTP username
        $mail->Password   = '4adf50ae5981e3';                               // SMTP password
        $mail->Port       = 2525;

        // Recipientes
        $mail->setFrom($email, '');
        $mail->addAddress('contato@whatsrobo.com', 'WhatsRobo - Contato');     // Add a recipient

        // Conteudo
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Recuperação de Senha';
        $mail->Body    = 'Foi realizado um pedido de alteração de senha deste email.
        Este email tem um tempo de expiração de 1 dia. 
        Aqui está o link para recuperação: <a href="http://localhost/whatsrobo/login/alterarSenha.php?token='.$token.'&email='.$email.'&action=reset">Clique aqui para redefinir</a>';

        if($mail->send()){
            $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show col-md-s6 text-center' role='alert'> Foi enviado um email para alteração da senha
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: login.php");
        }else{
            $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show col-md-s6 text-center' role='alert'> Houve um erro no envio do email
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> ";
            header("Location: login.php");
        }

    }catch(Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}
?>