<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="css/eventos.css">
</head>
<body>
    
<header class="header">
    <h1>Eventos</h1>
        <h1 class="logo"><a href="#">Agenda online</a></h1>
        <ul class="main-nav">
            <li><a href="index.php?menuop=home">Home</a></li>
            <li><a href="index.php?menuop=eventos">Eventos</a></li>
            <li><a href="index.php?menuop=contatos">Contatos</a></li>
            <li><a href="index.php?menuop=usuarios">Login</a></li>
        </ul>
    </header> 
<a href="index.php?menuop=usuarios.php">Voltar</a>
<div>
    <a class="novoev" href="index.php?menuop=cad-eventos">Novo Evento</a>
</div>
<table class="table-eventos">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome do Evento</th>
            <th>Local do Evento</th>
            <th>Data do Evento</th>
            <th>Hora do Evento</th>
            <th>Tipo de Evento</th>
            <th>Organizador do Evento</th>
            <th>Telefone do Evento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
   </thead> 
   <tbody>
  <?php 
        include ("banco/eventos.php");
        $result = listaEventos();
        if ($result !== false && mysqli_num_rows($result) > 0) {
            while ($dados = mysqli_fetch_assoc($result)) {
    ?> 
        <tr>
            <td><?=$dados["idEvento"] ?></td>
            <td><?=$dados["nomeEvento"] ?></td>
            <td><?=$dados["localEvento"] ?></td>
            <td><?=$dados["dataEvento"] ?></td>
            <td><?=$dados["horaEvento"] ?></td>
            <td><?=$dados["tipoEvento"] ?></td>
            <td><?=$dados["organizadorEvento"] ?></td>
            <td><?=$dados["telefoneEvento"] ?></td>
 
            <td><a href="index.php?menuop=editar-evento&idEvento=<?=$dados['idEvento']?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-evento&idEvento=<?=$dados['idEvento']?>">Excluir</a></td>
        </tr>
    <?php
            }
        } else {
            echo "Nenhum evento foi encontrado.";
        }
    ?> 
</tbody>
</table>
</body>
</html>
