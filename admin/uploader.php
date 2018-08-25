<?php
	session_start();
	
	$db = new PDO('mysql:host=127.0.0.1;dbname=escuela;charset=utf8mb4', 'root', '');
	$target_path = "../img/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
		$nombreimg=$_FILES['uploadedfile']['name'];
		$id=$_SESSION["user_id"];

		$affected_rows = $db->exec("UPDATE usuarios SET img='$nombreimg' Where id = $id");
		print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='settings.php';</script>";	

	}else{
	 print "<script>alert(\"Ha ocurrido un error, intente nuevamente\");window.location='settings.php';</script>";
	}
?>