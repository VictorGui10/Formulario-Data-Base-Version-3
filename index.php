<?php

if (isset($_POST ['submit']))
{
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['telefone']);



include_once ('config.php'); //incluir as configurações do banco definidas no arquivo config.


$nome = $_POST['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$data_nasc = $_POST ['data_nascimento'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$senha = $_POST['senha'];


$result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,data_nasc,cidade,estado,senha) 
VALUES ('$nome','$email','$telefone','$data_nasc','$cidade','$estado','$senha')");


header("Location:login.php");

}   

// aqui ele está pegando as informações inseridas no formulário e esta fazendo a inserção de dados na tabela USUARIO
// no banco.
?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se conosco </title>
    <link rel="stylesheet" href="cadastro.css" >
    <script type="text/javascript" src="calc.js" > </script>

</head>
<body>

<nav>

    <H1> Cadastro de Usuarios</H1>

</nav>
<a href="login.php"> <button type="button" class="InputSubmit"> Voltar ao Home</button></a> 

<form action="index.php" method="POST" onsubmit="mostrarAviso()">
<div class="inputBox">
    <label for="nome" class="labelInput"> <b> Nome Completo </b> </label>
    <input type="text" name="nome" id ="nome" class="inputUser" placeholder="Digite seu Nome Completo" require>
</div>

<div class="inputBox">
    <label for="email" class="labelInput">  <b> Email </b> </label>
    <input type="email" name="email" id ="email" class="inputUser" placeholder="Digite seu E-mail" require>
</div>

<div class="inputBox">
    <label for="telefone" class="labelInput"> <b> Telefone </b> </label>
    <input type="tel" name="telefone" id ="telefone" class="inputUser" placeholder="Digite seu Telefone" require>
</div>

<div class="inputBox">
    <label for="data_nascimento" class="labelInput"> <b> Data de Nascimento </b> </label>
    <input type="date" name="data_nascimento" id ="data_nascimento" class="inputUser" placeholder="Digite aqui sua Data de Nascimento" require>
</div>
<div class="inputBox">
    <label for="cidade" class="labelInput"> <b> Cidade </b> </label>
    <input type="text" name="cidade" id ="cidade
    " class="inputUser" placeholder="Digite sua Cidade" require>
</div>
<div class="inputBox">
    <label for="estado" class="Estado"> <b> Estado </b> </label>
    <input type="text" name="estado" id ="estado" class="inputUser" placeholder="Digite seu nome Estado" require>
</div>

<div class="inputBox">
<label for="senha" class="labelInput"> <b> Senha </b> </label>
    <input type="password" name="senha" id= "senha"  placeholder="Digite aqui sua senha" require>
</div>

<input type="submit" name="submit" id="submit" class="InputSubmit" value="Cadastrar">


</form>    

<footer>
    <p> <b>Victor Guilherme &copy; 2024 </b></p>
  
</footer>

<script>
    function mostrarAviso() {
        alert("Cadastro realizado com sucesso!");
    }
</script>


</body>
</html>