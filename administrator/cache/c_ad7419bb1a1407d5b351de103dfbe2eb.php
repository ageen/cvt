<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 14:33:10 中国标准时间 */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VIEW BANNER</title>
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
<div class="list_view_ii" id="list_view">
<?php if ($this->_vars['l_banner'] == "nothing"): ?>
<div class="no_item">鏆傛棤BANNER淇℃伅 | <a href="insert.php?mode=banner">鏂板BANNER</a></div>
<?php else: ?>
<?php if (count((array)$this->_vars['l_banner'])): foreach ((array)$this->_vars['l_banner'] as $this->_vars['list']): ?>
<dl>
<dt id="banner_<?php echo $this->_vars['list']['id']; ?>
" onclick="popup(<?php echo $this->_vars['list']['id']; ?>
)"><img src="../uploads/banner/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></dt>
<dd id="item_list<?php echo $this->_vars['list']['id']; ?>
">
<form method="post" onsubmit="return false;" id="update_banner_<?php echo $this->_vars['list']['id']; ?>
">
<div style="float:left;width:300px;">
<div class="list_view_bar"><label>BANNER鍚嶇О</label>&nbsp;&nbsp;<span><input name="title" type="text" value="<?php echo $this->_vars['list']['title']; ?>
" /></span></div>
<div class="list_view_bar"><label>鏄惁鏄剧ず</label>&nbsp;&nbsp;<span>鍚�<input type="radio" name="display" value="0" <?php if ($this->_vars['list']['display'] == 0): ?>checked="checked"<?php endif; ?> />&nbsp;鏄�<input type="radio" name="display" value="1" <?php if ($this->_vars['list']['display'] == 1): ?>checked="checked"<?php endif; ?> /></span></div>
<div class="list_view_bar"><label>閾炬帴鍦板潃</label>&nbsp;&nbsp;<span><input name="url" type="text" value="<?php echo $this->_vars['list']['url']; ?>
" /></span></div>
<div class="list_view_bar"><label>鎺掑簭</label>&nbsp;&nbsp;<span><input name="order_id" type="text" size="3" value="<?php echo $this->_vars['list']['order_id']; ?>
" /></span></div>
</div>
<div style="float:left;">
<div class="list_view_bar"><label>BANNER鎻忚堪</label><br /><textarea name="description" rows="6"><?php echo $this->_vars['list']['description']; ?>
</textarea></div>
</div>
</form>
</dd>
<div style="clear:both"></div>
<dt><div class="list_view_bar"><button class="button_blue" onclick="ajax_update(<?php echo $this->_vars['list']['id']; ?>
)">鏇存柊</button>&nbsp;&nbsp;<button class="button_red" onclick="del(<?php echo $this->_vars['list']['id']; ?>
)">鍒犻櫎</button></div></dt>
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
<div id="change_banner_photo" class="change_banner">
<h4>鏇存柊BANNER</h4>
<form id="change_banner_form" name="change_banner_form" method="post" onsubmit="return false;" enctype="multipart/form-data">
<div class="list_bar3"><label>閫夋嫨BANNER鍥剧墖:</label><input type="file" name="banner_file" /></div>
<div class="list_bar3" style="text-align:center;"><button onclick="ajax_update_banner();">鏇存柊</button></div>
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
	if(window.confirm('浣犵‘瀹氳鍒犻櫎璇ヨ褰曪紒')){
		ajax_delete(id)
	}else{
		//alert("鍙栨秷");
		return false;
	}
}//del end
function ajax_delete(id){
	$.ajax({
	  	type: "GET",
	  	url: "ajax/delete_banner.php?id="+id,
		success: function(msg){
			if(msg == "fail"){
				alert("鍒犻櫎澶辫触锛�")
			} else {
				alert("鍒犻櫎鎴愬姛锛�")
	   			$("#list_view").html(msg)
			}
		}
	});
}
function ajax_update(id){
	$.ajax({
	  	type: "POST",
	  	url: "ajax/update_banner.php?id=" + id,
		data: $("#update_banner_"+id).serialize(),
		success: function(msg){
			if(msg == "fail"){
				alert("鏇存柊澶辫触锛�")
			} else {
				alert("鏇存柊鎴愬姛锛�")
				$("#item_list"+id).html(msg)
			}
		}
	});
}
var banner_id
function popup(id){
	//$('#photo_'+id).bind('click', function(e) {
		// Prevents the default action to be triggered. 
		//e.preventDefault();
		
		// Triggering bPopup when click event is fired
		$('#change_banner_photo').bPopup({
			speed: 650,
			transition: 'slideIn',
			modalClose: true
		});
		banner_id = id
	//});
}
function ajax_update_banner(id){
	id = banner_id
	var options = {
		url:'ajax/change_banner.php?id='+id,
		complete: function(response)
		{
			//alert(response.responseText)
			if(response.responseText != "fail"){
				$("#banner_"+id).html(response.responseText)
				alert("鍥剧墖鏇存柊鎴愬姛锛�");
			} else {
				alert("鍥剧墖鏇存柊澶辫触锛�");
				//$("#education_form_popup").fadeOut("slow");
			}
		},
		error: function()
		{
			alert("鍥剧墖鏇存柊澶辫触锛�")
		}
	};
	$("#change_banner_form").ajaxSubmit(options);
}
</script>