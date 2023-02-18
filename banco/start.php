<?php
require_once "conexao.php";


criaBanco();
criaTabelas();
populaTabelas();

function criaBanco() {
	
	$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD);

	if(!$conn) {
	    die("Conexão falhou! " . mysqli_connect_error());
	}

	$sql = "CREATE DATABASE IF NOT EXISTS " . DBNAME;
	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . mysqli_error($conn);
	}    

	mysqli_close($conn);
}


function criaTabelas() {
	$conn = getConexao();

	//  criacao de outras tabelas
	

	$sql = "CREATE TABLE IF NOT EXISTS contatos(
		idContato INT PRIMARY KEY AUTO_INCREMENT,
		nomeContato VARCHAR(200) NOT NULL,
		emailContato VARCHAR(100) NOT NULL,
		telefoneContato VARCHAR(60) NOT NULL,
		sexoContato CHAR(1) NOT NULL,
		dataNascContato DATE NOT NULL,
		tagFavoritoContato TINYINT(1)
	)";

	if (mysqli_multi_query($conn, $sql)) {
		echo "Table contatos created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);
}

function populaTabelas() {
	$conn = getConexao();

	$sql = "INSERT INTO contatos (nomeContato, emailContato)
		VALUES ('John Smith', 'john@gmail.com');";
	$sql .= "INSERT INTO contatos (telefoneContato, sexoContato, dataNascContato, tagFavoritoContato)
		VALUES ('', 'John Smith', 'john@gmail.com');";


	if (mysqli_multi_query($conn, $sql)) {
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}


?>