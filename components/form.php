<?php
  require_once ('../includes/View.php');
  $view = new View();
  $view->setlocale(LANG); ?>
<form id="contactForm" class="container-fluid">
  <div class="row">
    <div class="col l6 offset-1">
    <h2 id="contactTitle" class="title"><?=$view->translate('index.contact.title')?></h2>
    <p id="formResponse"></p>
  </div>
  </div>
  <fieldset>
    <div class="row">
      <div class="col l4 offset-1">
        <input type="text" name="name" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
        <label alt="<?=$view->translate('index.contact.name')?>" placeholder="<?=$view->translate('index.contact.name')?>"></label>
        <br>
        <input type="email" name="email" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
        <label alt="<?=$view->translate('index.contact.email')?>" placeholder="<?=$view->translate('index.contact.email')?>"></label>
        <br>
      </div>
      <div class="col l6">
        <input id="submitButton" type="submit" class="btn-large waves-effect" value="<?=$view->translate('index.contact.submit')?>">
      </div>
    </div>
  </fieldset>
</form>