<header>
    <!-- <h1>Excluir Evento</h1> -->
</header>

<?php
include("banco/eventos.php");

if (isset($_GET['idEvento'])) {
    $idEvento = $_GET['idEvento'];
    excluiEvento($idEvento);
    header('Location: index.php?menuop=eventos&msg=Evento excluído com sucesso!');
    exit();
} else {
    echo "ID do evento não foi informado.";
}
?> 
