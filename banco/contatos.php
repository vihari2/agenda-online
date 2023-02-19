<?php

function listaContatos() {
	$conn = getConexao();

	$sql = "SELECT * FROM contatos";
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	return $result;
}

function listaContatosSelect(){
	$conn = getConexao();
	$idContato = $_GET['idContato'];

	$sql = "SELECT * FROM contatos WHERE idContato= {$idContato}";
	$result = mysqli_query($conn, $sql) or die("Erro ao recuperar dados do registro. ");

	mysqli_close($conn);

	return $result;
}


function adicionaContato() {
	$conn = getConexao();

	$nomeContato = mysqli_real_escape_string($conn, $_POST['nomeContato']);
	$emailContato = mysqli_real_escape_string($conn, $_POST['emailContato']);
	$telefoneContato = mysqli_real_escape_string($conn, $_POST['telefoneContato']);
	$sexoContato = mysqli_real_escape_string($conn, $_POST['sexoContato']);
	$dataNascContato = mysqli_real_escape_string($conn, $_POST['dataNascContato']);

	$sql = "
		INSERT INTO contatos (
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

    mysqli_close($conn);

    echo "Contato inserido com sucesso!";
}

function mudarContato()
{
	$conn = getConexao();

	$result = listaContatosSelect();
	$dados = mysqli_fetch_assoc($result);

	mysqli_close($conn);

	return $dados;
}

function atualizarContato()
{
	$conn = getConexao();

	$idContato = mysqli_real_escape_string($conn, $_POST['idContato']);
	$nomeContato = mysqli_real_escape_string($conn, $_POST['nomeContato']);
	$emailContato = mysqli_real_escape_string($conn, $_POST['emailContato']);
	$telefoneContato = mysqli_real_escape_string($conn, $_POST['telefoneContato']);
	$sexoContato = mysqli_real_escape_string($conn, $_POST['sexoContato']);
	$dataNascContato = mysqli_real_escape_string($conn, $_POST['dataNascContato']);

	$sql = "
		UPDATE contatos SET
		nomeContato = '{$nomeContato}',
		emailContato = '{$emailContato}',
		telefoneContato = '{$telefoneContato}',
		sexoContato = '{$sexoContato}',
		dataNascContato = '{$dataNascContato}'
		WHERE idContato = '{$idContato}'
	";

    mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));

    mysqli_close($conn);

    echo "Registro atualizado com sucesso!";

}

function excluiContato()
{
	
}

?>