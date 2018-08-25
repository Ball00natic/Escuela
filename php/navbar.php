<nav role="navigation">
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <?php if(!isset($_SESSION["user_id"])){?>
    <div class="w3-col s4">
      <a href="index.php" class="w3-button w3-block w3-black">INICIO</a>
    </div>
    <div class="w3-col s4">
      <a href="#about" class="w3-button w3-block w3-black">ACERCA</a>
    </div>
    <div class="w3-col s4">
      <a href="photos.php" class="w3-button w3-block w3-black">FOTOS</a>
    </div>
    <div class="w3-col s4">
      <a href="login.php" class="w3-button w3-block w3-black">INICIO DE SESION</a>
    </div>
    <?php }else{?>
        <?php if($_SESSION["user_type"]==1){?>
      <div class="w3-col s3">
      <a href="./index.php" class="w3-button w3-block w3-black">INICIO</a>
    </div>
    <div class="w3-col s3">
      <a href="./index.php#about" class="w3-button w3-block w3-black">ACERCA</a>
    </div>
    <div class="w3-col s3">
      <a href="./photos.php" class="w3-button w3-block w3-black">FOTOS</a>
    </div>
    <div class="w3-col s2 w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications"><?php echo $_SESSION['user_name']; ?> <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="./admin/admin.php" class="w3-button w3-block w3-black w3-bar-item w3-button">PERFIL</a>
      <a href="./admin/publicaciones.php" class="w3-button w3-block w3-black w3-bar-item w3-button">PUBLICACIONES</a>
      <a href="./php/logout.php" class="w3-button w3-block w3-black w3-bar-item w3-button">CERRAR SESION</a>
    </div>
    </div>
    <form name="search" action="php/search.php" method="post">
  <div class="w3-col s3">
      <input type="text" name="search" class="form-control" required />
  </div>
  <div class="w3-col s0">
  <button class="w3-button w3-bar-item w3-right w3-black w3-text-grey" type="submit" title="btn"><i class="fa fa-search"></i></button> 
  </div>
  </form>
  <script src="js/valida_search.js"></script>
    <?php }else{?>
    <div class="w3-col s3">
      <a href="./index.php" class="w3-button w3-block w3-black">INICIO</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ACERCA</a>
    </div>
    <div class="w3-col s3">
      <a href="./photos.php" class="w3-button w3-block w3-black">FOTOS</a>
    </div>
    <div class="w3-col s2 w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications"><?php echo $_SESSION['user_name']; ?> <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="./user/user.php" class="w3-button w3-block w3-black w3-bar-item w3-button">PERFIL</a>
      <a href="./user/publicaciones.php" class="w3-button w3-block w3-black w3-bar-item w3-button">PUBLICACIONES</a>
      <a href="./php/logout.php" class="w3-button w3-block w3-black w3-bar-item w3-button">CERRAR SESION</a>
  </div>
  </div>
  <form name="search" action="php/search.php" method="post">
  <div class="w3-col s3">
      <input type="text" name="search" class="form-control" required />
  </div>
  <div class="w3-col s0">
  <button class="w3-button w3-bar-item w3-right w3-black w3-text-grey" type="submit" title="btn"><i class="fa fa-search"></i></button> 
  </div>
  </form>
  <script src="js/valida_search.js"></script>
  <?php }}?>
</div>
</div>
</nav>