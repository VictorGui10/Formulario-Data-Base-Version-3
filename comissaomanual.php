<?php

if (isset($_POST ['submit']))
{
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['telefone']);



include_once ('config.php'); //incluir as configurações do banco definidas no arquivo config.


$nome = $_POST['nome'];
$tipo = $_POST ['tipo'];
$superior = $_POST ['superior'];
$produto = $_POST ['produto'];
$valores = $_POST ['valores'];
$datavenda = $_POST ['datavenda'];
$periodo = $_POST ['periodo'];


$result = mysqli_query($conexao,"INSERT INTO comissaoint(nome,tipo,superior,produto,valores,datavenda,periodo) 
VALUES ('$nome','$tipo','$superior','$produto','$valores','$datavenda','$periodo')");


header("Location:sistema.php");

}   

// aqui ele está pegando as informações inseridas no formulário e esta fazendo a inserção de dados na tabela USUARIO
// no banco.
?>



<!DOCTYPE html>
<html lang="pt" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<script type="text/javascript" src="calc.js" > </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cadastro de Comissão</title>

    <style> form {
        
        border: 1px solid 1px;

        
        
    }
    
    .InputSubmit {
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100px;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    
    
    }

    nav {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #666;

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

<h2> Cadastre já a sua venda ! </h2>

<form action="comissaomanual.php" method="POST" onsubmit="mostrarAviso()">

<div class="input-group mb-3"> </div>
  <span class="input-group-text">Nome Completo</span>
  <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite aqui seu nome " require>

<div class="input-group mb-3"> </div>
  <span class="input-group-text">Tipo</span>
  <input type="text" class="form-control" name ="tipo" id="tipo" placeholder="Digite seu Tipo/Cargo" aria-label="tipo" aria-describedby="basic-addon1" require>

<div class="input-group mb-3"> </div>
  <span class="input-group-text">Superior</span>
  <input type="text" class="form-control" name = "superior" id="superior" placeholder="Digite aqui o nome do seu superior" aria-label="superior" aria-describedby="basic-addon1" require>
  
<br>


<select id="produto" name="produto" class="form-select" aria-label="produto">
        
<option value="" selected>Selecione seu produto</option>
       
<option value="Carro">Carro</option>
            
<option value="Moto">Moto</option>
      
<option value="Caminhao">Caminhão</option>

<option value="Trator">Trator</option>

</select

<BR> 
<div class="input-group mb-3"> </div>

<span class="input-group-text"> $</span>
<input type="text" class="form-control" name = "valores" id="valores" placeholder="Digite aqui o valor da sua comissão" require>


<div class="input-group mb-3"> </div>
  <span class="input-group-text">Data da Venda</span>
  <input type="date" class="form-control" name = "datavenda" id="datavenda" placeholder="Digite aqui a data da venda" aria-label="datavenda" aria-describedby="basic-addon1" require>

  <div class="input-group mb-3"> </div>
  <span class="input-group-text">Periodo</span>
  <input type="text" class="form-control" name = "periodo" id="periodo" placeholder="Digite aqui o periodo" aria-label="periodo" aria-describedby="basic-addon1" require>

  </div>
<BR>

<input type="submit" name="submit" id="submit" class="InputSubmit" value="Cadastrar">

</form>

<script>
    function mostrarAviso() {
        alert("Comissão lançada com sucesso!");
    }
</script>
    
</body>
</html>