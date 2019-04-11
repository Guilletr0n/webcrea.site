<?php

require '../vendor/autoload.php';

use Sinergi\BrowserDetector\Language;

$language = new Language();

define ('LANG', $language->getLanguage());

switch ($language->getLanguage()) {
  case 'es':
  header('Location: index-es-ES.php');
  break;
  case 'fr';
  header('Location: index-fr-FR.php');
  break;
  default:
  header('Location: index-en-EN.php');
  break;
}
