<header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de contatos</title>
    <link rel="stylesheet" href="css/contatos.css">
</head>
<body>
<header>
    <h3 class="cadastro">Cadastro de Contato</h3>
</header>

<div>
    <form class="formcadas" action="index.php?menuop=inserir-contato" method="post">
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato">
        </div>
        <div>
            <label for="emailContato">E-mail</label>
            <input type="text" name="emailContato">
        </div>
        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato">
        </div>
        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato">
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
