
<?php

    include("banco/contatos.php");

    $dados = getContato();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
    <h3>Editar Contato:</h3>
</head>
<body>

<div>

    <form class="formcadas" action="index.php?menuop=atualizar-contato" method="post">
        <div>
            <label for="idContato">ID</label>
            <input type="text" name="idContato" value="<?=$dados['idContato']?>" >
        </div>
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" value="<?=$dados['nomeContato']?>">
        </div>
        <div>
            <label for="emailContato">E-mail</label>
            <input type="email" name="emailContato" value="<?=$dados['emailContato']?>">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" value="<?=$dados['telefoneContato']?>">
        </div>
        <div>
            <label for="sexoContato">Sexo</label>
            <select name="sexoContato" id="sexoContato">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>  
        <div>
            <label for="dataNascContato">Data de Nascimento</label>
            <input type="date" name="dataNascContato" value="<?=$dados['dataNascContato']?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">

</div>

    
</body>
</html>