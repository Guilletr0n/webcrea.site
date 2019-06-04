<?php

require '../vendor/autoload.php';
require '../includes/view.php';

use Sinergi\BrowserDetector\Language;

$language = new Language();

define ('LANG', $language->getLanguage());

$view = new View();
$view->setlocale(LANG);

$view->component('head');

$view->component('hero',[
  'greetings'=>'hello world',
  'locales' => [
    'content' => $view->translate('page.section.content')
    ]
  ]);
  print '<article>';
  $view->component('about');
  $view->component('references');
  $view->component('form');
?>  
</article>
<script>
  var form = document.getElementById("contactForm");
  var FD = new FormData(form);
  var isMobile = window.matchMedia("(max-width: 1186px)");

  // Send form data to mailer.php using XMLHttpRequest

  function sendForm(data) {

  // On successful data submission
  let XHR = new XMLHttpRequest();

  XHR.addEventListener('load', function(event) {
    document.getElementById("contactTitle").classList.toggle("fade-out");
    document.getElementById("submitButton").classList.toggle("fade-out");
    document.getElementById('formResponse').innerHTML = "<?=$view->translate('index.contact.message')?>";
  });

  XHR.addEventListener('error', function(event) {
    // FormError
    console.log('error');
  });

  XHR.open('POST', 'mailer.php');
  XHR.send(data);
  }

  // Manages the form event onSubmit and send data

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    var formData = new FormData(document.getElementById('contactForm'));
    document.getElementById("submitButton").classList.toggle("hide");
    sendForm(formData);
  });

  // helper functions

  function toggleClass(elID, className) {
    document.getElementById(elID).classList.toggle(className);
  }

</script>




