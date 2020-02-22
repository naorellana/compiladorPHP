<?php
ini_set('display_errors', 'Off');
function contarPalRepetidas($phrases) {
  $counts = array();
  foreach ($phrases as $phrase) {
    $words = explode(' ', $phrase);
    foreach ($words as $word) {
      $word = preg_replace("#[^a-zA-Z\-]#", "", $word);
      $counts[$word] += 1;
    }
  }
  return print_r($counts);
}

$phrases = array("Hola Buenos Días, estamos en la clase de Compiladores
El día 15 de Febrero de 20202 en la clase de
arquitectura por que la calse estaba aburrida todos Nos queriamos
retirar y empezamos a molestar y el ING. dio por terminada la clase y nos sacó");

$counts = contarPalRepetidas($phrases);
//echo("test: ". arsort($counts));
//print_r($counts);
echo $counts;
?>
