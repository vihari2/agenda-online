<?php
    include("functions-usuario.php");
    $cond = validateSenha();

    if($cond = false) {
        header("Location: index.php?menuop=inserir-usuario");
    }
    else {
        header("Location: index.php?menuop=erro-usuario");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
