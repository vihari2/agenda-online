<?php
include("config.php");

function getEventos() {
    $conn = getConexao();
    $result = mysqli_query($conn, "SELECT * FROM eventos");
    $eventos = array();

    while($row = mysqli_fetch_array($result)) {
        $evento = array(
            'title' => $row['nomeEvento'],
            'start' => $row['dataEvento'] . 'T' . $row['horaEvento'],
            'extendedProps' => array(
                'localEvento' => $row['localEvento'],
                'tipoEvento' => $row['tipoEvento'],
                'organizadorEvento' => $row['organizadorEvento'],
                'telefoneEvento' => $row['telefoneEvento'],
            ),
        );

        array_push($eventos, $evento);
    }

    $evjson = json_encode($eventos);
    return $evjson;
}
?>
