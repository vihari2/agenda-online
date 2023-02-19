<?php
include("banco/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de agenda de eventos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <h1 class="logo"><a href="#">Agenda online</a></h1>
        <ul class="main-nav">
            <li><a href="index.php?menuop=home">Home</a></li>
            <li><a href="index.php?menuop=eventos">Eventos</a></li>
            <li><a href="index.php?menuop=contatos">Contatos</a></li>
        </ul>
    </header>
    <main>
    <?php 
        if (isset($_GET['menuop'])) {
         $menuop = $_GET['menuop'];
        } else {
            $menuop = 'home';
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
            default:
                include 'paginas/home/home.php';
                break;
        }
    ?> 
</main>
</body>

</html>
