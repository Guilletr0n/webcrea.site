<?php
  require_once ('../includes/View.php');
  $view = new View();
  $view->setlocale(LANG); ?>
<section class="references container-fluid grad3">
  <div class="row">
    <div class="col l6 padding-normal">
      <h2 class="title">
        <?=$view->translate('index.references.title')?>
      </h2>
      <p class="description">
        <?=$view->translate('index.references.description')?>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col l4 padding-normal">
      <div class="preview">
        <a href="https://www.peaks.fr" target="_blank" class="svg-preview-url">www.peaks.fr</a>
        <a href="https://www.peaks.fr" target="_blank"><img src="assets/images/references-peaks.png" /></a>
      </div>
      <div class="definition">
        <?=$view->translate('index.references.peaks.definition')?>
      </div>
    </div>
    <div class="col l4 padding-normal">
      <div class="preview">
        <a href="#" target="_blank" class="svg-preview-url">not yet online ...</a>
        <img src="assets/images/references-taskl-600.png" />
      </div>
      <div class="definition">
        <?=$view->translate('index.references.taskl.definition')?>
      </div>
    </div>
    <div class="col l4 padding-normal">
      <div class="preview">
        <a href="https://www.exo-skills.com" target="_blank" class="svg-preview-url">www.exo-skills.com</a>
        <a href="https://www.exo-skills.com" target="_blank"><img
            src="assets/images/references-exoskills-600.png" /></a>
      </div>
      <div class="definition">
        <?=$view->translate('index.references.exoskills.definition')?>
      </div>
    </div>
  </div>
</section>