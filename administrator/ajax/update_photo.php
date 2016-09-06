<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
if(isset($_GET["id"])&&($_GET["id"]!="")){
	$id = $_GET["id"];
} else {
	echo "fail";
	exit;
}
foreach($_POST as $k=>$v){
	if($v != ""){
		$feed[$k] = $v;
	}
}
$sql = $idb->query_update($feed, "d_photo", "id = $id");
if($idb->query_ex($sql)){
	$sql = "SELECT * FROM d_photo WHERE id = $id";
	$row = get_rows($sql);
	$sql = "SELECT id, title FROM d_category";
	$list_cate = get_rows($sql, "array");
?>
<form method="post" onsubmit="return false;" id="update_photo_<?php echo $row["id"];?>">
<div class="list_view_bar"><label>图片名称</label>&nbsp;&nbsp;<span><input name="title" type="text" value="<?php echo $row["title"];?>" /></span></div>
<div class="list_view_bar"><label>类目名称</label>&nbsp;
<span><select name="category_id">
<?php
foreach($list_cate as $k=>$v){
	if($row["category_id"]==$v["id"]){
?>
<option value="<?php echo $v["id"];?>" selected="selected"><?php echo $v["title"];?></option>
<?php	
	} else {
?>
<option value="<?php echo $v["id"];?>"><?php echo $v["title"];?></option>
<?php	
	}
}
?>
</select></span></div>
<div class="list_view_bar"><label>是否在简历显示</label>&nbsp;&nbsp;<span>否<input type="radio" name="show_in_cv" value="0" <?php if($row["show_in_cv"]==0){echo "checked='checked'";};?> />&nbsp;是<input type="radio" name="show_in_cv" value="1" <?php if($row["show_in_cv"]==1){echo "checked='checked'";};?> /></span></div>
<div class="list_view_bar"><label>图片描述</label>&nbsp;&nbsp;<textarea name="description" rows="6"><?php echo $row["description"];?></textarea></div>
<div class="list_view_bar"><button class="button_blue" onclick="ajax_update(<?php echo $row["id"];?>)">更新</button>&nbsp;&nbsp;<button class="button_red">删除</button></div>
</form>
<?php
} else {
	echo "fail";
	exit;
}
?>