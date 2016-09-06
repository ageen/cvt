<?php
require_once("global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	redirect("index.php");
}
$day = date("l");
$tpl->assign("day", $day);
$tpl->display("login_form.html");
?>