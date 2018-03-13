<div class="row">
      <form class="col s12" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="row">
          <div class="input-field col s6">
            <input id="input_text" type="text" data-length="10">
            <label for="input_text">Input text</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea name="textarea1" id="textarea1" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea1">Textarea</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>
      </form>
    </div>
          