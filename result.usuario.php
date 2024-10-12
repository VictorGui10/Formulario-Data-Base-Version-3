<?php

session_start();
include_once('config.php');
//print_r($_SESSION);

//aqui ele vai trazer todas as informações da tabela usuário em ordem decrescente. todos os campos.

  $logado = $_SESSION['email'];

  $sql = "SELECT * FROM usuario ORDER BY id DESC";

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
    <title>Usuários Cadastrados no Sistema</title>
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
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Senha</th>
      <th scope="col">Ações (UDI) </th>

    </tr>
  </thead>
  <tbody>
    <?php
        while ($user_data = mysqli_fetch_assoc($result))
        {
           echo "<tr>";
           echo "<td>". $user_data['id']. "</td>";
           echo "<td>". $user_data['nome']. "</td>";
           echo "<td>". $user_data['email']. "</td>";
           echo "<td>". $user_data['telefone']. "</td>";
           echo "<td>". $user_data['data_nasc']. "</td>";
           echo "<td>". $user_data['cidade']. "</td>";
           echo "<td>". $user_data['estado']. "</td>";
           echo "<td>". $user_data['senha']. "</td>";
           echo "<td> 

          <a class ='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>

          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/>
          </svg>

          </a>

          <a class ='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>

          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
          <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
          </svg>

          </a>

          <a class ='btn btn-sm btn-success' href='index.php?id=$user_data[id]'>

          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-plus-fill' viewBox='0 0 16 16'>
          <path d='M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6'/>
          <path fill-rule='evenodd' d='M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5'/>
          </svg>

          </a>

        </td>";
        }

?>
  </tbody>
</table>


</div>



</body>
</html>