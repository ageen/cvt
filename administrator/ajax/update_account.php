<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
if(isset($_GET["id"])&&($_GET["id"]!="")){
	$id = $_GET["id"];	
} else {
	echo "fail";
	exit;
}
if(isset($_POST["username"])&&($_POST["username"]!="")){
	$feed["username"] = $_POST["username"];
	$sql = $idb->query_update($feed, "d_account", "id=$id");
	if($idb->query_ex($sql)){
		echo $feed["username"];
		exit;
	} else {
		echo "fail";
		exit;
	}
} elseif(isset($_POST["password"])&&($_POST["password"]!="")){
	if(isset($_POST["new_password"])&&($_POST["new_password"]!="")){
		$password = md5($_POST["password"]);
		$num = get_num("SELECT * FROM d_account WHERE id = $id AND password = '" . $password . "'");
		if($num == 0){
			echo "fail";
			exit;
		} else {
			$feed['password'] = md5($_POST["new_password"]);
			$sql = $idb->query_update($feed, "d_account", "id=$id");
			if($idb->query_ex($sql)){
				echo "success";
				exit;
			} else {
				echo "fail";
				exit;
			}
		}
	} else {
		echo "fail";
		exit;
	}
} else {
	echo "fail";
	exit;
}
?>