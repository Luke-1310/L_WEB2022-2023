<?php
    session_start();

    if(isset($_COOKIE["tema"]) && $_COOKIE["tema"] == "scuro"){
        echo "<link rel=\"stylesheet\" href=\"res/CSS/external_rec_dark.css\" type=\"text/css\" />";
    }
    else{
        echo "<link rel=\"stylesheet\" href=\"res/CSS/external_rec.css\" type=\"text/css\" />";
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>La casa del libro: recensioni, letture... </title>
    
</head>

<body>
    <h1 class="titolo">RECENSIONI! </h1>

<?php
    if(isset($_COOKIE["tema"]) && $_COOKIE["tema"] == "scuro"){
        echo "<div class=\"home\">";
        echo "<a href = \"homepage.php\"><img src = \"res/IMG_GIF/home2.png\" alt=\"home.png\" width=\"10%\"/></a>";
        echo "</div>";
    }
    else{
        echo "<div class=\"home\">";
        echo "<a href = \"homepage.php\"><img src = \"res/IMG_GIF/home.png\" alt=\"home.png\" width=\"10%\"/></a>";
        echo "</div>";
    }
?> 

<div class="main">
    <h2>Benvenuti nella casa del libro!&#x1F4D6;</h2>
    <p>Ciao a tutti, siamo Luca ed Alessandra, se vi piace leggere allora siete nel posto giusto! Condivideremo con voi la nostra passione per la lettura.</p>
    <h2>Che tipo di lettori siamo?</h2>

</div> 

<div class="main">

    <h2>Cos'è per noi leggere?&#x1F4DA;</h2>
    <p>
        "Interrogo i libri e mi rispondono. Alcuni mi portano il riso sulle labbra o la consolazione nel cuore.
        Altri mi insegnano a conoscere me stesso" -Francesco Petrarca
    </p>

    <p>
        "Dimmi ciò che leggi e ti dirò chi sei' è vero; ma ti conoscerei meglio se mi dicessi quello che rileggi" -François Mauriac
    </p>
</div>

<hr/>
<div class="crediti">
    <p>Responsabili del sito: 
    <a href="mailto:privitera.1938225@studenti.uniroma1.it">privitera.1938225@studenti.uniroma1.it</a>    
    <a href="mailto:coluzzi.1912970@studenti.uniroma1.it">coluzzi.1912970@studenti.uniroma1.it</a>    
    </p>
</div>

</body>
</html>