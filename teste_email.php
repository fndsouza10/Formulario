<?php


ini_set('SMTP', 'iury.santos@dflegal.df.gov.com');
ini_set('smtp_port', 25);
ini_set('smtp_auth', true);
ini_set('smtp_username', 'iury.santos@dflegal.df.gov.com');
ini_set('smtp_password', '123456');

if (mail($to, $subject, $message, $headers)) {
    echo "O e-mail foi enviado com sucesso!";
} else {
    echo "O envio do e-mail falhou.";
}
?>
