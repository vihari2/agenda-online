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
	$localEvento = mysqli_real_escape_string($conn, $_POST['localEvento']);
	$dataEvento = mysqli_real_escape_string($conn, $_POST['dataEvento']);
	$horaEvento = mysqli_real_escape_string($conn, $_POST['horaEvento']);
	$tipoEvento = mysqli_real_escape_string($conn, $_POST['tipoEvento']);
	$organizadorEvento = mysqli_real_escape_string($conn, $_POST['organizadorEvento']);
	$telefoneEvento = mysqli_real_escape_string($conn, $_POST['telefoneEvento']);

	
	$sql = "
		INSERT INTO eventos	(
			nomeEvento,
			localEvento,
			dataEvento,
			horaEvento,
			tipoEvento,
			organizadorEvento,
			telefoneEvento)
		VALUES (
			'$nomeEvento',
			'$localEvento',
			'$dataEvento',
			'$horaEvento',
			'$tipoEvento',
			'$organizadorEvento',
			'$telefoneEvento'
			)";

	mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));

	mysqli_close($conn);
	
	echo "Evento inserido com sucesso!";
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
	$localEvento = mysqli_real_escape_string($conn, $_POST['localEvento']);
	$dataEvento = mysqli_real_escape_string($conn, $_POST['dataEvento']);
	$horaEvento = mysqli_real_escape_string($conn, $_POST['horaEvento']);
	$tipoEvento = mysqli_real_escape_string($conn, $_POST['tipoEvento']);
	$organizadorEvento = mysqli_real_escape_string($conn, $_POST['organizadorEvento']);
	$telefoneEvento = mysqli_real_escape_string($conn, $_POST['telefoneEvento']);

	$sql = "
		UPDATE eventos SET
			nomeEvento = '$nomeEvento',
			localEvento = '$localEvento',
			dataEvento = '$dataEvento',
			horaEvento = '$horaEvento',
			tipoEvento = '$tipoEvento',
			organizadorEvento = '$organizadorEvento',
			telefoneEvento = '$telefoneEvento'
		WHERE idEvento = '$idEvento'
		";
	
	mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));
	mysqli_close($conn);
	return $dados;
}

function excluiEvento() {
    $conn = getConexao();
    
    if (isset($_GET['idEvento'])) {
        $idEvento = mysqli_real_escape_string($conn, $_GET['idEvento']);
        $sql = "DELETE FROM eventos WHERE idEvento = '$idEvento'";
        mysqli_query($conn, $sql) or die ("Erro ao executar a consulta" .mysqli_error($conn));
        mysqli_close($conn);
        
        echo "Evento excluído com sucesso!";
    } else {
        echo "ID do evento não foi informado.";
    }
}

function adicionarContatoAoEvento ($nomeEvento, $descricaoEvento, $localEvento, $dataEvento, $horaEvento, $valorEvento, $tipoEvento, $idContato) {
    $conn = getConexao();

    mysqli_autocommit($conn, false);

    $queryEvento = "INSERT INTO eventos (nomeEvento, descricaoEvento, localEvento, dataEvento, horaEvento, valorEvento, tipoEvento, idContato)
                VALUES ('$nomeEvento', '$descricaoEvento', '$localEvento', '$dataEvento', '$horaEvento', '$valorEvento', '$tipoEvento', $idContato)";
    $resultEvento = mysqli_query($conn, $queryEvento);

    $idEvento = mysqli_insert_id($conn);

    $queryContato = "SELECT nomeContato, emailContato, telefoneContato FROM contatos WHERE idContato = $idContato";
    $resultEventoContato = mysqli_query($conn, $queryContato);
    $contato = mysqli_fetch_assoc($resultEventoContato);
    $nomeContato = $contato['nomeContato'];
    $emailContato = $contato['emailContato'];
    $telefoneContato = $contato['telefoneContato'];
    $queryContato = "INSERT INTO eventos_contatos (idEvento, idContato, nomeContato, emailContato, telefoneContato)
                     VALUES ($idEvento, $idContato, '$nomeContato', '$emailContato', '$telefoneContato')";
    $resultEventoContato = mysqli_query($conn, $queryContato);

    if ($resultEvento && $resultEventoContato) {
        mysqli_commit($conn);
    } else {
        mysqli_rollback($conn);
    }
    mysqli_close($conn);
}


?>