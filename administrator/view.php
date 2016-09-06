<?php
require_once("global.php");
require_once("authentication.php");
if(isset($_GET["mode"])&&($_GET["mode"]!="")){
	$mode = $_GET["mode"];
} else {
	bm_die("Parameter error!");
}
$pagelimit = 3;

switch($mode):
	case "category":
		$sql = "SELECT * FROM d_category";
		$rows = get_rows($sql, "array");
		foreach($rows as $k=>$v){
			$sql_count = "SELECT count(*) AS p_count FROM d_photo WHERE category_id = " . $v['id'];
			$count = get_rows($sql_count);
			$rows[$k]["p_count"] = $count["p_count"];
		}
		$tpl->assign("cate_arr", $rows);
		$tpl->display("view_category.html");
		break;

	case "photo":
		if(isset($_GET["cate"])&&($_GET["cate"]!="")){
			$sql = "SELECT * FROM d_photo WHERE category_id = " . $_GET["cate"];	
		} else {
			$sql = "SELECT * FROM d_photo";
		}
		//	分页
		$page_string = "";
		$num_info = get_num($sql);
		$tpl->assign("total_num", $num_info);
		if ($num_info >= 1){
			$idb->query_ex($sql );
			$page_string = paginate($idb->conn, $pagelimit);
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				$pagestart = $pagelimit*($page-1);
				$sql .= " limit $pagestart, $pagelimit";
			} else {
				$sql .= " limit 0, $pagelimit";
			}
		}
		$tpl->assign("page_string", $page_string);
		$rows = get_rows($sql, "array");
		$tpl->assign("l_photo", $rows);
		$sql = "SELECT id,title FROM d_category";
		$rows = get_rows($sql, "array");
		$tpl->assign("l_cate", $rows);
		$tpl->display("view_photo.html");
		break;

	case "banner":
		$sql = "SELECT * FROM d_banner";
		//	分页
		$page_string = "";
		$num_info = get_num($sql);
		$tpl->assign("total_num", $num_info);
		if ($num_info >= 1){
			$idb->query_ex($sql );
			$page_string = paginate($idb->conn, $pagelimit);
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				$pagestart = $pagelimit*($page-1);
				$sql .= " limit $pagestart, $pagelimit";
			} else {
				$sql .= " limit 0, $pagelimit";
			}
		}
		$tpl->assign("page_string", $page_string);
		$rows = get_rows($sql, "array");
		$tpl->assign("l_banner", $rows);
		$tpl->display("view_banner.html");
		break;
		
	case "account":
		$sql = "SELECT * FROM d_account";
		//	分页
		$page_string = "";
		$num_info = get_num($sql);
		$tpl->assign("total_num", $num_info);
		if ($num_info >= 1){
			$idb->query_ex($sql );
			$page_string = paginate($idb->conn, $pagelimit);
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
				$pagestart = $pagelimit*($page-1);
				$sql .= " limit $pagestart, $pagelimit";
			} else {
				$sql .= " limit 0, $pagelimit";
			}
		}
		$tpl->assign("page_string", $page_string);
		$rows = get_rows($sql, "array");
		$tpl->assign("l_account", $rows);
		$tpl->display("view_account.html");
		break;

	default:
		bm_die("Parameter error!");
		break;
endswitch;
?>