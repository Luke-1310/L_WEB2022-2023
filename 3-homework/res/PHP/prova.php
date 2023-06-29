<?php


$xmlfile = "../XML/libri.xml";
$xmlstring = "";


foreach(file($xmlfile) as $nodo){

    $xmlstring.= trim($nodo);

}

$doc = new DOMDocument();

$doc->loadXML($xmlstring);

echo $xmlstring;

?>