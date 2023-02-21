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
	$sql = "";

	 $sql .= "CREATE TABLE IF NOT EXISTS contatos(
        idContato INT PRIMARY KEY AUTO_INCREMENT,
        nomeContato VARCHAR(200) NOT NULL,
        emailContato VARCHAR(100) NOT NULL,
        telefoneContato VARCHAR(60) NOT NULL,
        sexoContato CHAR(1) NOT NULL,
        dataNascContato DATE NOT NULL
    );";

    $sql .= "CREATE TABLE IF NOT EXISTS eventos(
        idEvento INT PRIMARY KEY AUTO_INCREMENT,
        nomeEvento VARCHAR(200) NOT NULL,
        localEvento VARCHAR(200) NOT NULL,
        dataEvento DATE NOT NULL,
        horaEvento TIME NOT NULL,
        tipoEvento VARCHAR(200) NOT NULL,
        organizadorEvento VARCHAR(200) NOT NULL
    );";

    $sql .= "CREATE TABLE IF NOT EXISTS usuario(
        idUser INT PRIMARY KEY AUTO_INCREMENT,
        nomeUser VARCHAR(200) NOT NULL,
        emailUser VARCHAR(100) NOT NULL,
        telefoneUser VARCHAR(60) NOT NULL,
        sexoUser CHAR(1) NOT NULL,
        dataNascUser DATE NOT NULL,
        senhaUser VARCHAR(200) NOT NULL
    );";

    $sql .= "CREATE TABLE IF NOT EXISTS eventos_contatos(
        id INT PRIMARY KEY AUTO_INCREMENT,
        idEvento INT NOT NULL,
        idContato INT NOT NULL,
        nomeContato VARCHAR(200) NOT NULL,
        emailContato VARCHAR(100) NOT NULL,
        telefoneContato VARCHAR(60) NOT NULL,
        FOREIGN KEY (idEvento) REFERENCES eventos(idEvento) ON DELETE CASCADE,
        FOREIGN KEY (idContato) REFERENCES contatos(idContato)
    );";

    if (mysqli_multi_query($conn, $sql)) {
        echo "Tables created successfully";
    } else {
        echo "Error creating tables: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}



function populaTabelas() {
	$conn = getConexao();
	$sql = "";

	$sql .= "INSERT INTO contatos (nomeContato, emailContato, telefoneContato, sexoContato, dataNascContato)
        VALUES ('Maria Silva', 'maria@gmail.com', '987654321', 'F', '1995-06-20');";

	$sql .= "INSERT INTO eventos (nomeEvento, descricaoEvento, localEvento, dataEvento, horaEvento, valorEvento, tipoEvento, organizadorEvento, telefoneEvento, emailEvento)
	VALUES ('Festa de Aniversário', 'Festa de aniversário de 15 anos', 'Rua dos Bobos, 0', '2022-07-21', '20:00:00', '100,00', 'Festa', 'Maria', '41991594567', 'festa15@gmail.com')";

	$sql .= "INSERT INTO usuarios (nomeUser, emailUser)
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