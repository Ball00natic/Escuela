<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fotos</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
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

<div class="w3-row-padding" style="margin-bottom:128px">
  <div class="w3-half">
    <img src="img/10.jpg" style="width:100%">
    <img src="img/02.jpg" style="width:100%">
    <img src="img/01.jpg" style="width:100%">
    <img src="img/03.jpg" style="width:100%">
    <img src="img/04.jpg" style="width:100%">
    <img src="img/26.jpg" style="width:100%">
    <img src="img/06.jpg" style="width:100%">
  </div>

  <div class="w3-half">
    <img src="img/15.jpg" style="width:100%">
    <img src="img/28.jpg" style="width:100%">
    <img src="img/30.jpeg" style="width:100%">
    <img src="img/13.jpg" style="width:100%">
    <img src="img/09.jpg" style="width:100%">
    <img src="img/24.jpg" style="width:100%">
    <img src="img/05.jpg" style="width:100%">
  </div>
</div>

</body>
</html>