<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-19 08:53:27 �й���׼ʱ�� */ ?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['TPATH']; ?>
css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['TPATH']; ?>
css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/modernizr.custom.97074.js"></script>
<script type="text/javascript">
$(function(){
	$(window).scroll(function(){
		yy = $(this).scrollTop();
		xx = $(this).width();
		//alert(xx);
		boxXX = xx/2 - 280;
		if ($(this).scrollTop() > 51) {
			//$('#box').css({"position":"fixed",top:"0px",left:boxXX + "px"});
			$('#box').animate({top:yy+"px"},0);
		} else {
			$('#box').css({"position":"absolute",top:"0px",left:"0px"});
		}
	})
	$('.page_list_prev').hover(function() {
		$('.page_list_prev').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/prev_next.png) 0 -70px no-repeat"});
		}, function () {
			$('.page_list_prev').css({background:"url(<?php echo $this->_vars['TPATH']; ?>
images/prev_next.png) 0 -30px no-repeat"});
	});
	$('.page_list_next').hover(function() {
			$('.page_list_next').css({background:"url(<?php echo $this->_vars['TPATH']; ?>
images/prev_next.png) 0 -195px no-repeat"});
		}, function () {
			$('.page_list_next').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/prev_next.png) 0 -155px no-repeat"});
	});
})
$(function() {
	$("img.lazy").lazyload({
    	effect : "fadeIn",
		threshold : 100
	});
});
</script>
</head>
<body>
<div class="page_up">
<div class="page_menu" id="box">
<ul>
<li><a href="index.php">首页</a></li>
<li><a href="page.php?cid=9">漫画卡通</a></li>
<li><a href="page.php?cid=10">艺术设计</a></li>
<li><a href="page.php?cid=11">摄影作品</a></li>
<li><a href="info.php">个人简介</a></li>
<li><a href="mailto:star@liuxin.name">邮件投递</a></li>
</ul>
</div>
</div>
<div class="page_top_bk"></div>
<div class="page_list">
<?php if ($this->_vars['pre'] == "no"): ?>
<div class="page_list_prev_no"></div>
<?php else: ?>
<a href="?cid=<?php echo $this->_vars['cid']; ?>
&page=<?php echo $this->_vars['pre']; ?>
"><div class="page_list_prev"></div></a>
<?php endif; ?>
<ul id="da-thumbs" class="da-thumbs gallery">
<?php if ($this->_vars['l_cartoon_p'] == "nothing"): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/page_thumb.png" width="300" height="300"  /></li>
<?php else: ?>
<?php if (count((array)$this->_vars['l_cartoon_p'])): foreach ((array)$this->_vars['l_cartoon_p'] as $this->_vars['list']): ?>
<li><a href="uploads/photos/<?php echo $this->_vars['list']['filename']; ?>
" rel="prettyPhoto[gallery1]"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
"  alt="<?php echo $this->_vars['list']['title']; ?>
" width="300" height="300"  /><div><span><h4><?php echo $this->_vars['list']['title']; ?>
</h4><?php echo $this->_vars['list']['description']; ?>
</span></div></a></li>
<?php endforeach; endif; ?>
<?php endif; ?>
</ul>
<div style="clear:both"></div>
<?php if ($this->_vars['next'] == "no"): ?>
<div class="page_list_next_no"></div>
<?php else: ?>
<a href="?cid=<?php echo $this->_vars['cid']; ?>
&page=<?php echo $this->_vars['next']; ?>
"><div class="page_list_next"></div></a>
<?php endif; ?>

</div>
<div class="page_footer">
<div class="page_windmill"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/_page_windmill.png" /></div>
<div class="page_grass"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/_page_grass.png" /></div>
<div class="page_flower"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/_page_flowers.png" /></div>
<div class="page_castle"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/_page_castle.png" /></div>
<div class="page_sign">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="224" height="124">
<param name="movie" value="<?php echo $this->_vars['TPATH']; ?>
images/sign.swf">
<param name="quality" value="high">
<param name="wmode" value="transparent">
<embed src="<?php echo $this->_vars['TPATH']; ?>
images/sign.swf" wmode="transparent" value="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="224" height="124"></embed>
</object>
</div>
</div>
</body>
</html>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.hoverdir.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
$(function() {
	$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
});

$(document).ready(function(){
	$("area[rel^='prettyPhoto']").prettyPhoto();
				
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
		custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
		changepicturecallback: function(){ initialize(); }
	});

	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
		custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',changepicturecallback: function(){ _bsap.exec(); }
	});
});
</script>