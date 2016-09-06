<?php
require_once("global.php");
require_once("authentication.php");
if(isset($_GET["mode"])&&($_GET["mode"]!="")){
	$mode = $_GET["mode"];
} else {
	bm_die("Parameter error!");
}

switch($mode):
	case "category":
		$tpl->display("insert_category.html");
		break;
		
	case "photo":
		$sql = "SELECT * FROM d_category";
		$rows = get_rows($sql, "array");
		$tpl->assign("cate_list", $rows);
		$tpl->display("insert_photo.html");
		break;
		
	case "banner":
		$tpl->display("insert_banner.html");
		break;
		
	case "account":
		$tpl->display("insert_account.html");
		break;
		
	default:
		bm_die("Parameter error!");
		break;
endswitch;
?>