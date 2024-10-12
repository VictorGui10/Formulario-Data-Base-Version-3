<?php

session_start();
include_once('config.php');
//print_r($_SESSION);

//aqui ele vai trazer todas as informações da tabela usuário em ordem decrescente. todos os campos.

  $logado = $_SESSION['email'];

  $sql = "SELECT * FROM comissaoint ORDER BY id DESC";

  $result = $conexao -> query ($sql);


?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sistema.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Relatório de Comissões Geradas </title>
    <style>
        .table-bg{
   background: rgb(0,0,0,0.3);
   border-radius: 15px 15px 0 0;
}



</style>

</head>
<body>
  

<nav>

<div>

<a href="sistema.php" class="callout"> Voltar</a>

</div>



<div class="d-flex">
    <a href="sair.php" class="btn btn-danger me-5"> Sair</a>

</diV>


</nav>



<div class="m-5">

<table class="table text-white table-bg">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Tipo</th>
      <th scope="col">Superior</th>
      <th scope="col">Produto</th>
      <th scope="col">Valores</th>
      <th scope="col">Data da Venda</th>
      <th scope="col">Periodo</th>


    </tr>
  </thead>
  <tbody>
    <?php
        while ($user_data = mysqli_fetch_assoc($result))
        {
           echo "<tr>";
           echo "<td>". $user_data['id']. "</td>";
           echo "<td>". $user_data['nome']. "</td>";
           echo "<td>". $user_data['tipo']. "</td>";
           echo "<td>". $user_data['superior']. "</td>";
           echo "<td>". $user_data['produto']. "</td>";
           echo "<td>". $user_data['valores']. "</td>";
           echo "<td>". $user_data['datavenda']. "</td>";
           echo "<td>". $user_data['periodo']. "</td>";
        
    
        }

?>
  </tbody>
</table>


</div>



</body>
</html>