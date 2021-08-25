<?php
/*
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare.
*/

// dichiaro la variabile contenente il paragrafo di testo 
$paragrafo = "Ambarabà ciccì coccò
tre scimmiette sul comò
che facevano timore
alla figlia del dottore;
il dottore si ammalò
ambarabà ciccì coccò!";

// Dichiaro la variabile contenente la lunghezza del paragrafo
$lunghezzaParagrafo = strlen($paragrafo);

// Stampo a schermo il paragrafo
echo $paragrafo;

// Stampo a schermo la frase contenente il dato relativo alla lunghezza
echo "<br> Il paragrafo ha una lunghezza di {$lunghezzaParagrafo} caratteri. <br>";

// Predispongo il passaggio della parola da censurare tramite parametro GET
$parolaDaCensurare = $_GET['censura'];

// Dichiaro la variabile contenente il paragrafo censurato e censuro/sostituisco
// tutte le occorrenze della $parolaDaCensurare con '***'
$paragrafoCensurato = str_ireplace($parolaDaCensurare, "***", $paragrafo);

// Stampo a schermo il nuovo paragrafo censurato
echo $paragrafoCensurato;

/*
esempio: http://localhost:8888/php-badwords/index.php?censura=timore

RISULTATO:
Ambarabà ciccì coccò tre scimmiette sul comò
che facevano *** alla figlia del dottore;
il dottore si ammalò ambarabà ciccì coccò!
*/
?>