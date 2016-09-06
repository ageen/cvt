<?php
require_once("global.php");
require_once("authentication.php");
if(isset($_GET["mode"])&&($_GET["mode"]!="")){
	$mode = $_GET["mode"];
	unset($_GET["mode"]);
} else {
	bm_die("Parameter error!");
}
if(isset($_GET["id"])&&($_GET["id"]!="")){
	$id = $_GET["id"];
	unset($_GET["id"]);
} else {
	bm_die("Parameter error!");
}

switch($mode):
	case "category":
		$sql = $idb->query_delete($id, "d_category");
		if($idb->query_ex($sql)){
			showinfo("删除成功！", "view.php?mode=category");
		} else {
			$idb->print_error();
		}
		break;
		
	case "account":
		$sql = "SELECT * FROM d_account";
		$num = get_num($sql);
		if($num == 1){
			showinfo("此为最后一个帐号，无法删除！", "back");	
		}
		$sql = $idb->query_delete($id, "d_account");
		if($idb->query_ex($sql)){
			showinfo("删除成功！", "view.php?mode=account");
		} else {
			$idb->print_error();
		}		
		break;

	default:
		bm_die("Parameter error!");
		break;
endswitch;
?>