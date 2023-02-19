<?php

function listaEventos()
{ $conn = getConexao();
	$sql = "SELECT * FROM eventos";
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);

	return $result;	
}

function adicionaEvento() {	
	$conn = getConexao();

	$nomeEvento = mysqli_real_escape_string($conn, $_POST['nomeEvento']);
	$descricaoEvento = mysqli_real_escape_string($conn, $_POST['descricaoEvento']);
	$localEvento = mysqli_real_escape_string($conn, $_POST['localEvento']);
	$dataEvento = mysqli_real_escape_string($conn, $_POST['dataEvento']);
	$horaEvento = mysqli_real_escape_string($conn, $_POST['horaEvento']);
	$valorEvento = mysqli_real_escape_string($conn, $_POST['valorEvento']);
	$tipoEvento = mysqli_real_escape_string($conn, $_POST['tipoEvento']);
	$organizadorEvento = mysqli_real_escape_string($conn, $_POST['organizadorEvento']);
	$telefoneEvento = mysqli_real_escape_string($conn, $_POST['telefoneEvento']);
	$emailEvento = mysqli_real_escape_string($conn, $_POST['emailEvento']);

	
	$sql = "
		INSERT INTO eventos	(
			nomeEvento,
			descricaoEvento,
			localEvento,
			dataEvento,
			horaEvento,
			valorEvento,
			tipoEvento,
			organizadorEvento,
			telefoneEvento,
			emailEvento)
		VALUES (
			'$nomeEvento',
			'$descricaoEvento',
			'$localEvento',
			'$dataEvento',
			'$horaEvento',
			'$valorEvento',
			'$tipoEvento',
			'$organizadorEvento',
			'$telefoneEvento',
			'$emailEvento'
			)";

	mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));

	mysqli_close($conn);
	
	echo "Contato inserido com sucesso!";
}

function buscaEventoPorId($idEvento) {
  $conn = getConexao();
  $query = "SELECT * FROM eventos WHERE idEvento = $idEvento";
  $resultado = mysqli_query($conn, $query);

  if ($resultado) {
    $evento = mysqli_fetch_assoc($resultado);
    return $evento;
  } else {
    return null;
  }
}

function atualizaEvento($idEvento)
{
	$conn = getConexao();
	$sql = "SELECT * FROM eventos WHERE idEvento = $idEvento";
    $rs = mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));
    $dados  = mysqli_fetch_array($rs);

	$nomeEvento = mysqli_real_escape_string($conn, $_POST['nomeEvento']);
	$descricaoEvento = mysqli_real_escape_string($conn, $_POST['descricaoEvento']);
	$localEvento = mysqli_real_escape_string($conn, $_POST['localEvento']);
	$dataEvento = mysqli_real_escape_string($conn, $_POST['dataEvento']);
	$horaEvento = mysqli_real_escape_string($conn, $_POST['horaEvento']);
	$valorEvento = mysqli_real_escape_string($conn, strval($_POST['valorEvento']));
	$tipoEvento = mysqli_real_escape_string($conn, $_POST['tipoEvento']);
	$organizadorEvento = mysqli_real_escape_string($conn, $_POST['organizadorEvento']);
	$telefoneEvento = mysqli_real_escape_string($conn, $_POST['telefoneEvento']);
	$emailEvento = mysqli_real_escape_string($conn, $_POST['emailEvento']);

	$sql = "
		UPDATE eventos SET
			nomeEvento = '$nomeEvento',
			descricaoEvento = '$descricaoEvento',
			localEvento = '$localEvento',
			dataEvento = '$dataEvento',
			horaEvento = '$horaEvento',
			valorEvento = '$valorEvento',
			tipoEvento = '$tipoEvento',
			organizadorEvento = '$organizadorEvento',
			telefoneEvento = '$telefoneEvento',
			emailEvento = '$emailEvento'
		WHERE idEvento = '$idEvento'
		";
	
	mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));
	mysqli_close($conn);
	echo "Evento atualizado com sucesso!";
	return $dados;
}

function excluiEvento()
{
	$conn = getConexao();
	$idEvento = mysqli_real_escape_string($conn, $_POST['idEvento']);
	$sql = "DELETE FROM eventos WHERE idEvento = '$idEvento'";

	mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));
	mysqli_close($conn);
	echo "Evento excluído com sucesso!";

}

?>