<?php
header('Content-Type: text/html; charset=UTF-8');
/* Recuperar os Dados do Formulário de Envio*/
$txtNome = $_POST["txtNome"];
$txtAssunto = "O seu EBOOK chegou!";
$txtEmail = $_POST["txtEmail"];
$txtMensagem = $_POST["txtMensagem"];
$linkDownload = "https://drive.google.com/open?id=1XRoIRvNzC57H8Zstai2Mg-yF9Tgla5Mx";
 
/* Montar o corpo do email*/
// $corpoMensagem = "<b>Nome:</b> ".$txtNome." <br><b>Assunto:</b> ".$txtAssunto."<br><b>Mensagem:</b> ".$txtMensagem;
$corpoMensagem = "Olá ".$txtNome.".<br>Segue o link para download do seu e-book: <a href='http://www.metagam.com.br/assets/docs/E-book-Domine_sua_vida_financeira.pdf'>Download do Ebook</span></a>";
 
/* Extender a classe do phpmailer para envio do email*/
require_once("PHPMailer/class.phpmailer.php");
 
/* Definir Usuário e Senha do Gmail de onde partirá os emails*/
define('GUSER', 'metagam2019@gmail.com');
define('GPWD', 'Mg2019#!');
 
function smtpmailer($para, $de, $nomeDestinatario, $assunto, $corpo)
{
    global $error;
    $mail = new PHPMailer();
    /* Montando o Email*/
    $mail->IsSMTP(); /* Ativar SMTP*/
    $mail->SMTPDebug = 1; /* Debugar: 1 = erros e mensagens, 2 = mensagens apenas*/
    $mail->SMTPAuth = true; /* Autenticação ativada */
    $mail->SMTPSecure = 'ssl'; /* TLS REQUERIDO pelo GMail*/
    $mail->Host = 'smtp.gmail.com'; /* SMTP utilizado*/
    $mail->Port = 465; /* A porta 465 deverá estar aberta em seu servidor*/
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($de, $nomeDestinatario);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    $mail->IsHTML(true);
 
    /* Função Responsável por Enviar o Email*/
    if (!$mail->Send()) {
        $error = "<font color='red'><b>Mail error: </b></font>".$mail->ErrorInfo;
        return false;
    } else {
        $error = "<font color='blue'><b>Mensagem enviada com Sucesso!</b></font>";
        return true;
    }
}
 
/* Passagem dos parametros: email do Destinatário, email do remetende, nome do remetente, assunto, mensagem do email.*/
if (smtpmailer($txtEmail, 'metagam2019@gmail.com', $txtNome, $txtAssunto, $corpoMensagem)) {
    Header("location: ../obrigado.php"); // Redireciona para uma página de Sucesso.
}
if (!empty($error)) {
    echo $error;
}
?>
