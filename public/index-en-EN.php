<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <header>
        <div class="logo"></div>
          <h1>Webdesign & Front-end Development</h1>
        <div class="languages">
          <ul>
            <li><a href="index-es-ES.php">Español</a></li>
            <li><a href="index-fr-FR.php">Francais</a></li>
            <li><a href="index-en-EN.php">English</a></li>
          </ul>
        </div>
        <p class="call-to-scroll">Scroll Down</p>
      </header>
      <section class="container-fluid main">
        <div class="row">
          <div class="col-12 col-sm-6 offset-sm-1">
            <h2 class="title">About me</h2>
            <h3 class="content">My passion for human interfaces led me to work as Flash(✝ 2016) developer for a decade, later I moved to open standards and webdesign. Most of my career passed in France for Agencies and start-ups. At the end of 2018 I started to offer my services as freelance.</h3>
          </div>
        </div>

      </section>
      <section class="container-fluid">
        <div class="row references grad3">
          <div class="col-12 offset-sm-1">
            <h2 class="title">References</h2>
            <h3 class="description">Proudly I present a brief list with my last works</h3>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="https://www.peaks.fr" target="_blank" class="svg-preview-url">www.peaks.fr</a>
              <a href="https://www.peaks.fr" target="_blank"><img src="assets/images/references-peaks.png"/></a>
            </div>
            <div class="definition">
              Wordpress theme creation for recruitment Agency. Also was neccessary to create a simple interface to access a MySQL database with job offers and make possible for visitors to apply.
            </div>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="#" target="_blank" class="svg-preview-url">Not yet online ...</a>
              <img src="assets/images/references-taskl-600.png"/>
            </div>
            <div class="definition">
              One page site created in plain html as static site. Use of gulp plugins to generate different versions for each language.
            </div>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="https://www.exo-skills.com" target="_blank" class="svg-preview-url">www.exo-skills.com</a>
              <a href="https://www.exo-skills.com" target="_blank"><img src="assets/images/references-exoskills-600.png"/></a>
            </div>
            <div class="definition">
              Static website update using bootstrap and svg animations
            </div>
          </div>
        </div>
      </section>
      <form id="contactForm" class="container-fluid">
        <div class="row">
          <div class="col-12 offset-sm-1">
          <h2>Let's get in contact</h2>
          <h3 id="contactTitle">Fill your address and you will receive an email</h3>
          <p id="formResponse"></p>
        </div>
        </div>
        <fieldset>
          <div class="row">
            <div class="col-4 offset-sm-1">
              <input type="text" name="name" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
              <label alt="name" placeholder="name"></label>
              <br>
              <input type="email" name="email" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
              <label alt="email" placeholder="email"></label>
              <br>
            </div>
            <div class="col-6">
              <input id="submitButton" type="submit" class="btn-large waves-effect" value="SEND">
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
          document.getElementById('formResponse').innerHTML = "The form has been sent with success :-)";
          console.log("success");
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
