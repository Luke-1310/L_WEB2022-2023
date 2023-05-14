Membri del gruppo: 

Alessandra Coluzzi - coluzzi.1912970@studenti.uniroma1.it
Luca Privitera - privitera.1938225@studenti.uniroma1.it

Repository:

Alessandra Coluzzi - https://github.com/Ale00coluzzi/L_WEB2022-2023
Luca Privitera - https://github.com/Luke-1310/L_WEB2022-2023

Descrizione:

L'esercizio di base è quello consegnato nel 1° homework ma con i dovuti aggiornamenti richiesti dalla traccia. 

Questo presenta diverse pagine in php tra cui un file chiamato "install.php" per far si che si possa creare il database nel caso in cui non fosse già presente.
È presente anche un file chiamato "connection.php" il quale viene richiamato ogni volta che bisogna connettersi al db per compiere delle operazioni.

Principali feature:

La possibilità di scegliere tra due temi per la visualizzazione del sito, realizzata tramite un cookie associato.

Sistema di registrazione e login per gli utenti con password criptate (hashing).

Funzione che permette agli utenti di inserire nuovi libri al db con tanto di copertina (campo BLOB).

Possibilità per gli utenti di effettuare recensioni dei libri presenti nel db.


I file sono stati distributi nel seguente modo:

pagine XHTML con script PHP
install.php
res

Entrando poi nella cartella "res" troviamo:

IMG_GIF (contiene le immagini utilizzate nel sito + le copertine di alcuni per poter effettuare i vari test)*
CSS (contiene i file CSS utilizzati)
PHP (contiene i file PHP)

*per effettuare le prove è necessario utilizzare il form del sito e NON inserire le immagini tramite INSERT su phpmyadmin poiché esse non verrano poi visualizzate correttamente

Una volta esportati i file essi dovranno essere inseriti nella cartella htdocs e saranno quindi pronti per essere utilizzati.

Di seguito sono forniti diversi record di prova:

UTENTI*

Username:	Luke
Email:	luke@gmail.com
Password:	123

Username:	Ale_Col
Email:	ale@gmail.com
Password:	123

*GLi utenti non sono stati inseriti fin da subito poiché le password sarebbero poi state inserite in chiaro nel db

LIBRI**:

Titolo: Il fotocane
ISBN13: 9788868364601
Lunghezza: 211
Data uscita: 01-02-2018
Immagine: copertina_cane.jpg
Autore: Stephen King

Titolo: Spy x Family 1
ISBN13:9788418271236
Lunghezza: 216
Data uscita: 05-06-2019
Immagine: copertina_spy.jpg
Autore: Tastuya Endo

Titolo: Novecento
ISBN13: 9783455000955
Lunghezza: 62
Data uscita: 1994
Immagine: copertina_900.jpg
Autore: Alessandro Baricco

Titolo: I fratelli Karamazov
ISBN13: 9788807900792
Lunghezza: 1114
Data uscita: 1879
Immagine: copertina_dost.jpg
Autore: Fedor Dostoevskij

**Come già detto le immagini dei libri di prova si trovano all'interno del seguente percorso "res/IMG_GIF", nel caso in cui si volessero effettuare prove con immagini non presenti nella cartella è consigliato vivamente di scaricare le copertine dal sito di Amazon poiché di dimensioni uguali a quelle prese in esempio (IL FORMATO DELLE IMMAGINI DEVE ESSERE ".jpg").

RECENSIONI***:

Titolo: Novecento
Recensione:	È il monologo "del più grande pianista che abbia mai suonato sull'Oceano", nato, vissuto e morto a bordo del piroscafo Virginian. Un uomo che non ha mai messo piede sulla terraferma. "La terra, quella è una nave troppo grande per me. È un viaggio troppo lungo. È una donna troppo bella. È un profumo troppo forte. È una musica che non so suonare. Perdonatemi. Ma io non scenderò. Lasciatemi tornare indietro. Per favore." Come tutte le storie di Baricco, anche questa è riuscita a catapultarmi all'interno della trama, come se stessi assistendo con i miei occhi e le mie orecchie agli spettacoli di Danny Boodman T.D. Lemon. Libro super consigliato!
Voto: 8

Titolo: Il fotocane
Recensione: Semplicemente il libro che mi ha ravvicinato al mondo della lettura. Questo libro racconta la storia di Kevin, il quale per il suo quindicesimo compleanno riceve in regalo una macchinetta fotografica, fino a qui tutto normale no? Beh, ecco, peccato che quella macchinetta in realtà invece di fotografare il soggetto che si vuole immortalare fotografa un cane a dir poco spaventoso che foto dopo foto si avvicina sempre di più e sembra quasi uscire dalla fotografia! Quindi come puoi immaginare è a dir poco spaventoso, da leggere rigorosamente dopo le quattro di notte come da titolo della collona di cui ne fa parte!
Voto 8.5

Titolo: Spy x Family 1 
Recensione: Pensavo fosse un manga passeggero, uno dei tanti, ed invece questo fumetto mi ha davvero conquistato! Esso racconta la storia di una spia, Twilight, che per compiere la sua missione si ritrova costretto ad inscenare una falsa famiglia insieme ad una moglie assassina e ad una figlia telepate! Il bello di questa strana famiglia è che nessuno dei membri conosce la vera identità dell'altro ed è proprio questo il punto focale del manga, cioè che alla fine della fiera nessuno conosce davvero chi gli sta accanto. La storia dei protagonisti è poi condita con scene comiche al limite del surreale rendendo quindi l'opera a tratti molto leggera ma a tratti molto profonda e riflessiva. Estremamente consigliato!
Voto 9.5

Titolo: I fratelli Karamazov
Recensione: Da leggere assolutamente. Per Dostoevskij, Hermann Hesse scriveva: "Egli ha quella conoscenza della felicità, della saggezza e dell'armonia, che però non si trovano lungo facili sentieri, ma lampeggiano a tratti lungo la via che costeggia l'abisso, che non si colgono sorridendo, ma solo tra lacrime ed esausti di dolore. (...) Ci sono dei punti in cui, da un mare di miseria e di squallore, si accende, commovente, infantile e delicato oltre ogni dire, qualcosa che è come l'intuizione del senso del mondo, come la certezza di una redenzione". Ed è infatti così che Dostoevskij riesce a descrivere i fratelli al lettore, in maniera profonda facendolo entrare all'interno della psicologia dei personaggi e delle vicende che li riguardano.
Voto: 9.5

***Nell'inserimento delle recensioni è obbligatorio inserire il titolo del libro che si vuole recensire, di conseguenza biosgna prima inserire il libro in questione (dopo essersi loggati).


🐈