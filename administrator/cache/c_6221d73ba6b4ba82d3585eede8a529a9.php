<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 14:33:25 �й���׼ʱ�� */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>后台登录</title>
<link href="<?php echo $this->_vars['TPATH']; ?>
css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery-1.9.1.min.js"></script>
</head>
<body>
<div class="login_head"><h4><span>It's <?php echo $this->_vars['day']; ?>
, have a nice day!&nbsp;*^_^*</span></h4></div>
<div class="login_form">
<form method="post" onsubmit="return false;" id="login_data">
<div class="login_bar"><label>登录账号</label>&nbsp;&nbsp;<span><input type="text" name="username" /></span></div>
<div class="login_bar"><label>登录密码</label>&nbsp;&nbsp;<span><input type="password" name="password" /></span></div>
<div class="login_bar"><label style="float:left;line-height:25px;padding-right:10px;">验证码</label><span><input type="text" name="verify_code" id="verify_code_data" style="float:left;line-height:20px;height:20px;margin-right:10px;" size="6" /></span><span><img src="verify.php" id="verify_code" style="float:left;" title="点击更换验证码" /></span></div>
<div class="login_bar"><button onclick="ajax_auth();">Go!</button>&nbsp;&nbsp;<span id="show_tip"></span></div>
</form>
</div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$("#verify_code").click(function(){
		$(this).attr("src","verify.php?g="+Math.random());
	});
});
function ajax_auth(){
	$.ajax({
	  	type: "POST",
	  	url: "ajax/verify_auth.php",
		data: $("#login_data").serialize(),
		success: function(msg){
			if(msg == "empty"){
				$("#show_tip").text("请输入完整信息！");
				return false;
			}
			if(msg == "code_error"){
				$("#show_tip").text("验证码错误！");
				$("#verify_code_data").val("");
				return false;	
			}
			if(msg == "fail"){
				$("#show_tip").text("用户名或密码错误！");
				return false;					
			}
			if(msg == "success"){
				window.location.href='index.php';
			}
		}
	});	
}
</script>