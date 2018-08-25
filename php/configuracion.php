<?php
	include "conexion.php";	
	$db = new PDO('mysql:host=127.0.0.1;dbname=escuela;charset=utf8mb4', 'root', '');
	$pass=null;
	$id=$_POST["id"];
	$sql1= "SELECT pass from usuarios where id = $id";

	$query= $con->query($sql1);
	while ($r=$query->fetch_array()) {
		$user_pass=$r["pass"];
	}

	if($_POST["password1"]==$user_pass){
	if (isset($_POST["username"])) {
		if ($_POST["username"]!="") {
			$id=$_POST["id"];
			$found=false;
			$sql2= "SELECT * FROM usuarios WHERE user =\"$_POST[username]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario ya registrado.\");window.location='../admin/settings.php';</script>";
			}else{
			$affected_rows = $db->exec("UPDATE usuarios SET user=\"$_POST[username]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
			}
		}
	}
	if (isset($_POST["fullname"])) {
		if ($_POST["fullname"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET name=\"$_POST[fullname]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["last_name"])) {
		if ($_POST["last_name"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET last_name=\"$_POST[last_name]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["date"])) {
		if ($_POST["date"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET nac_date=\"$_POST[date]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["genero"])) {
		if ($_POST["genero"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET genero=\"$_POST[genero]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["type"])) {
		if ($_POST["type"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET type=\"$_POST[type]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["city"])) {
		if ($_POST["city"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET city=\"$_POST[city]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["state"])) {
		if ($_POST["state"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET state=\"$_POST[state]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
	if (isset($_POST["password"])) {
		if ($_POST["password"]!="") {
			$id=$_POST["id"];
			$affected_rows = $db->exec("UPDATE usuarios SET pass=\"$_POST[date]\" Where id = $id");
			print "<script>alert(\" Se ha subido la imagen correctamente\");window.location='../admin/settings.php';</script>";	
		}
	}
}
else{
	print "<script>alert(\"Contraseña incorrecta\");window.location='../php/logout.php';</script>";	

}

 ?>