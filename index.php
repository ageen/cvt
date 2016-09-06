<?php
require_once("global.php");
$sql = "SELECT * FROM d_photo WHERE category_id = 9 ORDER BY publish_time DESC LIMIT 3";
$rows = get_rows($sql, "array");
$tpl->assign("l_cartoon_p", $rows);
$sql = "SELECT * FROM d_photo WHERE category_id = 10 ORDER BY publish_time DESC LIMIT 3";
$rows = get_rows($sql, "array");
$tpl->assign("l_art_p", $rows);
$sql = "SELECT * FROM d_photo WHERE category_id = 11 ORDER BY publish_time DESC LIMIT 3";
$rows = get_rows($sql, "array");
$tpl->assign("l_photo_p", $rows);
$sql = "SELECT * FROM d_banner WHERE display = 1 ORDER BY order_id ASC LIMIT 5";
$rows = get_rows($sql, "array");
$tpl->assign("l_banner", $rows);
$sql = "SELECT * FROM info_person WHERE id = 10";
$row = get_rows($sql);
$tpl->assign("info", $row);
if(isset($_COOKIE["visits"])&&($_COOKIE["visits"]>=1)){
	$visited = 2;
} else {
	$visited = 1;
}
$tpl->assign("visited", $visited);
$tpl->display("index.html");
?>