<?php
require_once("global.php");
if(isset($_GET["cid"])&&(is_numeric($_GET["cid"]))){
	$cid = $_GET["cid"];
} else {
	bm_die("Parameter error!");	
}
$tpl->assign("cid", $cid);
$sql = "SELECT title FROM d_category WHERE id = $cid";
$row = get_rows($sql);
$title = $row["title"];
$tpl->assign("title",$title);
$start=0;
$pagelimit=9;
$sql = "SELECT * FROM d_photo WHERE category_id = $cid";
$total_num = get_num($sql);
if($total_num != 0){
	$total_page = ceil($total_num/$pagelimit);
} else {
	$total_page = 0;
}
if(($total_page == 1)||($total_page == 0)){
	$prev_page = "no";
	$next_page = "no";	
} else {
	if(isset($_GET["page"])&&($_GET["page"]!=1)&&(is_numeric($_GET['page']))){
		$current_page = $_GET["page"];
		$start = max(1, ($current_page-1)*$pagelimit);
		$prev_page = $current_page - 1;
		if($current_page>=$total_page){
			$next_page = "no";	
		}
	} else {
		$current_page = 1;
		$prev_page = "no";
		$next_page = "2";
	}
	$sql .= " LIMIT $start, $pagelimit";
}
$tpl->assign("pre", $prev_page);
$tpl->assign("next", $next_page);
$rows = get_rows($sql, "array");
$tpl->assign("l_cartoon_p", $rows);
$tpl->display("page.html");
?>
