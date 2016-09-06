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
echo "success";
exit;
foreach($_POST as $k=>$v){
	if($v != ""){
		$feed[$k] = $v;
	}
}
$sql = $idb->query_update($feed, "d_banner", "id = $id");
if($idb->query_ex($sql)){
	$sql = "SELECT * FROM d_banner WHERE id = $id";
	$l_banner = get_rows($sql);
?>
<form method="post" onsubmit="return false;" id="update_banner_<?php echo $l_banner["id"];?>">
<div style="float:left;width:300px;">
<div class="list_view_bar"><label>BANNER名称</label>&nbsp;&nbsp;<span><input name="title" type="text" value="<?php echo $l_banner["title"];?>" /></span></div>
<div class="list_view_bar"><label>是否显示</label>&nbsp;&nbsp;<span>否<input type="radio" name="display" value="0" <?php if($l_banner["display"]==0){?>checked="checked"<?php };?> />&nbsp;是<input type="radio" name="display" value="1" <?php if($l_banner["display"]==1){?>checked="checked"<?php };?> /></span></div>
<div class="list_view_bar"><label>链接地址</label>&nbsp;&nbsp;<span><input name="url" type="text" value="<?php echo $l_banner["url"];?>" /></span></div>
<div class="list_view_bar"><label>排序</label>&nbsp;&nbsp;<span><input name="order" type="text" size="3" value="<?php echo $l_banner["order_id"];?>" /></span></div>
</div>
<div style="float:left;">
<div class="list_view_bar"><label>BANNER描述</label><br /><textarea name="description" rows="6"><?php echo $l_banner["description"];?></textarea></div>
</div>
</form>
<?php
} else {
	echo "fail";
	exit;
}
?>
