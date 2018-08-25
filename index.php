<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <title>Esc. Sec. Alberto J. Morin</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
  body, html {
      height: 100%;
      font-family: "Inconsolata", sans-serif;
  }
  .bgimg {
      background-position: center;
      background-size: cover;
      background-image: url("img/25.jpg");
      min-height: 100%;
  }
  .menu {
      display: none;
  }
  </style>
<body>

  <?php include "php/navbar.php"; ?>
  <!-- Header with image -->
  <header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Escuela Secundaria</span>
    </div>
    <div class="w3-display-middle w3-center">
      <span class="w3-text-grey" style="font-size:90px"><br></span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
      <span class="w3-tag">Alberto J. Morin</span>
    </div>
  </header>

  <!-- Add a background color and large text to the whole page -->
  <div class="w3-sand w3-grayscale w3-large">

  <!-- About Container -->
  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ACERCA DE LA ESCUELA</span></h5>
      <p></p>
      <p></p>
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
        <p>Chef, Coffeeist and Owner: Liam Brown</p>
      </div>
      <img src="img/01.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    </div>
  </div>


  <!-- Contact/Area Container -->
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
     
      <form name="frmContacto" method="post" action="php/sendbymail.php">
        <p>

        <div class="w3-panel w3-leftbar w3-light-grey">
        <span class="w3-tag w3-wide">¿Quieres tener una cuenta?</span>
        <p><i>Introduce tus datos</i></p>
      </div>

        <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nombre" required name="name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Correo electronico" required name="email"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Usuario \Contraseña" required name="usu/pass"></p>
        <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>

  <!-- End page content -->
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>Powered by <a href="" title="Desarrolladores" target="_blank" class="w3-hover-text-green">Emma :v</a></p>
  </footer>

</body>
</html>