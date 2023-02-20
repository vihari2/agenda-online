<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Eventos</title>
    <link rel="stylesheet" href="css/eventos.css">
    <header class="header">
        <h1>Contatos</h1>
            <h1 class="logo"><a href="index.php?menuop=home">Agenda online</a></h1>
            <ul class="main-nav">
                <li><a href="index.php?menuop=home">Home</a></li>
                <li><a href="index.php?menuop=eventos">Eventos</a></li>
                <li><a href="index.php?menuop=contatos">Contatos</a></li>
                <?php
                    session_start(); // iniciar a sessão

                    if ($_SESSION['logado'] == true) {
                        // código HTML a ser exibido se o usuário estiver logado
                    ?>
                        <li><a href="index.php?menuop=logout">Logout</a></li>
                    <?php
                    } else { $_SESSION['logado'] == false;
                        // código HTML a ser exibido se o usuário não estiver logado
                    ?>
                        <li><a href="index.php?menuop=usuarios">Login</a></li>
                    <?php
                    }
                    ?>
            </ul>
    </header> 
</head>
<body>
<header>
    <h3 class="cadastro">Cadastro de Eventos</h3>
</header>
<div>
    <form class="formcadas" action="index.php?menuop=inserir-evento" method="post">
        <div>
            <label for="nomeEvento">Nome do Evento</label>
            <input type="text" name="nomeEvento">
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
            <input type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>
</body>
</html>