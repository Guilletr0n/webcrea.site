<?php
require_once ('../includes/view.php');
$view = new View();
$view->setlocale(LANG);
?>
<header>
  <div class="logo"></div>
    <h1><?=$view->translate('index.header.tagline')?></h1>
  <p class="call-to-scroll">
    <?=$view->translate('index.header.scroll')?>
  </p>
</header>