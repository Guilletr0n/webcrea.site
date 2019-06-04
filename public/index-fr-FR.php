<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/images/faviconassets/css/main.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <header>
        <div class="logo"></div>
          <h1>Webdesign & Développeur Front-End</h1>
        <div class="languages">
          <ul>
            <li><a href="index-es-ES.php">Español</a></li>
            <li><a href="index-fr-FR.php">Francais</a></li>
            <li><a href="index-en-EN.php">English</a></li>
          </ul>
        </div>
        <p class="call-to-scroll">Scroll pour continuer ...</p>
      </header>
      <section class="container-fluid main">
        <div class="row">
          <div class="col-12 col-sm-6 offset-sm-1">
            <h2 class="title">Qui c'est moi</h2>
            <h3 class="content">Ma passion pour les interfaces humaines fait de moi un développeur Flash(✝ 2016) pendant un décenie, avec l'arrivée de HTML5 j'ai changé pour les standards ouvers et le webdesign. La plus part de ma carrière est passé en la France en travaillant pour des agenceset start-ups. Vers la fin de 2018 je me suis lancé comme auto-entrepreneur.</h3>
          </div>
        </div>

      </section>
      <section class="container-fluid">
        <div class="row references grad3">
          <div class="col-12 offset-sm-1">
            <h2 class="title">Mes references</h2>
            <h3 class="description">Voici un échantillon de mes dérnières réalisation a partir de 2018</h3>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="https://www.peaks.fr" target="_blank" class="svg-preview-url">www.peaks.fr</a>
              <a href="https://www.peaks.fr" target="_blank"><img src="assets/images/references-peaks.png"/></a>
            </div>
            <div class="definition">
              Création d'un thème de Wordpress pour une agence de recrutement et SSII. Il a fallu aussi mettre en place un access a l'ancien base de donnèes MySQL avec les offres d'emploi et un formulaire pour postuler.
            </div>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="#" target="_blank" class="svg-preview-url">Not yet online ...</a>
              <img src="assets/images/references-taskl-600.png"/>
            </div>
            <div class="definition">
              Site d'un seule page en html statique. Utilisation de gulp pour la génération de diferentes versions de chaque language.
            </div>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="https://www.exo-skills.com" target="_blank" class="svg-preview-url">www.exo-skills.com</a>
              <a href="https://www.exo-skills.com" target="_blank"><img src="assets/images/references-exoskills-600.png"/></a>
            </div>
            <div class="definition">
              Intégration de site web statique avec bootstrap et des animations svg
            </div>
          </div>
        </div>
      </section>
      <form id="contactForm" class="container-fluid">
        <div class="row">
          <div class="col-12 offset-sm-1">
          <h2>Faissons connaisance</h2>
          <h3 id="contactTitle">Donnez moi votre e-mail et vous receverez mes infos de contact</h3>
          <p id="formResponse"></p>
        </div>
        </div>
        <fieldset>
          <div class="row">
            <div class="col-4 offset-sm-1">
              <input type="text" name="name" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
              <label alt="nom" placeholder="nom"></label>
              <br>
              <input type="email" name="email" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
              <label alt="email" placeholder="email"></label>
              <br>
            </div>
            <div class="col-6">
              <input id="submitButton" type="submit" class="btn-large waves-effect" value="ENVOYER">
            </div>
          </div>
        </fieldset>
      </form>

      <footer>
      </footer>
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
          document.getElementById('formResponse').innerHTML = "Le formulaire est envoyé correctement :-)";
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
    </body>
</html>
