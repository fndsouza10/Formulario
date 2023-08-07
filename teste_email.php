<?php
//$to = 'teste.sutec@gmail.com';
//$subject = 'Teste de e-mail do servidor local';
//$message = 'Este é um teste de e-mail enviado a partir do servidor local XAMPP.';
//$headers = 'From: teste.sutec@gmail.com';

ini_set('SMTP', 'anderson.fndss@gmail.com');
ini_set('smtp_port', 25);
ini_set('smtp_auth', true);
ini_set('smtp_username', 'anderson.fndss@gmail.com');
ini_set('smtp_password', '123456');

//if (mail($to, $subject, $message, $headers)) {
 //   echo "O e-mail foi enviado com sucesso!";
//} else {
//    echo "O envio do e-mail falhou.";
//}
?>