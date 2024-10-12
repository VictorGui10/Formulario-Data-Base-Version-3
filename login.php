
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | CADASTRO</title>
    <link rel="stylesheet" href="styleloginn.css" >
</head>
<body>



<div>

    <h1> Login </h1>

<form action="testlogin.php" method="POST">


    <input type="text" placeholder="Email" name ="email" >
    <br> <br>

    <input type="password" placeholder="Senha" name ="senha">
    <br> <br>
    
    <input class = "InputSubmit" type="submit" name="submit" value="Entrar">

    <a class = "InputSubmit" href="index.php"> Cadastre-se </a>


</form>

</div>

</body>
</html>