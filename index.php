<?php
include("banco/conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de agenda de eventos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <main>
    <?php 
        if (isset($_GET['menuop'])) {
         $menuop = $_GET['menuop'];
        } else {
            $menuop = 'usuarios';
        }

        switch($menuop) {
            case 'home':
                include 'paginas/home/home.php';
                break;
            case 'eventos':
                include 'paginas/eventos/eventos.php';
                break;
            case 'contatos':
                include 'paginas/contatos/contatos.php';
                break;
            case 'usuarios':
                include 'paginas/usuarios/usuarios.php';
                break;
            case 'cad-contato':
                include 'paginas/contatos/cad-contato.php';
                break;
            case 'inserir-contato':
                include 'paginas/contatos/inserir-contato.php';
                break;
            case 'editar-contato':
                include 'paginas/contatos/editar-contato.php';
                break;
            case 'atualizar-contato':
                include 'paginas/contatos/atualizar-contato.php';
                break;
            case 'excluir-contato':
                include 'paginas/contatos/excluir-contato.php';
                break;
            case 'cad-eventos':
                include 'paginas/eventos/cad-eventos.php';
                break;
            case 'inserir-evento':
                include 'paginas/eventos/inserir-evento.php';
                break;
            case 'editar-evento':
                include 'paginas/eventos/editar-evento.php';
                break;
            case 'atualizar-evento':
                include 'paginas/eventos/atualizar-evento.php';
                break;
            case 'excluir-evento':
                include 'paginas/eventos/excluir-evento.php';
                break;
            case 'cad-usuario':
                include 'paginas/usuarios/cad-usuario.php';
                break;
            case 'inserir-usuario':
                include 'paginas/usuarios/inserir-usuario.php';
                break;
            case 'login':
                include 'paginas/usuarios/login.php';
                break;
            case 'logout':
                include 'paginas/usuarios/logout.php';
                break;
            case 'validate-senha':
                include 'paginas/usuarios/validate-senha.php';
                break;
            case 'erro-usuario':
                include 'paginas/usuarios/erro-usuario.php';
                break;
            default:
                include 'paginas/usuarios/usuarios.php';
                break;
        }
    ?> 
</main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>

</html>
