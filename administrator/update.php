<?php
require_once("global.php");
require_once("authentication.php");
if(isset($_POST["mode"])&&($_POST["mode"]!="")){
	$mode = $_POST["mode"];
	unset($_POST["mode"]);
} else {
	bm_die("Parameter error!");
}
if(isset($_POST["id"])&&($_POST["id"]!="")){
	$id = $_POST["id"];
	unset($_POST["id"]);
} else {
	bm_die("Parameter error!");
}

switch($mode):
	case "category":
		foreach($_POST as $k=>$v){
			if($v != ""){
				$feed[$k] = $v;
			}
		}
		$sql = $idb->query_update($feed, "d_category", "id=$id");
		if($idb->query_ex($sql)){
			showinfo("更新成功！","view.php?mode=category");
		} else {
			$idb->print_error();
		}
		break;
		
	default:
		bm_die("Parameter error!");
		break;
endswitch;
?>