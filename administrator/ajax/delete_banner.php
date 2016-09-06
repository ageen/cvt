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
$sql = "SELECT filename FROM d_banner WHERE id = $id";
$row = get_rows($sql);
$filename = "../../uploads/banner/".$row["filename"];
$filename_thumb = "../../uploads/banner/thumbs/".$row["filename"];
$sql = "DELETE FROM d_banner WHERE id = $id";
if($idb->query_ex($sql)){
	if(file_exists($filename)){
		unlink($filename);
	}
	if(file_exists($filename_thumb)){
		unlink($filename_thumb);
	}
	$sql = "SELECT * FROM d_banner";
	//	分页
	$pagelimit = 3;
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
	$l_banenr = get_rows($sql, "array");
	if($l_banenr == "nothing"){
?>
<div class="no_item">暂无BANNER信息 | <a href="insert.php?mode=banner">新增BANNER</a></div>
<?php
	} else {
		foreach($l_banenr as $k=>$v){
?>
<dl>
<dt id="photo_<?php echo $v['id'];?>" onclick="popup(<?php echo $v['id'];?>)"><img src="../uploads/banner/thumbs/<?php echo $v['filename'];?>" /></dt>
<dd id="item_list<?php echo $v['id'];?>">
<form method="post" onsubmit="return false;" id="update_banner_<?php echo $v["id"];?>">
<div style="float:left;width:300px;">
<div class="list_view_bar"><label>BANNER名称</label>&nbsp;&nbsp;<span><input name="title" type="text" value="<?php echo $v["title"];?>" /></span></div>
<div class="list_view_bar"><label>是否显示</label>&nbsp;&nbsp;<span>否<input type="radio" name="display" value="0" <?php if($v["display"]==0){?>checked="checked"<?php };?> />&nbsp;是<input type="radio" name="display" value="1" <?php if($v["display"]==1){?>checked="checked"<?php };?> /></span></div>
<div class="list_view_bar"><label>链接地址</label>&nbsp;&nbsp;<span><input name="url" type="text" value="<?php echo $v["url"];?>" /></span></div>
<div class="list_view_bar"><label>排序</label>&nbsp;&nbsp;<span><input name="order" type="text" size="3" value="<?php echo $v["order"];?>" /></span></div>
</div>
<div style="float:left;">
<div class="list_view_bar"><label>BANNER描述</label><br /><textarea name="description" rows="6"><?php echo $v["description"];?></textarea></div>
</div>
</form>
</dd>
<div style="clear:both"></div>
<dt><div class="list_view_bar"><button class="button_blue" onclick="ajax_update(<?php echo $v['id'];?>)">更新</button>&nbsp;&nbsp;<button class="button_red" onclick="del(<?php echo $v['id'];?>)">删除</button></div></dt>
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