<?php
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>La casa del libro: recensioni, letture... </title>
    <link rel="stylesheet" href="res/CSS/external_log.css" type="text/css" />
</head>

<body style="background-color: rgb(246, 218, 190);">
    <h1 class="titolo">PAGINA DI LOGIN</h1>

<div class="home">
    <a href = "homepage.php"><img src = "res/IMG_GIF/home.png" alt="home.png" width="10%"/></a>
</div>

<form action = "res/PHP/login.php" method="POST">
    <h2>Esegui l'accesso</h2>

    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <span class ="bottone"><input type="submit" value="Invia">
    </span>

    <p>Non sei registrato? Fai la <a href="register.php">registrazione</p></a>
</form>


<hr/>
<div class="crediti">
    <p>Responsabili del sito: 
    <a href="mailto:privitera.1938225@studenti.uniroma1.it">privitera.1938225@studenti.uniroma1.it</a>    
    <a href="mailto:coluzzi.1912970@studenti.uniroma1.it">coluzzi.1912970@studenti.uniroma1.it</a>    
    </p>
</div>

</body>
</html>