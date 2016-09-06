<?php require_once('D:\WEB\cvt\administrator\include\class\templite\plugins\modifier.truncate.php'); $this->register_modifier("truncate", "tpl_modifier_truncate");  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 14:33:03 �й���׼ʱ�� */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VIEW CATEGORY</title>
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
	$(".tooltip").toolTip();
});
//<![CDATA[
(function($){
$.fn.toolTip = function(){
	return this.each(function(){
    var obj = $(this);
    var txt = obj[0].title;
    var left = obj.offset().left + 10;
    var top = obj.offset().top;
    var showTip = function(){
     $(document.body).append("<div id='showTip'><div id='tips' class='tip-ct'></div></div>");
     obj[0].title = '';
     $("#tips").html(txt);
     var tipTop = top-$("#showTip").outerHeight();
     $("#showTip").css({'position':'absolute',left:left,top:tipTop}).show();
    };
    var hideTip = function(){
     $("#showTip").remove();
    };
    $(this).hover(function(){showTip();},function(){hideTip();}).focus(function(){showTip();}).blur(function(){hideTip();});
   });
}
})(jQuery)
//]]>
function del() {
	if(window.confirm('你确定要删除该记录！')){
		//alert("确定");
		return true;
	}else{
		//alert("取消");
		return false;
	}
}//del end
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("menu.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="list_view">
<?php if ($this->_vars['cate_arr'] == "nothing"): ?>
<div class="no_item">暂无类目信息 | <a href="insert.php?mode=category">新增类目</a></div>
<?php else: ?>
<?php $i=1; ?>
<table>
<tr><th width="40">序号</th><th width="150">类目名称</th><th>类目描述</th><th width="65">是否显示</th><th width="80">相关操作</th></tr>
<?php if (count((array)$this->_vars['cate_arr'])): foreach ((array)$this->_vars['cate_arr'] as $this->_vars['list']): ?>
<tr><td><?php echo $i; ?></td><td style="font-size:12px;"><a href="view.php?mode=photo&cate=<?php echo $this->_vars['list']['id']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a><span style="color:#666666">(共<?php echo $this->_vars['list']['p_count']; ?>
张)</span></td><td class="show_describe"><?php if ($this->_vars['list']['description'] == ""): ?><span style="color:#FF0000">无类目描述</span><?php else: ?><a class="tooltip" title="<?php echo $this->_vars['list']['description']; ?>
"><?php echo $this->_run_modifier($this->_vars['list']['description'], 'truncate', 'plugin', 1, 75, "..."); ?>
</a><?php endif; ?></td><td><?php if ($this->_vars['list']['display'] == 1): ?>是<?php else: ?>否<?php endif; ?></td><td class="control_operator"><a href="modify.php?mode=category&id=<?php echo $this->_vars['list']['id']; ?>
">编辑</a>&nbsp;&nbsp;<a href="delete.php?mode=category&id=<?php echo $this->_vars['list']['id']; ?>
" onclick="javascript:return del();">删除</a></td></tr>
<?php $i++; ?>
<?php endforeach; endif; ?>
</table>
<?php endif; ?>
</div>
</body>
</html>