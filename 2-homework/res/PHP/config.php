<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "homework_lweb";

$connessione = new mysqli($host, $user, $password, $db);

if($connessione === false){ //confronta il tipo oltre che al contenuto
    die("Errore durante la connessione: " . $connessione->connect_error);
}

?>