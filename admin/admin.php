<?php
 session_start();

?>

<!DOCTYPE html>
<html>
<head>
<?php if (!isset($_SESSION["user_id"])){
 	print "<script>window.location='https://www.youtube.com/watch?v=O2ulyJuvU3Q';</script>";
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
  		if($_SESSION["user_type"]==1){?>


  	<?php }else{ print "<script>window.location='../index.php';</script>"?>
  		
  	<?php }?>
    <style>
      .txa1 {width:300px;height:80px;border: 1px dotted #000099;resize: none;} 
    </style>
</head>
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
    <a href="admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>USUARIO</a>
    <a href="publicaciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-star fa-fw w3-margin-right"></i>PUBLICACIONES</a> 
    <a href="settings.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-gear fa-fw w3-margin-right"></i>CONFIGURACION</a> 
    <a href="altas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fa fa-list fa-fw w3-margin-right"></i>ALTAS</a>
    <a href="bajas.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-remove fa-fw w3-margin-right"></i>BAJAS</a>
    <a href="modificaciones.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>MODIFICACIONES</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
      <br>
      <br>
      <br>
      <br>
      <div class="w3-main w3-half w3-row-padding" style="margin-left:350px">
      <div>
      <?php

      include "../php/conexion.php";
      $id_1=$_SESSION["user_id"];
        $sql1= "SELECT * from usuarios where id= $id_1 ";
        $query = $con->query($sql1);
        while ($r=$query->fetch_array()) {
          $id1=$r["id"];
          $nombre=$r["name"];
          $apellido=$r["last_name"];
          $fecha_nac=$r["nac_date"];
          $ciudad=$r["city"];
          $estado=$r["state"];
          $img=$r["img"];
          break;
        }
              function obtener_edad_fecha_nacimiento($fecha_nac){
              $fecha_nac = strtotime($fecha_nac);
              $edad = date('Y', $fecha_nac);
               if (($mes = (date('m') - date('m', $fecha_nac))) < 0) {
                $edad++;
               } else if ($mes == 0 && date('d') - date('d', $fecha_nac) < 0) {
                $edad++;
               }
              return date('Y') - $edad;
              }
              ?>
              <br>
              <br>
                  <img src="../img/<?php echo "$img";?>" style="width: 150px">
                  <?php echo "$nombre $apellido"; ?>
                  <pre>Fecha de nacimiento    Edad        Ciudad
<?php echo "$fecha_nac"?>             <?php echo obtener_edad_fecha_nacimiento($fecha_nac);?>          <?php echo "$ciudad, $estado";  ?></pre>
              <div class="w3-main">
                <center>
                  <span><img src="../img/<?php echo $_SESSION["user_img"];?>" style="width:100px;" class="w3-round">
                  </span>
                  <form enctype="multipart/form-data" name="publicacion" action="../php/publicacion.php" method="POST">
                  <textarea maxlength="500" class="txa1" title="Publica algo!" name="publicacion" placeholder="Publica algo!" required></textarea><br>
                  <span>
                    <input class="w3-button" name="uploadedfile" type="file" />
                  </span>
                  <input class="w3-button" type="submit" name="btnpublicacion" value="Publicar"/>
                  
                  </form>
                </div>


<?php
          $resultados = mysqli_query($con,"SELECT * FROM publicacion WHERE id= $id1 ORDER BY fecha DESC");
        $total_registros=mysqli_num_rows($resultados);
        if($total_registros) {
          while($row=mysqli_fetch_array($resultados, MYSQLI_ASSOC)) {
            $user_id1=$row['id'];
            $sql="SELECT * FROM usuarios WHERE id = $user_id1";
              $img=$row['img'];
              $txt=$row['content'];
              if ($img==null) {
                $query=$con->query($sql);
              while ($r=$query->fetch_array()) {
                $user_name1=$r["name"];
                $user_last_name1=$r["last_name"];
                $user_img1=$r["img"];
                }
                // end while?>
              <center><span><img src="../img/<?php echo "$user_img1" ?>" style="width:50px">
              <?php echo "$user_name1 $user_last_name1 </span><br>";?></span>
              <?php echo "<p> $txt </p><br>"; ?> 
              </center>
              <?php  
            }else{
            $query=$con->query($sql);
              while ($r=$query->fetch_array()) {
                $user_name1=$r["name"];
                $user_last_name1=$r["last_name"];
                $user_img1=$r["img"];
                }
                ?>
              <center><span><img src="../img/<?php echo "$user_img1" ?>" style="width:50px">
              <?php echo "$user_name1 $user_last_name1 </span><br>";?></span>
              <img src="../img/<?php echo $row["img"]; ?>" style="width:300px">
              <?php echo "<p> $txt </p><br>"; ?> 
              </center>
            
            <?php
            }
          }// end while
        }/*end if*/else{
        echo "<center><font color='darkgray'>(todavia no has publicado nada.)</font></center>";
      }
      ?>
      </div>
      </div>
</body>
</html>