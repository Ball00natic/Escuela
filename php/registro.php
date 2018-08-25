<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["last_name"])&&isset($_POST["date"])&&isset($_POST["genero"]) &&isset($_POST["type"]) &&isset($_POST["city"]) &&isset($_POST["state"]) &&isset($_POST["country"]) &&isset($_POST["img"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&&$_POST["fullname"]!=""&&$_POST["date"]!=""&&$_POST["genero"]!=""&&$_POST["type"]!=""&&$_POST["city"]!=""&&$_POST["state"]!=""&&$_POST["country"]!=""&&$_POST["img"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from usuarios where user=\"$_POST[username]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario ya registrado.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into usuarios(name, last_name,user,pass,type,nac_date,genero,city,state,country,img) value (\"$_POST[fullname]\",\"$_POST[last_name]\",\"$_POST[username]\",\"$_POST[password]\",\"$_POST[type]\",\"$_POST[date]\",\"$_POST[genero]\",\"$_POST[city]\",\"$_POST[state]\",\"$_POST[country]\",\"$_POST[img]\")";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso.\");window.location='../admin/altas.php';</script>";
			}
		}
	}
}



?>