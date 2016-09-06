<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
if(isset($_GET["id"])&&($_GET["id"]!="")){
	$id=$_GET["id"];
} else {
	echo "fail";
	exit;
}
if(isset($_POST["type_info"])&&($_POST["type_info"]!="")){
	$type_info = $_POST["type_info"];	
} else {
	echo "fail";
	exit;
}

switch($type_info):
	case "edu_info":
		$sql = "DELETE FROM info_education WHERE id = $id";
		if($idb->query_ex($sql)){
			$sql = "SELECT * FROM info_education";
			$rows = get_rows($sql, "array");
			if($rows == "nothing"){
		?>
<table>
<tr><th width=200>起止时间</th><th width=220>学校名称</th><th width=200>所学专业</th><th></th></tr>
<tr><td colspan="3"><hr /></td></tr>
<tr><td colspan="4"><span style="color:#F00;">暂无信息</span></td></tr>
<tr><td colspan="4"><hr /></td></tr>
</table>
		<?php		
			} else {
		?>
<table>
<tr><th width=200>起止时间</th><th width=220>学校名称</th><th width=200>所学专业</th><th></th></tr>
<tr><td colspan="3"><hr /></td></tr>
		<?php
				foreach($rows as $k=>$v){
		?>
<tr>
<td><?php echo $v["s_date"];?> 至 <?php echo $v["e_date"]==""?"现在":$v["e_date"];?></td><td><?php echo $v["school_name"];?></td><td><?php echo $v["specialty_name"];?></td>
<td><form method="post" action="ajax/delete_info.php" onSubmit="return false;" id="delete_edu_info<?php echo $v["id"];?>"><button onClick="ajax_delete(<?php echo $v["id"];?>,'edu',3);">删除</button><input type="hidden" name="type_info" value="edu_info" /></form></td>
</tr>
<tr><td colspan="4" style="text-align:left;text-indent:1em;"><span style="color:#000;font-weight:bold;">备注：</span><?php echo $v["append_note"] == ""?"<span style='color:#F00;'>暂无备注</span>":$v["append_note"]; ?></td></tr>
<tr><td colspan="3"><hr /></td></tr>
		<?php
				}
?>
</table>
<?php
			}
			exit;
		} else {
			echo "fail";
			exit;
		}
	break;
	
	case "job_info":
		$sql = "DELETE FROM info_job WHERE id = $id";
		if($idb->query_ex($sql)){
			$sql = "SELECT * FROM info_job";
			$rows = get_rows($sql, "array");
			if($rows == "nothing"){
		?>
<table>
<tr><th width=190>起止时间</th><th width=200>公司名称</th><th width=120>所属部门</th><th width=180>职位</th><th></th></tr>
<tr><td colspan="4"><hr /></td></tr>
<tr><td colspan="4"><span style="color:#F00;">暂无信息</span></td></tr>
<tr><td colspan="4"><hr /></td></tr>
</table>
		<?php		
			} else {
		?>
<table>
<tr><th width=190>起止时间</th><th width=200>公司名称</th><th width=120>所属部门</th><th width=180>职位</th><th></th></tr>
<tr><td colspan="4"><hr /></td></tr>
        <?php
				foreach($rows as $k=>$v){
		?>
<tr><td><?php echo $v["s_date"];?> 至 <?php echo $v["e_date"]==""?"现在":$v["e_date"];?></td><td><?php echo $v["company_name"];?></td><td><?php echo $v["department"];?></td><td><?php echo $v["occupation"];?></td><td><form method="post" id="delete_job_info<?php echo $v["id"];?>" onSubmit="return false;">
<button onClick="ajax_delete(<?php echo $v["id"];?>,'job',4);">删除</button><input type="hidden" name="type_info" value="job_info" /></form></td></tr>
<tr><td colspan="4" style="text-align:left;text-indent:1em;"><span style="color:#000;font-weight:bold;">备注：</span><?php echo $v["append_note"] == ""?"<span style='color:#F00;'>暂无备注</span>":$v["append_note"]; ?></td></tr>
<tr><td colspan="4"><hr /></td></tr>
		<?php
				}
		?>
</table>
        <?php
			}
			exit;
		} else {
			echo "fail";
			exit;
		}
	break;
	
	default:
		echo "fail";
		exit;
	break;
endswitch;
?>