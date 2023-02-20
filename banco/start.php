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

	$conn = getConexao();

	$sql = "CREATE TABLE IF NOT EXISTS eventos(
    idEvento INT PRIMARY KEY AUTO_INCREMENT,
    nomeEvento VARCHAR(200) NOT NULL,
    descricaoEvento VARCHAR(100) NOT NULL,
    localEvento VARCHAR(200) NOT NULL,
    dataEvento DATE NOT NULL,
    horaEvento TIME NOT NULL,
    valorEvento DECIMAL NOT NULL,
    tipoEvento VARCHAR(200) NOT NULL,
    organizadorEvento VARCHAR(200) NOT NULL,
    telefoneEvento VARCHAR(60) NOT NULL,
    emailEvento VARCHAR(100) NOT NULL
	)";


	if (mysqli_multi_query($conn, $sql)) {
		echo "Table eventos created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);

	$conn = getConexao();

	$sql = "CREATE TABLE IF NOT EXISTS usuario(
		idUser INT PRIMARY KEY AUTO_INCREMENT,
		nomeUser VARCHAR(200) NOT NULL,
		emailUser VARCHAR(100) NOT NULL,
		telefoneUser VARCHAR(60) NOT NULL,
		sexoUser CHAR(1) NOT NULL,
		dataNascUser DATE NOT NULL,
		senhaUser VARCHAR(200) NOT NULL
	)";

	if (mysqli_multi_query($conn, $sql)) {
		echo "Table usuário created successfully";
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

	$conn = getConexao();
	$sql = "INSERT INTO eventos (nomeEvento, descricaoEvento, localEvento, dataEvento, horaEvento, valorEvento, tipoEvento, organizadorEvento, telefoneEvento, emailEvento)
	VALUES ('Festa de Aniversário', 'Festa de aniversário de 15 anos', 'Rua dos Bobos, 0', '2022-07-21', '20:00:00', '100,00', 'Festa', 'Maria', '41991594567', 'festa15@gmail.com')";

	if (mysqli_multi_query($conn, $sql)) {
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);

	$conn = getConexao();

	$sql = "INSERT INTO usuarios (nomeUser, emailUser)
		VALUES ('Aracy Almeida', 'aracy@gmail.com');";
	$sql .= "INSERT INTO contatos (telefoneUser, sexoUser, dataNascUser, senhaUser, confirmarSenha)
		VALUES ('41998765443', 'F', '18/03/1960', '123', '123');";


	if (mysqli_multi_query($conn, $sql)) {
		echo "New records created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}


?>