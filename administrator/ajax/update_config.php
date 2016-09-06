<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
if(isset($_POST["item"])&&($_POST["item"]!="")){
	$item = $_POST["item"];
	unset($_POST["item"]);
} else {
	echo "fail";
	exit;
}
if(isset($_POST["item_value"])&&($_POST["item_value"]!="")){
	$value = $_POST["item_value"];
}

switch($item):
	case "cv_locked":
		$sql = "UPDATE d_config SET cv_locked = $value WHERE id = 10";
		if($idb->query_ex($sql)){
			echo "success";
			exit;
		} else {
			echo "fail";
			exit;
		}
	break;

	case "cv_password":
		$value = md5($value);
		$sql = "UPDATE d_config SET cv_password = '".$value."' WHERE id = 10";
		if($idb->query_ex($sql)){
			echo "success";
			exit;
		} else {
			echo "fail";
			exit;
		}
	break;

	case "is_mark":
		foreach($_POST as $k=>$v){
			if($v != ""){
				$feed[$k] = $v;
			}
		}
		$sql = $idb->query_update($feed, "d_config", "id=10");
		if($idb->query_ex($sql)){
			echo "success";
			exit;
		} else {
			echo "fail";
			exit;
		}
	break;

	default:
		echo "fail";
		exit;
	break;
endswitch;
?>