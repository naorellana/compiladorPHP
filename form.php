<?php
 
if(isset($_POST['submit']))
 
{
 
$texto = $_POST['name'];
echo "Cadena enviada en el formulario : <b> $texto </b>";


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


echo "<br>Puede ingresar un nuevo texto en el formulario";
echo "Espacios : " . contarEspacios($texto);
echo "Lineas: ". contarLineas($texto); 
echo "Tabulaciones: ". contarTabulacion($texto);
echo "Palabras: ". contarPalabras($texto);
echo "Palabra De dios: ". contarPalSoloEspacios ($texto);
}
 
?>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
<!--<input type="text" name="name"><br>-->
<textarea name="name" id="" cols="30" rows="10"></textarea>
 
<input type="submit" name="submit" value="Submit Form"><br>

 
</form>