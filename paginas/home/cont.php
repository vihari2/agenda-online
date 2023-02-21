<?php
include("config.php");

function getContatos() {
    $conn = getConexao();
    $result = mysqli_query($conn, "SELECT * FROM contatos");
    $contatos = array();

    while($row = mysqli_fetch_array($result)) {
        $contato = array(
            'title' => $row['nomeContato'],
            'start' => $row['dataNascContato'],
            'extendedProps' => array(
                'emailContato' => $row['emailContato'],
                'telefoneContato' => $row['telefoneContato'],
                'sexoContato' => $row['sexoContato'],
            ),
        );

        array_push($contatos, $contato);
    }

    $conjson = json_encode($contatos);
    return $conjson;
}
?>
