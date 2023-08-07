<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Configurações do servidor SMTP externo
$smtpHost = 'localhost'; // Por exemplo, smtp.gmail.com
$smtpPort = 465; // Porta do servidor SMTP (587 para TLS, 465 para SSL)
$smtpUsername = 'desenvolvimento_sutec@outlook.com'; // Seu endereço de email
$smtpPassword = 'Sutec123'; // Sua senha de email

// Dados do email
$to = 'fernandosouza1992@gmail.com'; // Endereço de email do destinatário
$subject = 'Dados contrinuinte';
$message = 'Olá, este é um exemplo de email enviado usando o XAMPP com PHPMailer e um servidor SMTP externo.';
$fromEmail = 'desenvolvimento_sutec@outlook.com'; // Endereço de email do remetente
$fromName = 'Seu Nome'; // Seu nome ou nome do remetente

// Cria uma instância do PHPMailer
$mail = new PHPMailer();

try {
    // Configuração do servidor SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = $smtpPort;

    // Dados do email
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Envia o email
    $mail->send();

    echo 'Email enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar o email: {$mail->ErrorInfo}";
}
?>
