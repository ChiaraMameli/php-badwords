<?php 
// Creiamo una variabile con un paragrafo di testo a scelta.
$paragraph = 'Don Abbondio stava su una vecchia seggiola, ravvolto in una vecchia zimarra, con in capo una vecchia papalina. ';
echo $paragraph;

// Stampiamo a schermo il paragrafo e la sua lunghezza.
echo strlen($paragraph);

echo '<br></br>';

// Recuperiamo la parola da censurare via PHP e sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.

$censored_word = $_GET['word'];
echo $censored_paragraph = str_replace($censored_word, '*', $paragraph);
echo strlen($censored_paragraph);
