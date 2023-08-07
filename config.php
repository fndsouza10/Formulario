<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'banco_teste_formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);



// Verificar conexão
//if ($conexao->connect_errno) {
  //die("Falha na conexão: " . $conexao->connect_error);
//}

// Conexão bem-sucedida
//echo "Conexão estabelecida com sucesso!";
?>