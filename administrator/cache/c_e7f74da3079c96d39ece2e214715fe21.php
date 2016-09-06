<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 14:33:09 �й���׼ʱ�� */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VIEW PHOTO</title>
<link href="<?php echo $this->_vars['TPATH']; ?>
css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['TPATH']; ?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery-1.9.1.min.js"></script>
<script type='text/javascript' src='<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.dcmegamenu.1.2.js'></script>
<script type="text/javascript">
$(document).ready(function($){
	$('#mega-menu-tut').dcMegaMenu({
		rowItems:'3',
		speed:'fast'
	});
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("menu.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="list_view_i" id="list_view">
<?php if ($this->_vars['l_photo'] == "nothing"): ?>
<div class="no_item">暂无图片信息 | <a href="insert.php?mode=photo">新增图片</a></div>
<?php else: ?>
<?php if (count((array)$this->_vars['l_photo'])): foreach ((array)$this->_vars['l_photo'] as $this->_vars['list']): ?>
<dl>
<dt id="photo_<?php echo $this->_vars['list']['id']; ?>
" onclick="popup(<?php echo $this->_vars['list']['id']; ?>
)"><img src="../uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></dt>
<dd id="item_list<?php echo $this->_vars['list']['id']; ?>
">
<form method="post" onsubmit="return false;" id="update_photo_<?php echo $this->_vars['list']['id']; ?>
">
<div class="list_view_bar"><label>图片名称</label>&nbsp;&nbsp;<span><input name="title" type="text" value="<?php echo $this->_vars['list']['title']; ?>
" /></span></div>
<div class="list_view_bar"><label>类目名称</label>&nbsp;
<span><select name="category_id">
<?php if (count((array)$this->_vars['l_cate'])): foreach ((array)$this->_vars['l_cate'] as $this->_vars['list2']): ?>
<?php if ($this->_vars['list2']['id'] == $this->_vars['list']['category_id']): ?>
<option value="<?php echo $this->_vars['list2']['id']; ?>
" selected="selected"><?php echo $this->_vars['list2']['title']; ?>
</option>
<?php else: ?>
<option value="<?php echo $this->_vars['list2']['id']; ?>
"><?php echo $this->_vars['list2']['title']; ?>
</option>
<?php endif; ?>
<?php endforeach; endif; ?>
</select></span></div>
<div class="list_view_bar"><label>是否在简历显示</label>&nbsp;&nbsp;<span>否<input type="radio" name="show_in_cv" value="0" <?php if ($this->_vars['list']['show_in_cv'] == 0): ?>checked="checked"<?php endif; ?> />&nbsp;是<input type="radio" name="show_in_cv" value="1" <?php if ($this->_vars['list']['show_in_cv'] == 1): ?>checked="checked"<?php endif; ?> /></span></div>
<div class="list_view_bar"><label>图片描述</label>&nbsp;&nbsp;<textarea name="description" rows="6"><?php echo $this->_vars['list']['description']; ?>
</textarea></div>
<div class="list_view_bar"><button class="button_blue" onclick="ajax_update(<?php echo $this->_vars['list']['id']; ?>
)">更新</button>&nbsp;&nbsp;<button class="button_red" onclick="del(<?php echo $this->_vars['list']['id']; ?>
)">删除</button></div>
</form>
</dd>
</dl>
<div style="clear:both"></div>
<hr />
<?php endforeach; endif; ?>
<?php endif; ?>
<div class="paginate_style">
<?php echo $this->_vars['page_string']; ?>

</div>
</div>
<div style="clear:both;"></div>
<div id="change_photo" class="change_photo">
<h4>更新图片</h4>
<form id="change_photo_form" name="change_photo_form" method="post" onsubmit="return false;" enctype="multipart/form-data">
<div class="list_bar3"><label>选择图片文件:</label><input type="file" name="photo_file" /></div>
<div class="list_bar3" style="text-align:center;"><button onclick="ajax_update_photo();">更新</button></div>
</form>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.ajax.upload.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.bpopup.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/waypoints.min.js"></script>
<script type="text/javascript">
function del(id) {
	if(window.confirm('你确定要删除该记录！')){
		ajax_delete(id)
	}else{
		//alert("取消");
		return false;
	}
}//del end
function ajax_delete(id){
	$.ajax({
	  	type: "GET",
	  	url: "ajax/delete_photo.php?id="+id,
		success: function(msg){
			if(msg == "fail"){
				alert("删除失败！")
			} else {
				alert("删除成功！")
	   			$("#list_view").html(msg)	
			}
		}
	});
}
function ajax_update(id){
	$.ajax({
	  	type: "POST",
	  	url: "ajax/update_photo.php?id=" + id,
		data: $("#update_photo_"+id).serialize(),
		success: function(msg){
			if(msg == "fail"){
				alert("更新失败！")
			} else {
				alert("更新成功！")
				$("#item_list"+id).html(msg)
			}
		}
	});
}
var photo_id
function popup(id){
	//$('#photo_'+id).bind('click', function(e) {
		// Prevents the default action to be triggered. 
		//e.preventDefault();
		
		// Triggering bPopup when click event is fired
		$('#change_photo').bPopup({
			speed: 650,
			transition: 'slideIn',
			modalClose: true
		});
		photo_id = id
	//});
}
function ajax_update_photo(id){
	id = photo_id
	var options = {
		url:'ajax/change_photo.php?id='+id,
		complete: function(response)
		{
			//alert(response.responseText)
			if(response.responseText != "fail"){
				$("#photo_"+id).html(response.responseText)
				alert("图片更新成功！");
			} else {
				alert("图片更新失败！");
				//$("#education_form_popup").fadeOut("slow");
			}
		},
		error: function()
		{
			alert("图片更新失败！")
		}
	};
	$("#change_photo_form").ajaxSubmit(options);
}
</script>