<div>
	<?php //require_once ("header.php"); ?>
</div>
<div class="bg-light">
	<?php require_once ("formularioArchivo.php"); ?>
</div>
<div class="bg-light">
	<?php //require_once ("validaArchivo.php"); ?>
</div>

    <?php
    $textoArchivo="";
    $ar="";
    #source https://www.lawebdelprogramador.com/codigo/PHP/2580-Subir-uno-o-varios-archivos-al-servidor-y-mover-los-a-una-carpeta.html
    # definimos la carpeta destino
    $carpetaDestino="dataTemp/";
 	try {
    # si hay algun archivo que subir
    if($_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de imagen ver m'as formatos en: http://www.freeformatter.com/mime-types-list.html 
            if($_FILES["archivo"]["type"][$i]=="text/html" || $_FILES["archivo"]["type"][$i]=="text/plain" || $_FILES["archivo"]["type"][$i]=="application/pdf" || $_FILES["archivo"]["type"][$i]=="text/csv
                " || $_FILES["archivo"]["type"][$i]=="application/vnd.ms-excel" || $_FILES["archivo"]["type"][$i]=="text/json" || $_FILES["archivo"]["type"][$i]=="application/vnd.ms-excel.addin.macroenabled.12" || $_FILES["archivo"]["type"][$i]=="application/vnd.ms-excel.sheet.macroenabled.12" || $_FILES["archivo"]["type"][$i]=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $_FILES["archivo"]["type"][$i]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $_FILES["archivo"]["type"][$i]=="application/msword" || $_FILES["archivo"]["type"][$i]=="application/xml" || $_FILES["archivo"]["type"][$i]=="application/xhtml+xml" || $_FILES["archivo"]["type"][$i]=="text/xml" || $_FILES["archivo"]["type"][$i]=="application/json") 

                

                
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                    	$ar=$_FILES["archivo"]["name"][$i];
                        echo "<div class='alert alert-success' role='alert'> "
						  .$_FILES['archivo']['name'][$i]." - EL archivo Se Cargo Exitosamente
						</div>";
                    }else{
                        echo "<div class='alert alert-warning' role='alert'>
						  No se ha podido mover el archivo:" .$_FILES['archivo']['name'][$i]. "
						</div>"; 
                    }
                }else{
                    echo "No se ha podido crear la carpeta: up/".$user;
                }
            }else{
            	echo "<div class='alert alert-danger' role='alert'> "
						  .$_FILES['archivo']['name'][$i]." - FORMATO NO VALIDO (PDF, TXT, HTML, CSV, XLSX, DOCX, XML)
						</div>"; 
            }
        }
    }else{
        echo "<div class='alert alert-warning' role='alert'>
  No se ha subido ningun archivo de texto
</div>";
    }
 		} catch (Exception $e) {
	
	}   
$textoArchivo = file_get_contents("dataTemp/".$ar); 
$palabra="";
$texto=$textoArchivo;
//require_once ("logica.php");
echo $texto;
    ?>

