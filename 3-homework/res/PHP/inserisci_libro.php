<?php

session_start();

$title = $_POST['titolo'];
$ISBN = $_POST['ISBN'];
$lenght = $_POST['lunghezza'];
$date = $_POST['data'];
$name = $_POST['nome'];
$surname = $_POST['cognome'];
$rating = $_POST['rating'];
$image = "prova";

$xmlfile = "../XML/libri.xml";
$xmlstring = "";


foreach(file($xmlfile) as $nodo){

    $xmlstring.= trim($nodo);

}

$documento = new DOMDocument();
$documento->loadXML($xmlstring);

// if (file_exists($xmlfile)) {
//     // Carica il file XML esistente se presente
//     $documento->load($xmlfile);
// } else {
//     // Crea un nuovo documento XML se il file non esiste
//     $documento->appendChild($documento->createElement('libri'));
// }

$libri = $documento->documentElement;

$libro = $documento->createElement('book');

$titolo = $documento->createElement('titolo');
$autore = $documento->createElement('autore');
$nome = $documento->createElement('nome');
$cognome = $documento->createElement('cognome');
$lunghezza = $documento->createElement('lunghezza');
$data = $documento->createElement('data');
$img = $documento->createElement('img');

$titolo->nodeValue = $title;

$libro->appendChild($titolo);

$nome->nodeValue = $name;
$cognome->nodeValue = $surname;
$autore->appendChild($nome);
$autore->appendChild($cognome);
$libro->appendChild($autore);
$lunghezza->nodeValue = $lenght;
$data->nodeValue = $date;
$img->nodeValue = $image;

$libro->setAttribute('isbn', $ISBN);
$libro->setAttribute('rating', $rating);

$libro->appendChild($lunghezza);
$libro->appendChild($data);
$libro->appendChild($img);

$libri->appendChild($libro);

$documento->formatOutput = true;
$xml = $documento->saveXML();

file_put_contents($xmlfile, $xml);

// Controllo se l'ISBN inserito già esiste nel db
// Controllo se il titolo inserito già esiste nel db

?>
