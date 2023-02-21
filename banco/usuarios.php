<?php
require_once "conexao.php";

function listaUsuarios() {
    $conn = getConexao();

    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $sql) or die("Erro ao executar consulta de usuário! " . mysqli_error($conn));

    mysqli_close($conn);

    return $result;
}

function adicionaUsuario() {
    $conn = getConexao();

    $nomeUser = mysqli_real_escape_string($conn, $_POST['nomeUser']);
    $emailUser = mysqli_real_escape_string($conn, $_POST['emailUser']);
    $telefoneUser = mysqli_real_escape_string($conn, $_POST['telefoneUser']);
    $sexoUser = mysqli_real_escape_string($conn, $_POST['sexoUser']);
    $dataNascUser = mysqli_real_escape_string($conn, $_POST['dataNascUser']);
    $senhaUser = mysqli_real_escape_string($conn, md5($_POST['senhaUser']));

    $sql = "
		INSERT INTO usuario (
		    nomeUser, 
		    emailUser, 
		    telefoneUser, 
		    sexoUser,
            dataNascUser,
            senhaUser)
	    VALUES (
	        '{$nomeUser}',
	        '{$emailUser}', 
	        '{$telefoneUser}', 
	        '{$sexoUser}', 
	        '{$dataNascUser}',
            '{$senhaUser}'
	    )";

    mysqli_query($conn, $sql) or die ("Erro ao executar a consulta! " . print_r(mysqli_error($conn)));

    mysqli_close($conn);

    echo "Usuário inserido com sucesso!";

}

function checkLogin() {
    $conn = getConexao();

    $emailUser= mysqli_real_escape_string($conn, $_POST['emailUser']);
    $senhaUser = mysqli_real_escape_string($conn, $_POST['senhaUser']);

    $sql = "SELECT * FROM usuario WHERE emailUser = '$emailUser' AND senhaUser = '$senhaUser'";

    $result = mysqli_query($conn, $sql) or die("Erro ao checar dados do registro. " . mysqli_error($conn));

    mysqli_close($conn);

    return $result;          
}

?>

