<?php
//$texto="";
 //recibe datos de formulario de texto
if(isset($_POST['submit'])){
	$texto = $_POST['name'];
}
//recibe datos de archivo de texto
if(isset($_POST['archivoTextoBtn'])){
	$texto = $textoArchivo;
}

//*****FUNCIONES PARA ANALIZAR LA CADENA***
ini_set('display_errors', 'Off');
$phrases=$texto;
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


function contarEspacios($texto){
	$espacios=0;
	for ($i=0; $i < strlen($texto) ; $i++) {
		if (substr($texto, $i,1)==" ") {
			$espacios++;
		}

	}
	return $espacios;
}

function contarPalabras($texto){
	$palabras=str_word_count($texto,0);
	return $palabras;
}

function contarPalSoloEspacios($texto){
	$palabra=0;
	for ($i=0; $i < strlen($texto) ; $i++) {
		if (substr($texto, $i,1)==" "){
			if (substr($texto, $i+1,1)!=" " OR substr($texto, $i+1,1)!="\n" OR substr($texto, $i+1,1)!="\t"){
				$palabra++;
			}
		}

	}
	return $palabra;
}

function contarLineas($texto){
	$exp = explode("\n", $texto);
	$lineas = count($exp);
	return $lineas;
}


function contarTabulacion($texto){
	$exp = explode("\t", $texto);
	$tabulaciones = count($exp);
	return $tabulaciones-1;
}
//IMPRIMIENDO RESULTADOS
echo " <div class=\"collection light-blue lighten-1\">
    <a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"\">".$texto."</span>El texto ingresado (sin formato): </a>
    <a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"Palabras\">".contarPalabras($texto)."</span>El texto contiene: </a>
    <a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"Espacios\">".contarEspacios($texto)."</span>El texto contiene: </a>
    <a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"Tabulacione\">".contarTabulacion($texto)."</span>El texto contiene: </a>
		<a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"Repetidas\">".contarPalRepetidas($texto)."</span>El texto contiene: </a>
    <a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"Saltos De Linea\">".contarLineas($texto)."</span>El texto contiene: </a>

  </div>";
?>
