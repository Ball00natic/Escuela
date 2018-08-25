!!<?php
	header("Content-Type: text/html;charset=utf-8");
	if(!empty($_POST)){
		if(isset($_POST["username"]) &&isset($_POST["password"])){
			if($_POST["username"]!=""&&$_POST["password"]!=""){
				include "conexion.php";
				
				$user_id=null;
				$user_name=null;
				$user_last_name=null;
				$user_type=null;
				$user_img=null;
				$sql1= "select * from usuarios where user=\"$_POST[username]\" and pass=\"$_POST[password]\" ";
				$query = $con->query($sql1);
				while ($r=$query->fetch_array()) {
					$user_id=$r["id"];
					$user_name=$r["name"];
					$user_last_name=$r["last_name"];
					$user_type=$r["type"];
					$user_img=$r["img"];
					break;
				}
				if($user_id==null && $user_name==null){
					print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
				}else if($user_type==1){
					session_start();
					$_SESSION["user_id"]=$user_id;
					$_SESSION["user_name"]=$user_name;
					$_SESSION["user_last_name"]=$user_last_name;
					$_SESSION["user_type"]=$user_type;
					$_SESSION["user_img"]=$user_img;
					print "<script>window.location='../admin/admin.php';</script>";		
				}else{
					session_start();
					$_SESSION["user_id"]=$user_id;
					$_SESSION["user_name"]=$user_name;
					$_SESSION["user_type"]=$user_type;
					$_SESSION["user_last_name"]=$user_last_name;
					$_SESSION["user_img"]=$user_img=$r["img"];

					print "<script>window.location='..//user/user.php';</script>";	

				}
			}
		}
	}
?>