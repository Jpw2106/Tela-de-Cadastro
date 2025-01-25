<?php

   $dbHost = 'localhost:3306';
   $dbuserName = 'root';  // Variável com 'u' minúsculo
   $dbPassword = '';
   $dbName = 'formulario_joao'; 

   $conexao = new mysqli($dbHost, $dbuserName, $dbPassword, $dbName);  // Corrigido para $dbuserName

//if ($conexao->connect_errno) {
//    echo "ERRO";
//} else {
//    echo "Conexão efetuada com sucesso ";
//}

?>