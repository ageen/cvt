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
$sql = "SELECT filename FROM d_photo WHERE id = $id";
$row = get_rows($sql);
$filename = "../../uploads/photos/".$row["filename"];
$filename_thumb = "../../uploads/photos/thumbs/".$row["filename"];
$sql = "DELETE FROM d_photo WHERE id = $id";
if($idb->query_ex($sql)){
	if(file_exists($filename)){
		unlink($filename);
	}
	if(file_exists($filename_thumb)){
		unlink($filename_thumb);
	}
	$sql = "SELECT * FROM d_photo";
	//	分页
	$pagelimit = 6;
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
	$v = get_rows($sql, "array");
	$sql = "SELECT * FROM d_category";
	$list_c = get_rows($sql, "array");
	if($v == "nothing"){
?>
<div class="no_item">暂无图片信息 | <a href="insert.php?mode=photo">新增图片</a></div>
<?php
	} else {
		foreach($v as $k=>$v){
?>
<dl>
<dt><img src="../uploads/photos/thumbs/<?php echo $v["filename"];?>" /></dt>
<dd id="item_list<?php echo $v["id"];?>">
<form method="post" onsubmit="return false;" id="update_photo_<?php echo $v["id"];?>">
<div class="list_view_bar"><label>图片名称</label>&nbsp;&nbsp;<span><input name="title" type="text" value="<?php echo $v["title"];?>" /></span></div>
<div class="list_view_bar"><label>类目名称</label>&nbsp;
<span><select name="category_id">
<?php
foreach($list_c as $k1=>$v1){
	if($v["id"]==$v["category_id"]){
?>
<option value="<?php echo $v1["id"];?>" selected="selected"><?php echo $v1["title"];?></option>
<?php	
	} else {
?>
<option value="<?php echo $v1["id"];?>"><?php echo $v1["title"];?></option>
<?php	
	}
}
?>
{bm /foreach /}
</select></span></div>
<div class="list_view_bar"><label>是否在简历显示</label>&nbsp;&nbsp;<span>否<input type="radio" name="show_in_cv" value="0" <?php if($v["show_in_cv"]==0){echo "checked='checked'";}?> />&nbsp;是<input type="radio" name="show_in_cv" value="1" <?php if($v["show_in_cv"]==1){echo "checked='checked'";}?> /></span></div>
<div class="list_view_bar"><label>图片描述</label>&nbsp;&nbsp;<textarea name="description" rows="6"><?php echo $v["description"];?></textarea></div>
<div class="list_view_bar"><button class="button_blue" onclick="ajax_update(<?php echo $v["id"];?>)">更新</button>&nbsp;&nbsp;<button class="button_red" onclick="del(<?php echo $v["id"];?>)">删除</button></div>
</form>
</dd>
</dl>
<div style="clear:both"></div>
<hr />
<?php
		}
	}
?>
<div class="paginate_style">
<?php echo $page_string;?>
</div>
<?php
} else {
	echo "fail";
	exit;
}
?>