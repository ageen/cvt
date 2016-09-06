<?php
require_once("global.php");
require_once("authentication.php");
if(isset($_GET["mode"])&&($_GET["mode"]!="")){
	$mode = $_GET["mode"];
} else {
	bm_die("Parameter error!");
}
if(isset($_GET["id"])&&($_GET["id"]!="")){
	$id = $_GET["id"];
} else {
	bm_die("Parameter error!");
}

switch($mode):
	case "category":
		$sql = "SELECT * FROM d_category WHERE id = $id";
		$row = get_rows($sql);
		$tpl->assign("cate_info", $row);
		$tpl->display("modify_category.html");
		break;
	
	default:
		bm_die("Parameter error!");
		break;
endswitch;
?>