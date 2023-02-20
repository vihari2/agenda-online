<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/usuarios.css">
    <title>Usuários</title>
</head>
<body>
    <br>
    <form action="index.php?menuop=login-usuario" method="post">
        <div class="box">
            <h1>Login</h1>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                    <input type="email" name="emailUser" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
                </div>

            <div class="input-group mb-4">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Senha</span>
                </div>
                    <input type="password" name="senhaUser" class="form-control" aria-label="Senha" aria-describedby="basic-addon1">
                </div>
            <div>
                <input type="submit" value="ENTRAR" class="btnEnviar btn-dark">
            </div>

        </div>
            <div>
                <p>Ainda não é inscrito? <a href="index.php?menuop=cad-usuario">Cadastre-se!</a></p>
            </div>
        </div>
    </form>
    
</body>
</html>
<?php
    
?>