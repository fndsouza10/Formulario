<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

session_start();

// Verifica se o email foi enviado para exibir notificação de 
if (isset($_SESSION['email_enviado']) && $_SESSION['email_enviado']) {
    echo '<script>alert("Solicitação enviada com sucesso! Aguarde nosso retorno em breve.")</script>';
    // Limpa a variável de sessão após exibir a notificação
    unset($_SESSION['email_enviado']);
}

if(isset($_POST['submit']))
{
  
    
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];   
    $cep = $_POST['cep'];
    $assunto = $_POST ['assunto'];
    $descricao = $_POST ['descricao'];

    $result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,telefone,cpf_cnpj,data_nascimento,endereco,cep,assunto,descricao) 
    VALUES ('$nome','$email','$telefone','$cpf_cnpj','$data_nascimento','$endereco','$cep', '$assunto', '$descricao')");

  // Verificação e envio do email
  if($result){

    $mail = new PHPMailer();
    try {
        // Configurações do servidor SMTP externo
        $smtpHost = 'smtp-mail.outlook.com'; // Por exemplo, smtp.gmail.com
        $smtpPort = 587; // Porta do servidor SMTP (587 para TLS, 465 para SSL)
        $smtpUsername = 'teste.sutec@outlook.com'; // Seu endereço de email
        $smtpPassword = 'Sutec123'; // Sua senha de email
        
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $smtpPort;
    
        // Dados do email
        $to = 'teste.sutec@outlook.com'; // Endereço de email do destinatário
        $mail->setFrom('teste.sutec@outlook.com', $nome);
        $mail->addAddress($to);
        $mail->Subject = $assunto;
        $mail->Body = $descricao;
    
        // Envia o email
        $mail->send();
        
        //Define o email como enviado na sessão
        $_SESSION['email_enviado'] = true;

        // Redireciona para a mesma página para evitar envio de formulário duplicado
        header('Location: formulario.php');
        exit;

    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
        
        
    }
  }  
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Contribuinte</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
        
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST" onsubmit="return handleSubmit(event)">
            <fieldset>
                <legend><b>Declaração do Contribuinte</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="cpf_cnpj" name="cpf_cnpj" id="cpf_cnpj" class="inputUser" required>
                    <label for="cpf_cnpj" class="labelInput">CPF/CNPJ:</label>
                </div>
                <p></p>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required><br><br>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="decimal" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP:</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="assunto" id="assunto" class="inputUser" required>
                    <label for="assunto" class="labelInput">Assunto:</label>
                </div>
                <br><br><br>
                <div class="inputBox">
                    <textarea type="text" name="descricao" id="descricao" class="textarea" required></textarea>
                    <label for="descricao" class="labelInputDesc">Descrição:</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
</html>