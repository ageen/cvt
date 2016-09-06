<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 16:15:35 �й���׼ʱ�� */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INSERT BANNER</title>
<link href="<?php echo $this->_vars['TPATH']; ?>
css/menu.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['TPATH']; ?>
css/style.css" rel="stylesheet" type="text/css" />
<style>
.wrap {width: 960px; margin:0 auto;}
</style>
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
<div class="insert_form">
<div id="show_photo_process">
<h4>新增BANNER</h4>
<form action="save.php" method="post" id="insert_photo_form" name="insert_photo_form" enctype="multipart/form-data">
<div class="list_bar"><span>BANNER名称</span><input type="text" name="title" /></div>
<div class="list_bar"><span>BANNER描述</span><textarea name="description" cols="16" rows="6"></textarea></div>
<div class="list_bar"><span>链接地址</span><input type="text" name="url" size="40" /></div>
<div class="list_bar"><span>选择BANNER图片</span><input type="file" name="banner_d" /></div>
<div class="list_bar"><span>排序</span><input type="text" name="order_id" /></div>
<div class="list_bar">
<span>是否显示</span>否<input type="radio" name="display" value="0" checked="checked" />&nbsp;是<input type="radio" name="display" value="1" /></div>
<div class="list_bar"><button type="submit">新增</button></div>
<input type="hidden" name="mode" value="banner" />
</form>
</div>
</div>
</body>
</html>
<script type='text/javascript' src='<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.ajax.upload.js'></script>
<script type='text/javascript' src='<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.validate.js'></script>
<script type="text/javascript">
$("#insert_photo_form").validate({
	rules:{
		title:"required",
		order:""
	},
	messages:{
		title:"BANNER名称不能为空"
	}
});
</script>