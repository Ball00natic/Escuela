<nav role="navigation">
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <?php if(!isset($_SESSION["user_id"])){?>
    <div class="w3-col s3">
      <a href="index.php" class="w3-button w3-block w3-black">INICIO</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ACERCA</a>
    </div>
    <div class="w3-col s3">
      <a href="photos.php" class="w3-button w3-block w3-black">FOTOS</a>
    </div>
    <div class="w3-col s3">
      <a href="login.php" class="w3-button w3-block w3-black">INICIO DE SESION</a>
    </div>
    <?php }else{?>
        <?php if($_SESSION["user_type"]==1){?>
      <div class="w3-col s3">
      <a href="../index.php" class="w3-button w3-block w3-black">INICIO</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ACERCA</a>
    </div>
    <div class="w3-col s3">
      <a href="../photos.php" class="w3-button w3-block w3-black">FOTOS</a>
    </div>
    <div class="w3-col s3">
      <a href="../php/logout.php"" class="w3-button w3-block w3-black">CERRAR SESION</a>
    </div>
    </div>
    <?php }else{?>
    <div class="w3-col s3">
      <a href="../index.php" class="w3-button w3-block w3-black">INICIO</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ACERCA</a>
    </div>
    <div class="w3-col s3">
      <a href="../photos.php" class="w3-button w3-block w3-black">FOTOS</a>
    </div>
    <div class="w3-col s3">
      <a href="../php/logout.php"" class="w3-button w3-block w3-black">CERRAR SESION</a>
    </div>
  <?php }}?>
</div>
</div>
</nav>