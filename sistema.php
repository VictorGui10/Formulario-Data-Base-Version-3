<?php

session_start();
include_once('config.php');
//print_r($_SESSION);


if ((!isset($_SESSION['email']) ==true) and (!isset($_SESSION ['senha']) ==true)) //aqui ele verifica se existe estas variaveis


{
    unset ($_SESSION ['email']);
    unset ($_SESSION ['senha']);
    header('Location: login.php');




}
    $logado = $_SESSION['email'];
    $sql = "SELECT nome FROM usuario WHERE email = '$logado' LIMIT 1";

    $result = $conexao -> query ($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $nomeUsuario = $row['nome']; // Obtém o nome do usuário
  } else {
      $nomeUsuario = "Usuário"; // Caso não encontre o nome, usa um padrão
  }


?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sistema.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        
</style>

</head>
<body>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <!-- Navbar content -->
    
  <?php
      // Exibe a mensagem de boas-vindas com o nome do usuário
      echo "<h1> Bem-vindo(a) <u> $nomeUsuario </u> </h1>";
  ?>

<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Ativo</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Ações</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="index.php">Cadastrar Funcionários</a></li>
      <li><a class="dropdown-item" href="comissaomanual.php">Lançar Venda | Comissão Manual</a></li>
      <li><a class="dropdown-item" href="#">aguardando</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">aguardando</a></li>
      <li><a class="dropdown-item" href="#">aguardando</a></li>
      <li><a class="dropdown-item" href="#">aguardando</a></li>
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Relatórios </a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="result.usuario.php"> Funcionários Cadastrados no Sistema </a></li>
      <li><a class="dropdown-item" href="relatoriocomissao.php"> Comissões Geradas </a></li>
      <li><a class="dropdown-item" href="#"> aguardando </a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">aguardando</a></li>
    </ul>
  </li>













  <li class="nav-item">
    <a class="nav-link" href="#">Link página</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Desabilitado</a>
  </li>
</ul>



<div class="d-flex">
    <a href="sair.php" class="btn btn-danger me-5"> Sair</a>

</diV>

</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>