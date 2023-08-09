<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

session_start();

// Verifica se o email foi enviado para exibir notificação de sucesso
if (isset($_SESSION['email_enviado'])) {
    echo '<script>alert("Solicitação enviada com sucesso! Aguarde nosso retorno em breve.")</script>';
    // Limpa a variável de sessão após exibir a notificação
    unset($_SESSION['email_enviado']);
}

if(isset($_POST['submit']))
{
  
    include_once('conexao_bd.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];   
    $cep = $_POST['cep'];
    $assunto = $_POST ['assunto'];
    $descricao = $_POST ['descricao'];

    // Variável para verificar se todos os campos estão válidos
    // Array para armazenar mensagens de erro
    $erros = array();

    // Validação de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'Digite um email válido!';
    } 

    // Validação de cpf/cnpj
    if (!preg_match("/[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}/", $cpf_cnpj)) {
        $erros['cpf_cnpj'] = 'Digite um CPF/CNPJ válido!';
    } 

    // Validação de telefone
    if (!preg_match("/\([0-9]{2}\)[0-9]{4,5}\-[0-9]{4}/", $telefone)) {
        $erros['telefone'] = 'Digite um telefone válido!';
    } 

    // Validação de cep
    if (!preg_match("/[0-9]{5}\-[0-9]{3}/", $cep)) {
        $erros['cep'] = 'Digite um CEP válido!';
    }

    // Inserção dos dados no banco de dados se não há erros
    if (count($erros) == 0) {
        $result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,telefone,cpf_cnpj,data_nascimento,endereco,cep,assunto,descricao) 
        VALUES ('$nome','$email','$telefone','$cpf_cnpj','$data_nascimento','$endereco','$cep', '$assunto', '$descricao')");

    // Verificação e envio do email
    if($result){

    // Inicia a classe PHPMailer
    $mail = new PHPMailer();

    $descricaoFinal = "Formulario do Contribuinte: " . PHP_EOL . "Nome: $nome" . PHP_EOL . "Email: $email" . PHP_EOL . 
    "Telefone: $telefone" . PHP_EOL . "CPF/CNPJ: $cpf_cnpj" . PHP_EOL . "Data de Nascimento: $data_nascimento "
         . PHP_EOL . "Endereco: $endereco" . PHP_EOL . "CEP: $cep" . PHP_EOL . "Assunto: $assunto" . PHP_EOL . 
         "Descricao: $descricao";

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
        $mail->Body = $descricaoFinal;
    
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
                    <label for="email" class="labelInput">Email:</label>
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo isset($email) ? $email : ''; ?>" required>
                    <?php if(isset($erros['email'])): ?>
                        <div style="color:red;"><?php echo $erros['email']; ?></div>
                    <?php endif; ?>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone:</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo isset($telefone) ? $telefone : ''; ?>" required>
                    <?php if(isset($erros['telefone'])): ?>
                        <div style="color:red;"><?php echo $erros['telefone']; ?></div>
                    <?php endif; ?>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cpf_cnpj" class="labelInput">CPF/CNPJ:</label>
                    <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="inputUser" value="<?php echo isset($cpf_cnpj) ? $cpf_cnpj : ''; ?>" required>
                    <?php if(isset($erros['cpf_cnpj'])): ?>
                        <div style="color:red;"><?php echo $erros['cpf_cnpj']; ?></div>
                    <?php endif; ?>
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
                    <label for="cep" class="labelInput">CEP:</label>
                    <input type="decimal" name="cep" id="cep" class="inputUser" value="<?php echo isset($cep) ? $cep : ''; ?>" required>
                    <?php if(isset($erros['cep'])): ?>
                        <div style="color:red;"><?php echo $erros['cep']; ?></div>
                    <?php endif; ?>
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