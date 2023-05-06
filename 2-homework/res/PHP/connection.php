<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "homework_lweb";

// Crea la connessione col server
$conn = new mysqli($host, $user, $password);

//Controllo sulla connessione
if($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Chiude la connessione al database
$conn->close();

?>