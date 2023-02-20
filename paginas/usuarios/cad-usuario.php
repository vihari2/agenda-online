<header>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/usuarios.css">
</head>
<body>
    <a href="index.php?menuop=usuarios.php">Voltar</a>

<div>
    <form class="formcadasuser" action="index.php?menuop=inserir-usuario" method="post">
            <br>
            <div class="box">
             <legend><b>Cadastro</b></legend>
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Nome</span>
                    </div>
                        <input type="text" name="nomeUser" class="form-control" aria-label="Nome" aria-describedby="basic-addon1">
                    </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                    </div>
                        <input type="email" name="emailUser" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Telefone</span>
                    </div>
                        <input type="text" name="telefoneUser" class="form-control" aria-label="Telefone" aria-describedby="basic-addon1">
                </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Sexo</span>
                    </div>
                        <select name="sexoUser" id="sexoUser" class="form-control" aria-label="Sexo" aria-describedby="basic-addon1">
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                </div>   
                       
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Data Nascimento</span>
                    </div>
                        <input type="date" class="form-control" name="dataNascUser" aria-label="Data" aria-describedby="basic-addon1">
                </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Senha</span>
                    </div>
                        <input type="password" class="form-control" name="senhaUser" aria-label="Senha" aria-describedby="basic-addon1">
                </div>
                
                <div class="input-group-prepend">
                    <div class="input-group-users">
                        <span class="input-group-text" id="basic-addon1">Confirmar senha</span>
                    </div>
                        <input type="password" class="form-control" name="confirmarSenhaUser" aria-label="Usuário" aria-describedby="basic-addon1">
                    </div>
                
                <div>
                    <input type="submit" value="Cadastrar" class="btnEnviar btn-dark">
                </div>
            </div>
    </form>
</div>
</body>
</html>


        

