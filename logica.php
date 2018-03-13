<?php
 //recibe datos de formulario
if(isset($_POST['submit'])){
	$texto = $_POST['name'];
}
else{
	$texto="";
}


//*****FUNCIONES PARA ANALIZAR LA CADENA***
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
	return $lineas-1;
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
    <a class=\"collection-item \"><span class=\"new badge light-blue lighten-1\" data-badge-caption=\"Saltos De Linea\">".contarLineas($texto)."</span>El texto contiene: </a>

  </div>";
?>


