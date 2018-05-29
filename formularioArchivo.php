<?php //include("includes/../header.php"); ?>

<br>  
<br>  
  <div class="row">
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
      <div class="col l11 s9">
        <div class="file-field input-field">
      <div class="btn">
        <span>Archivo</span>
        <input type="file" id="exampleFormControlFile1" name="archivo[]">

      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      </div>
      <div class="col l1 s3">
        <button class="waves-effect waves-light btn-large" value="Enviar"> Subir </button>
      </div>
      </form>
    </div>
