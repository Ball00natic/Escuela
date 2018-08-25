<?php
 session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <?php include "../php/conexion.php";?>
  <?php if (!isset($_SESSION["user_id"])){
   	print "<script>window.location='https://www.youtube.com/watch?v=MSENH3FE2As';</script>";
        
   	}else{
    $user_id=$_SESSION["user_id"];
    $user_img=null;
        $sql1= "select * from usuarios where id= $user_id";
        $query = $con->query($sql1);
        while ($r=$query->fetch_array()) {
          $user_img=$r["img"];
          break;
        }
    $_SESSION["user_img"]=$user_img;
  }
   ?>

	 <title><?php echo $_SESSION["user_name"];?> </title>
	 <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="../css/style.css">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  	<?php 
  		if($_SESSION["user_type"]==1){?>


  	<?php }else{
     print "<script>window.location='../index.php';</script>" ?>
  		
  	<?php }?>
<body class="w3-light-grey w3-content" style="max-width:1600px">
<?php include "../php/navbar1.php" ?>


   <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px; margin-top:55px" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <form name="search" action="../php/search.php" method="post">
  <div class="w3-col s11">
      <input type="text" name="search" class="form-control" required />
  </div>
  <div class="w3-col s0">
  <button class="w3-button w3-bar-item w3-right w3-black w3-text-grey" type="submit" title="btn"><i class="fa fa-search"></i></button> 
  </div>
  </form><br>
    <img src="../img/<?php echo $_SESSION["user_img"];?>" style="width:45%;" class="w3-round"><br><br>
    <h4><b>NOMBRE</b></h4>
    <p class="w3-text-grey"><?php echo $_SESSION["user_name"];?></p>
  </div>
  <div class="w3-bar-block">
    <a href="admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>USUARIO</a>
    <a href="publicaciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-star fa-fw w3-margin-right"></i>PUBLICACIONES</a> 
    <a href="settings.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gear fa-fw w3-margin-right"></i>CONFIGURACION</a> 
    <a href="altas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list fa-fw w3-margin-right"></i>ALTAS</a>
    <a href="bajas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-remove fa-fw w3-margin-right"></i>BAJAS</a>
    <a href="modificaciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right w3-text-teal"></i>MODIFICACIONES</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->

<centre><div class="w3-main w3-half w3-row-padding" style="margin-left:305px">
      <div class="row">
      <div class="col-md-6">
      <br>
      <br>
      <br>
      <br>
      <h4><b>MODIFICACION DE DATOS</b></h4>
      <form role="form" name="registro" action="../php/Mods.php" method="post">
        <div class="form-group">
        <label for="username">Introduzca el usuario a modificar</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required>
        </div>
        <div class="form-group">
        <label for="username">DATOS A MODIFICAR</label>
          <input type="hidden">
        </div>
        <div class="form-group">
          <label for="username1">Nombre de usuario</label>
          <input type="text" class="form-control" id="username1" name="username1" placeholder="Nombre de usuario">
        </div>
        <div class="form-group">
          <label for="fullname">Nombre</label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
        <div class="form-group">
        <div class="form-group">
          <label for="last_name">Apellidos</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos">
          </div>
          <div class="form-group">
          <label for="date">Fecha de nacimiento</label>
          <input type="text" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD">
          </div>
          <div class="form-group">
          <label for="genero">Genero</label>
          <input type="text" class="form-control" id="genero" name="genero" placeholder="H/M">
          </div>
          <div class="form-group">
          <label for="type">Tipo</label>
          <input type="text" class="form-control" id="type" name="type" placeholder="1 = administrado 2 = usuario">
          </div>
          <div class="form-group">
          <label for="city">Ciudad</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad">
          </div>
        <div class="form-group">
          <label for="state">Estado</label>
          <input type="text" class="form-control" id="state" name="state" placeholder="Estado">
          </div>
          <div class="form-group">
          <input type="hidden" class="form-control" id="country" name="country" value="México">
          </div>
          <div class="form-group">
          <input type="hidden" class="form-control" id="img" name="img" value="user.png">
          </div>
        <div class="form-group">
          <label for="password">Contrase&ntilde;a</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
        </div>
        <div class="form-group">

           <button type="submit" class="w3-button">Actualizar</button>
          </form>
      </div>
      </div>
      </div>

</html>