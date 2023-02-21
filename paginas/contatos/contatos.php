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
<head>
    <header class="header">
            <h1 class="logo"><a href="index.php?menuop=home">Agenda online</a></h1>
            <ul class="main-nav">
                <li><a href="index.php?menuop=home">Home</a></li>
                <li><a href="index.php?menuop=eventos">Eventos</a></li>
                <li><a href="index.php?menuop=contatos">Contatos</a></li>
                <li><a href="index.php?menuop=logout">Logout</a></li>      
            </ul>
    </header> 
</head>
<div>
    <h3>Contatos</h3>
    <a href="index.php?menuop=home">Voltar</a>
    <div>
        <a class="novoc" href="index.php?menuop=cad-contato">Novo Contato</a>
    </div>
</div>

<div id="pesquisar">
    <nav class="navbar navbar-light bg-light">
    <form action="index.php?menuop=contatos" method="post" class="form-inline">
        <input type="text" name="txt_pesquisa" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </nav>
</div>

<table class='table-contatos table-striped table-bordered table-hover'>
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



