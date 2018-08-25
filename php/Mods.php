<?php
	include "conexion.php";	
	$db = new PDO('mysql:host=127.0.0.1;dbname=escuela;charset=utf8mb4', 'root', '');
	$mod_id=null;
	$sql2= "SELECT * from usuarios where user = \"$_POST[username]\"";

	$query= $con->query($sql2);
	while ($r=$query->fetch_array()) {
		$mod_id=$r["id"];
	}
	if ($mod_id==null) {
		print "<script>alert(\"Usuario no encontrado.\");window.location='../admin/modificaciones.php';</script>";
		
	}else {
	if (isset($_POST["username1"])) {
		if ($_POST["username1"]!="") {
			$id=$_POST["id"];

			$found=false;
			$sql2= "SELECT * FROM usuarios WHERE user =\"$_POST[username]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario ya registrado.\");window.location='../admin/modificaciones.php';</script>";
			}else{

			$affected_rows = $db->exec("UPDATE usuarios SET user=\"$_POST[username]\" Where id = $id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
			}
		}
	}
	if (isset($_POST["fullname"])) {
		if ($_POST["fullname"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET name=\"$_POST[fullname]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
		}
	}
	if (isset($_POST["last_name"])) {
		if ($_POST["last_name"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET last_name=\"$_POST[last_name]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
		}
	}
	if (isset($_POST["date"])) {
		if ($_POST["date"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET nac_date=\"$_POST[date]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";	
		}
	}
	if (isset($_POST["genero"])) {
		if ($_POST["genero"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET genero=\"$_POST[genero]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
		}
	}
	if (isset($_POST["type"])) {
		if ($_POST["type"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET type=\"$_POST[type]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
		}
	}
	if (isset($_POST["city"])) {
		if ($_POST["city"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET city=\"$_POST[city]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
		}
	}
	if (isset($_POST["state"])) {
		if ($_POST["state"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET state=\"$_POST[state]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";
		}
	}
	if (isset($_POST["password"])) {
		if ($_POST["password"]!="") {
			$affected_rows = $db->exec("UPDATE usuarios SET pass=\"$_POST[date]\" Where id = $mod_id");
			print "<script>alert(\"Se han modificado corectamente los datos\");window.location='../admin/modificaciones.php';</script>";	
		}else{
			print "<script>window.location='../admin/modificaciones.php';</script>";
		}
	}
}

 ?>