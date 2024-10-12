<?php

include_once('config.php');


if (isset($_POST['update']))
{
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$data_nasc = $_POST ['data_nasc'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$senha = $_POST['senha'];

$sqlUpdate = "UPDATE usuario SET nome='$nome', email='$email', telefone='$telefone', data_nasc='$data_nasc',
cidade = '$cidade', estado ='$estado', senha = '$senha' WHERE id = '$id' ";

$result = $conexao->query($sqlUpdate);



}

header('Location:sistema.php');


?>
