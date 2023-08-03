<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'meu_banco';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


// Verificar conexão
//if ($conexao->connect_errno) {
  //die("Falha na conexão: " . $conexao->connect_error);
//}

// Conexão bem-sucedida
//echo "Conexão estabelecida com sucesso!";
?>