<?php

session_start();

require('config.php');

$connessione = new mysqli($host, $user, $password, $db);

//real_escape_string() è una funzione usata per creare una stringa valida per SQL
$username = $connessione->real_escape_string($_POST['username']);
$password = $connessione->real_escape_string($_POST['password']);

//fare controllo se esiste email tramite query con mysql
//fare controllo delle password se uguali in fase di registrazione

$controllo = "SELECT* FROM utente u WHERE u.username = '$username' AND u.password = '$password'"; 

$ris = mysqli_query($connessione, $controllo);

    if(mysqli_num_rows($ris) === 1){
        $_SESSION['loggato'] = 'true';
        $_SESSION['nome'] = "$username";
        header('Location:../../homepage.php'); //header sono l'analogo degli href
        exit(1);
    }
    else{
        $_SESSION['errore'] = 'true';
        header('Location:../../login.php'); //header sono l'analogo degli href
        exit(1);
    }


?>