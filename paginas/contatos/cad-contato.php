<header>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de contatos</title>
    <link rel="stylesheet" href="css/contatos.css">
    <header class="header">
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
    <a href="index.php?menuop=home">Voltar</a>
<header>
    <h3 class="cadastro">Cadastro de Contato</h3>
</header>

<div>
    <form class="formcadas" action="index.php?menuop=inserir-contato" method="post">
        <div>
            <label for="nomeContato">Nome</label>
            <input required type="text" name="nomeContato">
        </div>
        <div>
            <label for="emailContato">E-mail</label>
            <input required type="email" name="emailContato">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input required type="text" name="telefoneContato">
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
            <input type="date" name="dataNascContato">
        </div>
        <div>
            <input type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>
</body>
</html>
