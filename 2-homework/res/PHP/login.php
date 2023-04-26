<?php

session_start();

require_once('config.php');

$connessione = new mysqli($host, $user, $password, $db);

//real_escape_string() è una funzione usata per creare una stringa valida per SQL
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

//fare controllo se esiste email tramite query con mysql
//fare controllo delle password se uguali in fase di registrazione

$controllo = "SELECT* FROM utente u WHERE u.username = '$username'"; 
$ris = mysqli_query($connessione, $controllo);

if(mysqli_num_rows($ris) > 0){
    $_SESSION['errore'] = 'true';
    header('Location:../../register.php'); //header sono l'analogo degli href
    exit(1);
}

$controllo_email = "SELECT* FROM utente e WHERE e.email = '$email'";
$ris_e = mysqli_query($connessione, $controllo_email);

if(mysqli_num_rows($ris_e) > 0){
    $_SESSION['errore_e'] = 'true';
    header('Location:../../register.php');
    exit(1);
}

$_SESSION['nome'] = $nome_u;

header('Location:../../login.php');

?>