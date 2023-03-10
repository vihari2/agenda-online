<?php 
include ("banco/eventos.php");

if (isset($_POST['btnAtualizar'])) {
    $idEvento = $_GET["idEvento"];
    $dados = atualizaEvento($idEvento); 
}
$idEvento = $_GET["idEvento"];
$dados = buscaEventoPorId($idEvento);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Evento</title>
    <link rel="stylesheet" href="css/eventos.css">
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
<body>
    <div>
        <a href="index.php?menuop=home">Voltar</a>
        <header>
            <h3 class="cadastro">Editar Eventos</h3>
        </header>
    </div>
<div>
    <form class="formcadas" action="index.php?menuop=atualizar-evento" method="post">
        <div>
            <label for="idEvento">ID</label>
            <input type="text" name="idEvento" value="<?= $dados["idEvento"] ?>">
            <input type="hidden" name="idEvento" value="<?= $dados["idEvento"] ?>">
        </div>
        <div>
            <label for="nomeEvento">Nome do Evento</label>
            <input type="text" name="nomeEvento" value="<?= $dados["nomeEvento"] ?>">
        </div>
        <div>
            <label for="localEvento">Local do Evento</label>
            <input type="text" name="localEvento" value="<?= $dados["localEvento"] ?>">
        </div>
        <div>
            <label for="dataEvento">Data do Evento</label>
            <input type="date" name="dataEvento" value="<?= $dados["dataEvento"] ?>"  >
        </div>
        <div>
            <label for="horaEvento">Hora do Evento</label>
            <input type="time" name="horaEvento" value="<?= $dados["horaEvento"] ?>">
        </div>
        <div>
            <label for="tipoEvento">Tipo de Evento</label>
            <input type="text" name="tipoEvento" value="<?= $dados["tipoEvento"] ?>">
        </div>
        <div>
            <label for="organizadorEvento">Organizador do Evento</label>
            <input type="text" name="organizadorEvento" value="<?= $dados["organizadorEvento"] ?>">
        </div>
        <div>
            <label for="telefoneEvento">Telefone do Evento</label>
            <input type="tel" name="telefoneEvento" value="<?= $dados["telefoneEvento"] ?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>
</body>
</html>
