<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
      <header>
        <div class="logo"></div>
          <h1>${{ index.header.tagline }}$</h1>
        <div class="languages">
          <ul>
            <li>Español</li>
            <li>Francais</li>
            <li>English</li>
          </ul>
        </div>

      </header>
      <section class="container-fluid main">
        <div class="row">
          <div class="col-12 col-sm-6 offset-sm-1">
            <h2 class="title">${{ index.main.title }}$</h2>
            <h3 class="content">${{ index.main.content }}$</h3>
          </div>
        </div>
        <div class="row references grad3">
          <div class="col-12">
            <h2 class="title">${{ index.references.title }}$</h2>
          </div>
          <div class="col-4">
            <h3>Peaks</h3>
            <div class="preview"></div>
            <div class="definition">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
          <div class="col-4">
            <h3>Taskl</h3>
            <div class="preview"></div>
            <div class="definition">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
          <div class="col-4">
            <h3>Exo-skills</h3>
            <div class="preview"></div>
            <div class="definition">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
      </section>

      <form class="container-fluid" action="index.html" method="post">
        <h2>${{ index.contact.title }}$</h2>
        <fieldset class="row">
          <div class="col-6">
            <input type="text" name="surname" placeholder="${{ index.contact.surname }}$">
            <input type="text" name="familyName" palceholder="${{ index.contact.familyName }}$">
          </div>
        <fieldset>
        <fieldset class="row">
          <div class="col-6">
            <input type="text" name="surname" placeholder="${{ index.contact.surname }}$">
            <input type="text" name="familyName" palceholder="${{ index.contact.familyName }}$">
          </div>
        <fieldset>
      </form>

      <footer>
      </footer>
    </body>
</html>
