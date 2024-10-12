<?php

include_once ('config.php');

if (!empty($_GET['id']))
{


$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuario WHERE id=$id"; //aqui vai fazer uma busca do ID no banco

$result = $conexao->query($sqlSelect);

if ($result ->num_rows > 0)      //se houver um numero de linhas maior que 0, trazer as informações.
{
    while ($user_data = mysqli_fetch_assoc($result))
    {
    $nome = $user_data['nome'];
    $email = $user_data ['email'];
    $telefone = $user_data ['telefone'];
    $data_nasc = $user_data ['data_nasc'];
    $cidade = $user_data ['cidade'];
    $estado = $user_data ['estado'];
    $senha = $user_data['senha'];

    }

        
}
else //caso não houver linha (dados) no banco, ele vai voltar na tela de sistema
{
    header ('Location: sistema.php');
}


}

else {
    header ('Location: sistema.php');
}

?>



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se conosco </title>
    <link rel="stylesheet" href="calc.css" >
    <script type="text/javascript" src="calc.js" > </script>

</head>
<body>

<nav>

    <H1> Cadastro de Usuarios</H1>

</nav>
<a href="sistema.php"> <button type="button" class="InputSubmit"> Voltar ao Sistema</button></a>
<form action="saveEdit.php" method="POST">
<div class="inputBox">
    <label for="nome" class="labelInput"> <b> Nome Completo </b> </label>
    <input type="text" name="nome" id ="nome" class="inputUser" value= "<?php echo $nome ?>" placeholder="Digite seu Nome Completo" require>
</div>

<div class="inputBox">
    <label for="email" class="labelInput">  <b> Email </b> </label>
    <input type="email" name="email" id ="email" class="inputUser" value= "<?php echo $email ?>" placeholder="Digite seu E-mail" require>
</div>

<div class="inputBox">
    <label for="telefone" class="labelInput"> <b> Telefone </b> </label>
    <input type="tel" name="telefone" id ="telefone" class="inputUser" value= "<?php echo $telefone ?>" placeholder="Digite seu Telefone" require>
</div>

<div class="inputBox">
    <label for="data_nascimento" class="labelInput"> <b> Data de Nascimento </b> </label>
    <input type="date" name="data_nascimento" id ="data_nascimento" class="inputUser" value= "<?php echo $data_nasc ?>"  placeholder="Digite aqui sua Data de Nascimento" require>
</div>
<div class="inputBox">
    <label for="cidade" class="labelInput"> <b> Cidade </b> </label>
    <input type="text" name="cidade" id ="cidade" class="inputUser" value= "<?php echo $cidade ?>"  placeholder="Digite sua Cidade" require>
</div>
<div class="inputBox">
    <label for="estado" class="Estado"> <b> Estado </b> </label>
    <input type="text" name="estado" id ="estado" class="inputUser" value= "<?php echo $estado ?>"  placeholder="Digite seu nome Estado" require>
</div>

<div class="inputBox">
<label for="senha" class="labelInput"> <b> Senha </b> </label>
    <input type="text" name="senha" id= "senha" value= "<?php echo $senha ?>"   placeholder="Digite aqui sua senha" require>
</div>


<input type="hidden" name ="id" value="<?php echo $id ?>">

<input type="submit" name="update" id="update" class="InputSubmit" value="Atualizar">


</form>    

<footer>
    <p> <b>Victor Guilherme &copy; 2023 </b></p>
  
</footer>


</body>
</html>