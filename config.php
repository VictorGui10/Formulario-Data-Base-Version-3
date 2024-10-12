<?php

$dbhost = 'Localhost'; //local de acesso
$dbUsername = 'root'; //nome do criador do banco
$dbPassword = ''; //colocar senha
$dbName = 'calculadora'; //nome do banco de dados

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);



//if ($conexao->connect_errno) {
//echo ("Erro ao conectar no BD");
//}
//else {
//echo ("Conectou com sucesso !");
//}





?>