<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Eventos</title>
    <link rel="stylesheet" href="css/eventos.css">
    <link rel="stylesheet" href="css/usuarios.css">
    <header class="header">
        <h1>Contatos</h1>
            <h1 class="logo"><a href="index.php?menuop=home">Agenda online</a></h1>
            <ul class="main-nav">
                <li><a href="index.php?menuop=home">Home</a></li>
                <li><a href="index.php?menuop=eventos">Eventos</a></li>
                <li><a href="index.php?menuop=contatos">Contatos</a></li>
                <li><a href="index.php?menuop=usuarios">Login</a></li>
            </ul>
    </header> 
</head>
<body>
<header>
    <h3 class="cadastro">Cadastro de Eventos</h3>
</header>
<div class="box">
    <form class="formcadas" action="index.php?menuop=inserir-evento" method="post">
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Nome do Evento</span>
                </div>
                    <input required type="text" name="nomeEvento" class="form-control" aria-label="nomeEventp" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Local</span>
                </div>
                    <input required type="text" name="localEvento" class="form-control" aria-label="localEvento" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Data</span>
                </div>
                    <input required type="date" name="dataEvento" class="form-control" aria-label="dataEvento" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Hora</span>
                </div>
                    <input required type="time" name="horaEvento" class="form-control" aria-label="horaEvento" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Tipo do Evento</span>
                </div>
                    <input required type="text" name="tipoEvento" class="form-control" aria-label="tipoEvento" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Organizador</span>
                </div>
                    <input required type="text" name="organizadorEvento" class="form-control" aria-label="organizadorEvento" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Telefone</span>
                </div>
                    <input required type="tel" name="telefoneEvento" class="form-control" aria-label="telefoneEvento" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <input class="btnEnviar" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>
</body>
</html>