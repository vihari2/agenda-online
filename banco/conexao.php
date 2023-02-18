<?php
include("config.php"); 

// Conecta ao banco de dados 

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Conexão falhou! " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE $dbname";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


?>
