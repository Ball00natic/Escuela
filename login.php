<?php
session_start();
?>
<!Doctype html>
<html>
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style1.css">
	<title>
		Inicio de sesión
	</title>
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
<!-- Links (sit on top) -->
<?php include "php/navbar.php"; ?>

<div class="main">
    <form role="form" name="login" action="php/login.php" method="post">
      <input type="text" name="username" placeholder="Usuario" required />
      <input type="password" name="password" placeholder="Contraseña" required />
      <input type="submit" name="botonlg" value="Iniciar sesion" required />
    </form>
  </div>
  <script src="js/valida_login.js"></script>
	
</body>
</html>