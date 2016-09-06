<?php
require_once("global.php");
require_once("authentication.php");
$sql = "SELECT * FROM d_config WHERE id = 10";
$row = get_rows($sql);
$tpl->assign("config", $row);
$tpl->display("main.html");
?>