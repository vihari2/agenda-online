<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/usuarios.css">
</head>
<body>
    
</body>
</html>

<?php
    if(isset($_POST['submit']) && !empty($_POST['emailUser']) && !empty($_POST['senhaUser']))
    {
        include_once("banco/config.php");
        listaUsuarios();
        $email = $_POST['emailUser'];
        $senha = $_POST['senhaUser'];
        print_r('Email: ' . $email);
        print_r('Senha: ' . $senha);

    }
    else
    {
        header('Location: paginas/usuarios/usuarios.php');
    }
?>