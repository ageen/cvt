<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 16:14:46 �й���׼ʱ�� */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VIEW ACCOUNT</title>
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
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("menu.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="list_view">
<?php if ($this->_vars['l_account'] == "nothing"): ?>
<div class="no_item">暂无账号信息 | <a href="insert.php?mode=account">新增账号</a></div>
<?php else: ?>
<?php $i=1; ?>
<table>
<tr><th width="40">序号</th><th width="150">账号名称</th><th width="80">相关操作</th></tr>
<?php if (count((array)$this->_vars['l_account'])): foreach ((array)$this->_vars['l_account'] as $this->_vars['list']): ?>
<tr><td><?php echo $i; ?></td><td style="font-size:12px;" id="username_show<?php echo $this->_vars['list']['id']; ?>
"><?php echo $this->_vars['list']['username']; ?>
</td><td class="control_operator"><a style="cursor:pointer;" onclick="javascript:popup(<?php echo $this->_vars['list']['id']; ?>
);">更改用户信息</a>&nbsp;&nbsp;<a href="delete.php?mode=account&id=<?php echo $this->_vars['list']['id']; ?>
" onclick="javascript:return del();">删除</a></td></tr>
<?php $i++; ?>
<?php endforeach; endif; ?>
</table>
<?php endif; ?>
</div>
<div id="change_account_info">
<form method="post" id="change_username" onsubmit="return false;">
<h4>更改用户名</h4>
<div class="list_bar3"><label>用户名&nbsp;&nbsp;</label><input type="text" name="username" /></div>
<div class="list_bar3"><button onclick="ajax_post('change_username');">更新</button></div>
</form>
<hr />
<form method="post" id="change_password_account" onsubmit="return false;">
<h4>更改密码</h4>
<div class="list_bar3"><label>当前密码&nbsp;&nbsp;</label><input type="password" name="password" /></div>
<div class="list_bar3"><label>新密码&nbsp;&nbsp;</label><input type="password" name="new_password" /></div>
<div class="list_bar3"><button onclick="ajax_post('change_password_account');">更新</button></div>
</form>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.bpopup.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/waypoints.min.js"></script>
<script type="text/javascript">
var account_id
function popup(id){
	//$('#photo_'+id).bind('click', function(e) {
		// Prevents the default action to be triggered. 
		//e.preventDefault();
		
		// Triggering bPopup when click event is fired
		$('#change_account_info').bPopup({
			speed: 650,
			transition: 'slideIn',
			modalClose: true
		});
		account_id = id
	//});
}
function ajax_post(form_id,id){
	id = account_id
	$.ajax({
	  	type: "POST",
	  	url: "ajax/update_account.php?id=" + id,
		data: $("#"+form_id).serialize(),
		success: function(msg){
			if(msg == "fail"){
				alert("更新失败！")
			} else {
				alert("更新成功！")
				if(msg != "success"){
					$("#username_show"+id).html(msg)	
				}
			}
		}
	});	
}
function del(){
	if(window.confirm('你确定要删除该记录！')){
		//alert("确定");
		return true;
	}else{
		//alert("取消");
		return false;
	}	
}
</script>