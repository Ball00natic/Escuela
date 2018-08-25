<?php
	session_start();
	$id=$_SESSION["user_id"];
	include "conexion.php";

if ($_SESSION["user_type"]==1) {
	if ($_FILES['uploadedfile']['name']==null) {
		$sql="INSERT INTO publicacion (id, fecha, content) Values ($id, NOW(), \"$_POST[publicacion]\")";

		$query = $con->query($sql);
		if($query!=null){
				print "<script>window.location='../admin/admin.php';</script>";
			}else{
				print "<script>alert(\"Ha ocurrido un error, intente nuevamente\");window.location='../admin/admin.php';</script>";
			}
		
	}else{
		$target_path = "../img/";
		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
			$nombreimg=$_FILES['uploadedfile']['name'];
			$sql="INSERT INTO publicacion (id, fecha, content, img) Values ($id, NOW(), \"$_POST[publicacion]\",'$nombreimg')";

			$query = $con->query($sql);
			if($query!=null){
				print "<script>window.location='../admin/admin.php';</script>";
			}
		}else{
			print "<script>alert(\"Ha ocurrido un error, intente nuevamente\");window.location='../admin/admin.php';</script>";
		}
	}
}else{

	if ($_FILES['uploadedfile']['name']==null) {
		$sql="INSERT INTO publicacion (id, fecha, content) Values ($id, NOW(), \"$_POST[publicacion]\")";

		$query = $con->query($sql);
		if($query!=null){
				print "<script>window.location='../user/user.php';</script>";
			}else{
				print "<script>alert(\"Ha ocurrido un error, intente nuevamente\");window.location='../user/user.php';</script>";
			}
		
	}else{
		$target_path = "../img/";
		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
			$nombreimg=$_FILES['uploadedfile']['name'];
			$sql="INSERT INTO publicacion (id, fecha, content, img) Values ($id, NOW(), \"$_POST[publicacion]\",'$nombreimg')";

			$query = $con->query($sql);
			if($query!=null){
				print "<script>window.location='../user/user.php';</script>";
			}
		}else{
			print "<script>alert(\"Ha ocurrido un error, intente nuevamente\");window.location='../user/user.php';</script>";
		}
	}
}
?>