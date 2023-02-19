<?php

function listaContatos() {
	$conn = getConexao();

	$sql = "SELECT * FROM contatos";
	$result = mysqli_query($conn, $sql) or die("Erro ao executar consulta! " . mysqli_error($conn));

	mysqli_close($conn);

	return $result;
}


function getContato(){
	$conn = getConexao();
	$idContato = $_GET['idContato'];

	$sql = "SELECT * FROM contatos WHERE idContato= {$idContato}";
	$result = mysqli_query($conn, $sql) or die("Erro ao recuperar dados do registro. ");

	$dados = mysqli_fetch_assoc($result);

	mysqli_close($conn);

	return $dados;
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
	        '{$nomeContato}',
	        '{$emailContato}', 
	        '{$telefoneContato}', 
	        '{$sexoContato}', 
	        '{$dataNascContato}'
	    )";

    mysqli_query($conn, $sql) or die ("Erro ao executar a consulta! " . print_r(mysqli_error($conn)));

	print_r(mysqli_error($conn));

    mysqli_close($conn);

    echo "Contato inserido com sucesso!";
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

    mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" . mysqli_error($conn));

    mysqli_close($conn);

    echo "Registro atualizado com sucesso!";

}

function excluirContato()
{
	$conn = getConexao();

	$idContato = mysqli_real_escape_string($conn, $_GET['idContato']);

	$sql = "DELETE FROM contatos WHERE idContato= '{$idContato}'";

	mysqli_query($conn, $sql) or die("Erro ao excluir o registro. " . mysqli_error($conn));

	mysqli_close($conn);

	echo "Registro excluído com sucesso!";
	
}

/*function totalPages() {
	$conn = getConexao();

	$pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;

	$quantidade = 10; //registros por página
    $inicio = ($quantidade * $pagina) - $quantidade;

	$sql = "SELECT idContato FROM contatos";

	$result = mysqli_query($conn, $sql) or die("Erro ao recuperar dado do registro. ");
	$numTotal = mysqli_num_rows($result);

	mysqli_close($conn);

}*/

function searchContacts() {
	$conn = getConexao();

	$txt_pesquisa = (isset($_POST['txt_pesquisa']))?$_POST['txt_pesquisa']:"";
	//$pagina = (isset($_GET['pagina']))?(int)$_GET['pagina']:1;

	//$quantidade = 10; //registros por página
    //$inicio = ($quantidade * $pagina) - $quantidade; 

	$sql = "SELECT  
			idContato,
			nomeContato,
			emailContato,
			CONCAT('(', SUBSTR(telefoneContato, 1, 2), ') ', SUBSTR(telefoneContato, 3, 5), '-', SUBSTR(telefoneContato, 8, 4)) AS telefoneContato,
			CASE 
				WHEN sexoContato='F' THEN 'FEM'
				WHEN sexoContato='M' THEN 'MASC'
			ELSE
				'NÃO ESPECIFICADO'
			END AS sexoContato,
			DATE_FORMAT(dataNascContato, '%d/%m/%Y') AS dataNascContato
			FROM contatos
			WHERE idContato= '{$txt_pesquisa}' or
			nomeContato LIKE '{$txt_pesquisa}%' or
			emailContato LIKE '{$txt_pesquisa}%'
			ORDER BY nomeContato ASC
		";

	$result = mysqli_query($conn, $sql) or die("Erro ao pesquisar dados do registro. ");

	/*$num = catchLineId(); //numTotal
	$totalPages = $num/$quantidade;*/

	mysqli_close($conn);

	return $result;

}

?>