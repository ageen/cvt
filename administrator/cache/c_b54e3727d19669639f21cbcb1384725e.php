<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 14:33:18 中国标准时间 */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>缃戠珯鍏ㄥ眬閰嶇疆</title>
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
<div class="config_style">
<div class="list_bar_iv">
<form method="post" onsubmit="return false;" id="cv_lock_form">
<label>閿佸畾绠�鍘�:</label>&nbsp;&nbsp;<span>鏄�<input type="radio" name="item_value" value="1" <?php if ($this->_vars['config']['cv_locked'] == 1): ?>checked="checked"<?php endif; ?> /></span>&nbsp;<span>鍚�<input type="radio" name="item_value" value="0" <?php if ($this->_vars['config']['cv_locked'] == 0): ?>checked="checked"<?php endif; ?> /></span>
<span><button onclick="ajax_update('cv_lock_form');">鏇存柊</button></span>
<input type="hidden" name="item" value="cv_locked" />
</form>
</div>
<div class="list_bar_iv">
<span><button onclick="popup();">璁剧疆瀵嗙爜</button></span>
</div>
<hr />
<form method="post" onsubmit="return false;" id="is_mark_form">
<div class="list_bar_iv"><label>鍥剧墖姘村嵃:</label>&nbsp;&nbsp;<span>鏄�<input type="radio" name="is_mark" value="1" <?php if ($this->_vars['config']['is_mark'] == 1): ?>checked="checked"<?php endif; ?> /></span>&nbsp;<span>鍚�<input type="radio" name="is_mark" value="0" <?php if ($this->_vars['config']['is_mark'] == 0): ?>checked="checked"<?php endif; ?> /></span></div>
<div class="list_bar_iv"><label>姘村嵃鏂囧瓧:</label>&nbsp;&nbsp;<span><input type="text" name="mark_text" value="<?php echo $this->_vars['config']['mark_text']; ?>
" /></span></div>
<div class="list_bar_iv"><button onclick="ajax_update('is_mark_form');">鏇存柊</button></div>
<input type="hidden" name="item" value="is_mark" />
</form>
</div>
<div id="change_password">
<h4>鏇存柊瀵嗙爜</h4>
<form id="change_password_form" method="post" onsubmit="return false;">
<div class="list_bar_iv">&nbsp;&nbsp;<labe>瀵嗙爜&nbsp;&nbsp;</labe><input type="password" name="item_value" /></div>
<div class="list_bar_iv">&nbsp;&nbsp;<button onclick="ajax_update('change_password_form');">鏇存柊</button></div>
<input type="hidden" name="item" value="cv_password" />
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
function popup(){
	//$('#photo_'+id).bind('click', function(e) {
		// Prevents the default action to be triggered.
		//e.preventDefault();
		
		// Triggering bPopup when click event is fired
		$('#change_password').bPopup({
			speed: 650,
			transition: 'slideIn',
			modalClose: true
		});
	//});
}
function ajax_update(id){
	$.ajax({
	  	type: "POST",
	  	url: "ajax/update_config.php",
		data: $("#"+id).serialize(),
		success: function(msg){
			if(msg == "fail"){
				alert("鏇存柊澶辫触锛�")
			} else if(msg == "success") {
				alert("鏇存柊鎴愬姛锛�")
			} else {
				alert(msg)
			}
		}
	});
}
</script>