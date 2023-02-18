<header>
    <!-- <h1>Inserir Contato</h1> -->
</header>

<?php 

$nomeContato = mysqli_real_escape_string($conn, $_POST['nomeContato']);
$emailContato = mysqli_real_escape_string($conn, $_POST['emailContato']);
$telefoneContato = mysqli_real_escape_string($conn, $_POST['telefoneContato']);
$sexoContato = mysqli_real_escape_string($conn, $_POST['sexoContato']);
$dataNascContato = mysqli_real_escape_string($conn, $_POST['dataNascContato']);
$sql = "INSERT INTO contatos (
    nomeContato, 
    emailContato, 
    telefoneContato, 
    sexoContato, 
    dataNascContato)
    VALUES (
        '$nomeContato', 
        '$emailContato', 
        '$telefoneContato', 
        '$sexoContato', 
        '$dataNascContato'
    )";
    mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));

    echo "Contato inserido com sucesso!";
?> 
