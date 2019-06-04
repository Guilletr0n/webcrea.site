<?php
  require_once ('../includes/View.php');
  $view = new View();
  $view->setlocale(LANG);
?>
<section class="container-fluid main">
  <div class="row">
    <div class="col l6">
      <h2 class="title">
        <?=$view->translate('index.main.title')?>
      </h2>
      <p class="content">
        <?=$view->translate('index.main.content')?>
      </p>
    </div>
  </div>
</section>
