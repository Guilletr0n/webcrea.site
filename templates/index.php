<!doctype html>
<html class="no-js" lang="${{ index.header.language }}$">
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
          <h1>${{ index.header.tagline }}$</h1>
        <div class="languages">
          <ul>
            <li><a href="index-es-ES.php">Español</a></li>
            <li><a href="index-fr-FR.php">Francais</a></li>
            <li><a href="index-en-EN.php">English</a></li>
          </ul>
        </div>
        <p class="call-to-scroll">${{ index.header.scroll }}$</p>
      </header>
      <section class="container-fluid main">
        <div class="row">
          <div class="col-12 col-sm-6 offset-sm-1">
            <h2 class="title">${{ index.main.title }}$</h2>
            <h3 class="content">${{ index.main.content }}$</h3>
          </div>
        </div>

      </section>
      <section class="container-fluid">
        <div class="row references grad3">
          <div class="col-12 offset-sm-1">
            <h2 class="title">${{ index.references.title }}$</h2>
            <h3 class="description">${{ index.references.description }}$</h3>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="https://www.peaks.fr" target="_blank" class="svg-preview-url">www.peaks.fr</a>
              <a href="https://www.peaks.fr" target="_blank"><img src="assets/images/references-peaks.png"/></a>
            </div>
            <div class="definition">
              ${{ index.references.peaks.definition }}$
            </div>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="#" target="_blank" class="svg-preview-url">Not yet online ...</a>
              <img src="assets/images/references-taskl-600.png"/>
            </div>
            <div class="definition">
              ${{ index.references.taskl.definition }}$
            </div>
          </div>
          <div class="col-4 padding-normal">
            <div class="preview">
              <a href="https://www.exo-skills.com" target="_blank" class="svg-preview-url">www.exo-skills.com</a>
              <a href="https://www.exo-skills.com" target="_blank"><img src="assets/images/references-exoskills-600.png"/></a>
            </div>
            <div class="definition">
              ${{ index.references.exoskills.definition }}$
            </div>
          </div>
        </div>
      </section>
      <form id="contactForm" class="container-fluid">
        <div class="row">
          <div class="col-12 offset-sm-1">
          <h2>${{ index.contact.title }}$</h2>
          <h3 id="contactTitle">${{ index.contact.subheader }}$</h3>
          <p id="formResponse"></p>
        </div>
        </div>
        <fieldset>
          <div class="row">
            <div class="col-4 offset-sm-1">
              <input type="text" name="name" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
              <label alt="${{ index.contact.name }}$" placeholder="${{ index.contact.name }}$"></label>
              <br>
              <input type="email" name="email" placeholder="" required="" onkeyup="this.setAttribute('value', this.value);" value="">
              <label alt="${{ index.contact.email }}$" placeholder="${{ index.contact.email }}$"></label>
              <br>
            </div>
            <div class="col-6">
              <input id="submitButton" type="submit" class="btn-large waves-effect" value="${{ index.contact.submit }}$">
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
          document.getElementById('formResponse').innerHTML = "${{ index.contact.success }}$";
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
