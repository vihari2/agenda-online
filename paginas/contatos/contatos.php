<!DOCTYPE html>
<html lang="pt-br">
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
<a href="index.php?menuop=home">Voltar</a>
<div>
    <a class="novoc" href="index.php?menuop=cad-contato">Novo Contato</a>
</div>
<div id="pesquisar">
    <form action="index.php?menuop=contatos" method="post">
        <input type="text" name="txt_pesquisa" placeholder="O que está procurando?">
        <input type="submit" value="Pesquisar">
    </form>
    <br>
</div>
<table class='table-contatos table-striped table-bordered table-hover' >
    <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
   </thead> 
<tbody>
    <?php 
  
    include ("banco/contatos.php");

    $result = searchContacts();
    while ($dados = mysqli_fetch_assoc($result)) {
    ?> 
    <tr>
        <td><?=$dados["idContato"] ?></td>
        <td><?=$dados["nomeContato"] ?></td>
        <td><?=$dados["emailContato"] ?></td>
        <td><?=$dados["telefoneContato"] ?></td>
        <td><?=$dados["sexoContato"] ?></td>
        <td><?=$dados["dataNascContato"] ?></td>
        <td><a href="index.php?menuop=editar-contato&idContato=<?=$dados['idContato'] ?>">Editar</a></td>
        <td><a href="index.php?menuop=excluir-contato&idContato=<?=$dados['idContato'] ?>">Excluir</a></td>
    </tr>
    <?php
    }
        ?> 
</tbody>
</table>
</body>
</html>
<br>

<?php

    //totalRegistros();

    
?>



