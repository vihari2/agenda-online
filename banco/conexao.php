<?php
include("config.php"); 


function getConexao() {
	$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

	if(!$conn) {
	    die("Conexão falhou! " . mysqli_connect_error());
	}

	return $conn;
}

?>
