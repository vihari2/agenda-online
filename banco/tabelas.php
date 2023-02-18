<?php
    require_once "config.php";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Conexão falhou! " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE contatos(
        idContato INT PRIMARY KEY,
        nomeContato VARCHAR(200) NOT NULL,
        emailContato VARCHAR(100) NOT NULL,
        telefoneContato VARCHAR(60) NOT NULL,
        sexoContato CHAR(1) NOT NULL,
        dataNascContato DATE NOT NULL,
        tagFavoritoContato TINYINT(1)
        )";

    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "INSERT INTO contatos (idContato, nomeContato, emailContato)
    VALUES ('14145', 'John Smith', 'john@gmail.com');";
    $sql .= "INSERT INTO contatos (telefoneContato, sexoContato, dataNascContato, tagFavoritoContato)
    VALUES ('', 'John Smith', 'john@gmail.com');";


    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "SELECT idContato, nomeContato, emailContato FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

    mysqli_close($conn);


?>

