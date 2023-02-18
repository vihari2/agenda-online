<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    <link rel="stylesheet" href="css/contatos.css">
</head>
<body>
<header>
<h1>Contatos</h1>
</header> 
<div>
    <a class="novoc" href="index.php?menuop=cad-contato">Novo Contato</a>
</div>
<table class="table-contatos">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
        </tr>
   </thead> 
<tbody>
    <?php 
    include ("banco/config.php");
    include ("banco/conexao.php");
    include ("banco/tabelas.php");

    while ($dados = mysqli_fetch_assoc($rs)) {
        
    
    ?> 
    <tr>
        <td><?=$dados["idContato"] ?></td>
        <td><?=$dados["nomeContato"] ?></td>
        <td><?=$dados["emailContato"] ?></td>
        <td><?=$dados["telefoneContato"] ?></td>
        <td><?=$dados["sexoContato"] ?></td>
        <td><?=$dados["dataNascContato"] ?></td>
    </tr>
    <?php
    }
        ?> 
</tbody>
</table>
</body>
</html>



