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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  	<?php 
  		if($_SESSION["user_type"]==1){ print "<script>window.location='../index.php';</script>"?>


  	<?php }else{ ?>
  		
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
    <a href="user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>USUARIO</a>
    <a href="publicaciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-star fa-fw w3-margin-right"></i>PUBLICACIONES</a> 
    <a href="settings.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-gear fa-fw w3-margin-right"></i>CONFIGURACION</a> 
    <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACTO</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:305px">
<br>
<br>
<br>
<br>
<img src="../img/<?php echo $_SESSION["user_img"];?>" style="width:100px;" class="w3-round">
<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input class="w3-button" name="uploadedfile" type="file" />
<button class="w3-button" type="submit">Subir archivo</button>
</form> 
</div>
</body>
</html>