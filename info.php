<?php
require_once("global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	//	Person Info
	$sql = "SELECT * FROM info_person WHERE id = 10";
	$row = get_rows($sql);
	if($row["portrait"] != ""){
		$row["portrait"] = "uploads/cv/".$row["portrait"];
	}
	$tpl->assign("info", $row);
	//	education info
	$sql = "SELECT * FROM info_education";
	$rows = get_rows($sql, "array");
	$tpl->assign("edu", $rows);
	//	job info
	$sql = "SELECT * FROM info_job";
	$rows = get_rows($sql, "array");
	$tpl->assign("job", $rows);
	//	CARTOON
	$sql = "SELECT * FROM d_photo WHERE category_id = 9 AND show_in_cv = 1 ORDER BY publish_time DESC LIMIT 3";
	$rows = get_rows($sql, "array");
	$tpl->assign("l_cartoon", $rows);
	//	ART
	$sql = "SELECT * FROM d_photo WHERE category_id = 10 AND show_in_cv = 1 ORDER BY publish_time DESC LIMIT 3";
	$rows = get_rows($sql, "array");
	$tpl->assign("l_art", $rows);
	//	PHOTO
	$sql = "SELECT * FROM d_photo WHERE category_id = 11 AND show_in_cv = 1 ORDER BY publish_time DESC LIMIT 3";
	$rows = get_rows($sql, "array");
	$tpl->assign("l_pho", $rows);
	$tpl->display("info.html");
} else {
	//	WEB CONFIG
	$sql = "SELECT cv_locked,cv_password FROM d_config WHERE id = 10";
	$row = get_rows($sql);
	if($row["cv_locked"] == 1){
		if(isset($_SESSION["unlock"])&&($_SESSION["unlock"]==true)){
			1;
		} else {
			$tpl->display("locked.html");
			exit;
		}
	}
	//	Person Info
	$sql = "SELECT * FROM info_person WHERE id = 10";
	$row = get_rows($sql);
	if($row["portrait"] != ""){
		$row["portrait"] = "uploads/cv/".$row["portrait"];
	}
	$tpl->assign("info", $row);
	//	education info
	$sql = "SELECT * FROM info_education";
	$rows = get_rows($sql, "array");
	$tpl->assign("edu", $rows);
	//	job info
	$sql = "SELECT * FROM info_job";
	$rows = get_rows($sql, "array");
	$tpl->assign("job", $rows);
	//	CARTOON
	$sql = "SELECT * FROM d_photo WHERE category_id = 9 AND show_in_cv = 1 ORDER BY publish_time DESC LIMIT 3";
	$rows = get_rows($sql, "array");
	$tpl->assign("l_cartoon", $rows);
	//	ART
	$sql = "SELECT * FROM d_photo WHERE category_id = 10 AND show_in_cv = 1 ORDER BY publish_time DESC LIMIT 3";
	$rows = get_rows($sql, "array");
	$tpl->assign("l_art", $rows);
	//	PHOTO
	$sql = "SELECT * FROM d_photo WHERE category_id = 11 AND show_in_cv = 1 ORDER BY publish_time DESC LIMIT 3";
	$rows = get_rows($sql, "array");
	$tpl->assign("l_pho", $rows);
	$tpl->display("info_view.html");
}
?>