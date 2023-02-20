<?php
include_once 'banco/conexao.php';


// obter a conexão com o banco de dados
$conn = getConexao();

// Recupera eventos do banco de dados
$queryEventos = "SELECT * FROM eventos";
$resultEventos = mysqli_query($conn, $queryEventos);

// Converte informações dos eventos em um formato que o FullCalendar entenda
$eventos = array();
while ($evento = mysqli_fetch_assoc($resultEventos)) {
    $nomeEvento = $evento['nomeEvento'];
    $localEvento = $evento['localEvento'];
    $dataEvento = $evento['dataEvento'];
    $horaEvento = $evento['horaEvento'];
    $tipoEvento = $evento['tipoEvento'];
    $organizadorEvento = $evento['organizadorEvento'];
    $telefoneEvento = $evento['telefoneEvento'];
    
    $eventos[] = array(
        'title' => $nomeEvento,
        'start' => $dataEvento . 'T' . $horaEvento,
        'extendedProps' => array(
            'tipoEvento' => $tipoEvento,
            'organizadorEvento' => $organizadorEvento,
            'telefoneEvento' => $telefoneEvento,
            'localEvento' => $localEvento,
        ),
    );
}
mysqli_close($conn);
echo json_encode($eventos);

?>
