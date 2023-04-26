<?php

require_once('config.php');

//real_escape_string() è una funzione usata per creare una stringa valida per SQL
$username = $connessione->real_escape_string($_POST['username']);
$email = $connessione->real_escape_string($_POST['email']);
$password = $connessione->real_escape_string($_POST['password']);

//fare controllo se esiste tramite query con mysql
//fare controllo delle password se uguali in fase di registrazione


$sql = "INSERT INTO utente (username, email, password) VALUES ('$username', '$email', '$password')";

if($connessione->query($sql) === true){
    echo "Registrazione effettuata con successo";
}
else{
    echo "Errore durante registrazione utente $sql. " .$connessione->error;
}



?>