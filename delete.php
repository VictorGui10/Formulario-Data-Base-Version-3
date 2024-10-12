<?php

include_once ('config.php');

if (!empty($_GET['id']))
{


$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuario WHERE id=$id"; //aqui vai fazer uma busca do ID no banco

$result = $conexao->query($sqlSelect);

if ($result ->num_rows > 0)      //se houver um numero de linhas maior que 0, trazer as informações.
{
    $sqlDelete = "DELETE FROM usuario where id=$id";
    $resultDelete = $conexao->query($sqlDelete);

     
}

}

header('Location: result.usuario.php');

?>
