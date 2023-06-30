<?php

session_start();

//Recupero i file inviati tramite il form HTML in inserisci_libro.php

$title = $_POST['titolo'];
$ISBN = $_POST['ISBN'];
$lenght = $_POST['lunghezza'];
$date = $_POST['data'];
$name = $_POST['nome'];
$surname = $_POST['cognome'];
$rating = $_POST['rating'];
$image = "prova";

$xmlfile = "../XML/libri.xml";  //Percorso del file XML
$xmlstring = "";

// Il punto (.) prima dell'uguale (=) indica che stiamo concatenando il valore alla variabile anziché sostituire completamente il valore presente in esso.
// La funzione trim() viene utilizzata per rimuovere eventuali spazi bianchi iniziali o finali dal contenuto di ogni riga del file XML prima di concatenarlo alla variabile $xmlstring.

foreach(file($xmlfile) as $nodo){   //Leggo il contenuto del file XML

    $xmlstring.= trim($nodo); 
}

$documento = new DOMDocument();
$documento->loadXML($xmlstring);    //Carico il contenuto del file XML dentro $documento per poterlo manipolare tramite DOM

$libri = $documento->documentElement;   //Nodo radice del documento XML

$libro = $documento->createElement('book'); //Creo un nuovo elemento book il quale è composto da una sequenza di elementi

$titolo = $documento->createElement('titolo');
$autore = $documento->createElement('autore');
$nome = $documento->createElement('nome');
$cognome = $documento->createElement('cognome');
$lunghezza = $documento->createElement('lunghezza');
$data = $documento->createElement('data');
$img = $documento->createElement('img');

$titolo->nodeValue = $title;    //Assegno al nodo titolo il contenuto della variabile $title -> titolo preso dal form html 

//Controllo se il titolo inserito già esiste nel db

$titleExists = false;

//Scansiona i nodi 'book' esistenti nel documento XML

foreach ($libri->getElementsByTagName('book') as $existingBook0) {

    //Ottiengo il titolo del libro corrente
    //item(0) perché si presume ci sia solo un elemento 'titolo' && ->nodoValue restituisce il contenuto testuale all'interno dell'elemento titolo
    $existingTitle = $existingBook0->getElementsByTagName('titolo')->item(0)->nodeValue;    

    // Confronta il titolo del libro corrente con quello fornito dal form

    if ($existingTitle === $title) {

        $titleExists = true;
        break; // Esci dal ciclo se il titolo esiste già
    }
}

if ($titleExists) {

    $_SESSION['errore_t'] = true;
    header('Location: ../../inserisci_libro.php');
    exit();     //buon accorgimento per evitare che il resto del codice venga eseguito
} 

$libro->appendChild($titolo);   //Aggiungo il nodo $titolo come figlio del nodo book

//Faccio lo stesso per gli altri nodi figli del nodo book

$nome->nodeValue = $name;
$cognome->nodeValue = $surname;
$autore->appendChild($nome);
$autore->appendChild($cognome);
$libro->appendChild($autore);
$lunghezza->nodeValue = $lenght;
$data->nodeValue = $date;
$img->nodeValue = $image;

// Controllo se l'ISBN inserito già esiste nel db

$isbnExists = false;

// Scansiona i nodi 'book' esistenti nel documento XML

foreach ($libri->getElementsByTagName('book') as $existingBook1) {

    // Ottieni l'ISBN del libro corrente
    $existingISBN = $existingBook1->getAttribute('isbn');

    // Confronta l'ISBN del libro corrente con quello fornito dal form

    if ($existingISBN === $ISBN) {

        $isbnExists = true;
        break; // Esci dal ciclo se l'ISBN esiste già
    }
}

if ($isbnExists) {

    $_SESSION['errore_i'] = true;
    header('Location: ../../inserisci_libro.php');
    exit();     //buon accorgimento per evitare che il resto del codice venga eseguito
} 

$libro->setAttribute('isbn', $ISBN);    // Imposto l'attributo 'isbn' del nodo 'book' con il valore ottenuto dal form
$libro->setAttribute('rating', $rating);     // Imposto l'attributo 'rating' del nodo 'book' con il valore ottenuto dal form

$libro->appendChild($lunghezza);
$libro->appendChild($data);
$libro->appendChild($img);

$libri->appendChild($libro);    // Aggiungo il nodo

$documento->formatOutput = true;    //Formatta il documento XML per renderlo più leggibile
$xml = $documento->saveXML();   //saveXML è un metodo che restituisce il documento XML come una stringa di testo (formattata)

file_put_contents($xmlfile, $xml);  //sovrascrive il contenuto del vecchio file XML con quello nuovo

header('Location:../../homepage.php');

// Controllo se il titolo inserito già esiste nel db

?>
