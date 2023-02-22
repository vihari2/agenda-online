<header>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de contatos</title>
    <link rel="stylesheet" href="css/contatos.css">
    <link rel="stylesheet" href="css/usuarios.css">
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
    <a href="index.php?menuop=home">Voltar</a>
<header>
    <h3 class="cadastro">Cadastro de Contato</h3>
</header>

<div class="box">
    <form class="formcadas" action="index.php?menuop=inserir-contato" method="post">
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                </div>
                    <input required type="text" name="nomeContato" class="form-control" aria-label="NomeContato" aria-describedby="basic-addon1">
                </div>

        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                    <input required type="email" name="emailContato" class="form-control" aria-label="EmailContato" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Telefone</span>
                </div>
                    <input required type="text" name="telefoneUser" class="form-control" aria-label="TelefoneUser" aria-describedby="basic-addon1">
                </div>
        </div>
        <div>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Sexo</span>
                </div>
               <select name="sexoContato" id="sexoContato">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
                </div>
        </div> 
        <div>
        <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Data Nascimento</span>
                </div>
                    <input required type="date" name="dataNascContato" class="form-control" aria-label="dataNascContato" aria-describedby="basic-addon1">
                </div>  
        </div>
        <div>
            <input type="submit" value="Cadastrar" name="btnAdicionar" class="btnEnviar btn-dark">
        </div>
    </form>
</div>
</body>
</html>
