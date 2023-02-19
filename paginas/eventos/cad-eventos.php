<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Eventos</title>
    <link rel="stylesheet" href="css/eventos.css">
</head>
<body>
<header>
    <h3 class="cadastro">Cadastro de Eventos</h3>
</header>
<div>
    <form class="formcadas" action="index.php?menuop=inserir-eventos" method="post">
        <div>
            <label for="nomeEvento">Nome do Evento</label>
            <input type="text" name="nomeEvento">
        </div>
        <div>
            <label for="descricaoEvento">Descrição do Evento</label>
            <input type="text" name="descricaoEvento">
        </div>
        <div>
            <label for="localEvento">Local do Evento</label>
            <input type="text" name="localEvento">
        </div>
        <div>
            <label for="dataEvento">Data do Evento</label>
            <input type="date" name="dataEvento">
        </div>
        <div>
            <label for="horaEvento">Hora do Evento</label>
            <input type="time" name="horaEvento">
        </div>
        <div>
            <label for="valorEvento">Valor do Evento </label>
            <input type="number" name="valorEvento">
        </div>
        <div>
            <label for="tipoEvento">Tipo de Evento</label>
            <input type="text" name="tipoEvento">
        </div>
        <div>
            <label for="organizadorEvento">Organizador do Evento</label>
            <input type="text" name="organizadorEvento">
        </div>
        <div>
            <label for="telefoneEvento">Telefone do Evento</label>
            <input type="tel" name="telefoneEvento">
        </div>
        <div>
            <label for="emailEvento">Email do Evento</label>
            <input type="text" name="emailEvento">
        </div>
        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>
</body>
</html>