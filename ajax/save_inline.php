<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
if($_POST["element_id"] == ""){
	echo "ERROR!";
} else {
	$element = $_POST["element_id"];
}

switch($element):
	case "name":
		$feed["name"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;

	case "age":
		$feed["age"] = $_POST["update_value"];
		if(!is_numeric($feed["age"])){
			echo "请输入数字！";
			exit;
		}
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	case "gender":
		$feed["gender"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	case "profession":
		$feed["profession"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	case "native":
		$feed["native"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	case "residence":
		$feed["residence"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	case "interest":
		$feed["interest"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	case "sports":
		$feed["sports"] = $_POST["update_value"];
		$sql = $idb->query_update($feed, "info_person", "id = 10");
		if($idb->query_ex($sql)){
			echo $_POST["update_value"];
			exit;
		} else {
			bm_die($idb->print_error());
		}
		break;
		
	default:
		break;
endswitch;
?>