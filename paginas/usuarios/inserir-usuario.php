<?php
    include("banco/usuarios.php");

    if($senha = $_POST['senhaUser'] !== $_POST['confirmarSenhaUser']) {
        header("Location: index.php?menuop=erro-usuario");
    }

    adicionaUsuario();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionar</title>
</head>
<body>
<div class="alert alert-success alert-dismissible">
  <strong>Usuário cadastrado com sucesso!</strong>
</div>
<a href="index.php?menuop=home">Home</a>
</body>
</html>