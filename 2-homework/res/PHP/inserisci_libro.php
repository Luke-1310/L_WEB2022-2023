<?php

session_start();

require('connection.php');

$connessione = new mysqli($host, $user, $password, $db);

//real_escape_string() è una funzione usata per creare una stringa valida per SQL
$titolo = $connessione->real_escape_string($_POST['titolo']);
$ISBN = $connessione->real_escape_string($_POST['ISBN']);
$lunghezza = $connessione->real_escape_string($_POST['lunghezza']);
$data = $connessione->real_escape_string($_POST['data']);
$autore = $connessione->real_escape_string($_POST['autore']);
$img = $connessione->real_escape_string($_POST['img']);

$controllo_ISBN = "SELECT* FROM libro l WHERE l.ISBN13 = '$ISBN'"; 
$ris = mysqli_query($connessione, $controllo_ISBN);

if(mysqli_num_rows($ris) > 0){
    $_SESSION['errore'] = 'true';
    header('Location:../../inserisci_libro.php'); //header sono l'analogo degli href
    exit(1);
}

$controllo_titolo = "SELECT* FROM libro l WHERE l.titolo = '$titolo'";
$ris_t = mysqli_query($connessione, $controllo_titolo);

if(mysqli_num_rows($ris_t) > 0){
    $_SESSION['errore_t'] = 'true';
    header('Location:../../inserisci_libro.php');
    exit(1);
}

$sql = "INSERT INTO libro (titolo, ISBN13, lunghezza, data_uscita, immagine, autore) VALUES ('$titolo', '$ISBN', '$lunghezza', '$data', '$img', '$autore')";
$ins = mysqli_query($connessione, $sql);

header('Location:../../homepage.php');

?>