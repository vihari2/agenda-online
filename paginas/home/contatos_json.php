<?php
include_once 'banco/conexao.php';

// obter a conexão com o banco de dados
$conn = getConexao();

// Recupera contatos do banco de dados
$queryContatos = "SELECT * FROM contatos";
$resultContatos = mysqli_query($conn, $queryContatos);

// transforma as informações dos contatos em um formato que o FullCalendar entenda
$contatos = array();
while ($contato = mysqli_fetch_assoc($resultContatos)) {
    $nomeContato = $contato['nomeContato'];
    $emailContato = $contato['emailContato'];
    $telefoneContato = $contato['telefoneContato'];
    $sexoContato = $contato['sexoContato'];
    $dataNascContato = $contato['dataNascContato'];
   
    
    $contatos[] = array(
        'title' => $nomeContato,
        'start' => $dataNascContato,
        'allDay' => true,
        'extendedProps' => array(
            'emailContato' => $emailContato,
            'telefoneContato' => $telefoneContato,
            'sexoContato' => $sexoContato,
        ),
    );
}

// Retorna os contatos no formato JSON
mysqli_close($conn);
echo json_encode($contatos);
?>

