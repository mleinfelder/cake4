<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 
function smtpmailer($para, $assunto, $corpo) { 
    require_once "../../vendor/PHPMailer_5.2.4/class.phpmailer.php";
    global $error;

    $mail = new PHPMailer();
    $mail->IsSMTP();        // Ativar SMTP
    $mail->SMTPDebug = 0;       // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
    $mail->SMTPAuth = true;     // Autenticação ativada
    $mail->SMTPSecure = 'tls';      // SSL REQUERIDO pelo GMail
    $mail->Host = 'mail.nic.br';    // SMTP utilizado
    $mail->Port = 587;          // A porta 587 deverá estar aberta em seu servidor
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->SetFrom( "sistemasweb@nic.br", "Sistemas WEB" );
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        $error = 'Mensagem enviada!';
        return true;
    }
}

if( $_POST ){

    if( smtpmailer( $_POST['destinatario'], $_POST['assunto'], $_POST['conteudo'] ) ){
        $alert = "success";
        $alert_titulo = "Mensagem enviada";
        $alert_mensagem = "E-mail foi enviado com sucesso";    
    }else{
        $alert = "danger";
        $alert_titulo = "Problemas no envio do e-mail";
        $alert_mensagem = $error;
    }
    
}


require "index.php";
