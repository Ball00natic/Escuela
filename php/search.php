<?php
  session_start();
	include_once "conexion.php";
         ?>
         <!DOCTYPE html>
         <html>
         <head>
         	<title>Esc. Sec. Alberto J. Morin</title>
			  <meta charset="UTF-8">
			  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="css/style.css">
			  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
			  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
         </head>
         <body class="w3-light-grey w3-content" style="max-width:1600px">
         <?php include "../php/navbar1.php" ?>
         <?php if($_SESSION["user_type"]==1){?>
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
    <a href="../admin/admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>USUARIO</a> 
    <a href="../admin/settings.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CONFIGURACION</a> 
    <a href="../admin/altas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>ALTAS</a>
    <a href="../admin/bajas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>BAJAS</a>
    <a href="../admin/modificaciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>MODIFICACIONES</a>
  </div>
</nav>
<?php }else{?>
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
    <a href="user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>USUARIO</a> 
    <a href="settings.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CONFIGURACION</a> 
    <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACTO</a>
  </div>
</nav><?php } ?>
      <br>
      <br>
      <br>
      <br>
         <div class="w3-main w3-half w3-row-padding" style="margin-left:305px">

  <?php
        $busqueda =$_POST["search"];
        $resultados = mysqli_query($con,"SELECT * FROM usuarios WHERE name like '$busqueda%'");
        $total_registros=mysqli_num_rows($resultados);
        if($total_registros) {
          while($row=mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
           $user_id2=$row["id"];
           ?>
            <img src="../img/<?php echo $row["img"]; ?>" style="width:50px;">
            <form role="form" name="user" action="../userindex/user.php" method="POST">
            <input name="id" type="Hidden" value="<?php echo "$user_id2"; ?>">
            <input type="submit" class="w3-button" name="btn" value="<?php echo $row["name"]; ?>
              <?php echo $row["last_name"]; ?>"/>
            </form>
          <br>
          <br>
          <?php
            } // end while
        } /* end if */ else {
          echo "<font color='darkgray'>(Sin resultados)</font>";
        }
?>
      </div>
			</body>
	   </html>