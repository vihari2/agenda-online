<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/usuarios.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Usuários</title>
</head>
<body>
    <br>
    <form action="#" method="post">
        <div class="box">
            <h1>Login</h1>
            <div class="input-group mb-3">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                    <input required type="email" name="emailUser" class="form-control" aria-label="Usuário" aria-describedby="basic-addon1">
                </div>

            <div class="input-group mb-4">
                <div class="input-group-users">
                    <span class="input-group-text" id="basic-addon1">Senha</span>
                </div>
                    <input required type="password" name="senhaUser" class="form-control" aria-label="Senha" aria-describedby="basic-addon1">
                </div>
            <div>
                <input type="submit" value="ENTRAR" class="btnEnviar btn-dark">
            </div>

        </div>
            <div class="boxCad">
                <p><strong>Ainda não é inscrito? <a href="index.php?menuop=cad-usuario">Cadastre-se!</a></strong></p>
            </div>
        </div>
    </form>
</body>
</html>

<?php
    include("banco/usuarios.php");

    if(isset($_POST['emailUser']) || isset($_POST['senhaUser'])){
       $result = checkLogin();
       $quantidade = mysqli_num_rows($result);

       if($quantidade == 1) {

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['logado'] = true;

            header("Location: index.php?menuop=home");

        }else {
            echo '<p class="alert-danger">Usuário ou senha errados!</p>';
        }  
    }
?>
    