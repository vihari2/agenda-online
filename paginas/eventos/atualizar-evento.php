<header>
    <!-- <h1>Atualizar Eventos</h1> -->
</header>

<?php
include("banco/eventos.php");


if (isset($_POST['btnAtualizar'])) {
    $idEvento = $_POST['idEvento'];
    atualizaEvento($idEvento);
    header('Location: index.php?menuop=eventos.php&msg=Evento atualizado com sucesso!');
    exit();
}


?> 