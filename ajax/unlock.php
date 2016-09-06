<?php
require_once("../global.php");
foreach($_POST as $k=>$v){
	if($v == ""){
		echo "empty";
		exit;
	} else if($k == "password"){
		$feed[$k] = md5($v);	
	} else {
		$feed[$k] = $v;
	}
}
if($feed["verify_code"]!=strtolower($_COOKIE["verify_code"])){
	echo "code_error";
	exit;
}
$sql = "SELECT * FROM d_config WHERE id = 10 AND cv_password = '" . $feed["password"] . "' LIMIT 1";
$num = get_num($sql);
if($num == 1){
	echo "success";
	$_SESSION["unlock"] = true;
} else {
	echo "fail";
	exit;
}
?>