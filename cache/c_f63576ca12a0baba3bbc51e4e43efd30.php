<?php require_once('D:\WEB\cvt\include\class\templite\plugins\modifier.truncate.php'); $this->register_modifier("truncate", "tpl_modifier_truncate");  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 14:20:50 �й���׼ʱ�� */ ?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title>Liuxin's Sweety House</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['TPATH']; ?>
css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['TPATH']; ?>
css/slide.css" />
<script type="text/javascript"  src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.lazyload.min.js"></script>
<script type="text/javascript"  src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.pikachoose.min.js"></script>
<script type="text/javascript"  src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.touchwipe.min.js"></script>
<script type="text/javascript">
$(function() {
	$("img.lazy").lazyload({
    	effect : "fadeIn",
		threshold : 100
	});
});
$(document).ready(function() {
	$("#pikame").PikaChoose({transition:[4]});
	$('.blurThis0').hover(function() {
		$('.blur0').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -43px no-repeat",height:"50px",width:"100px" });
		}, function () {
			$('.blur0').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 10px no-repeat",height:"50px",width:"100px" });
	});
	$('.blurThis1').hover(function() {
		$('.blur1').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -170px no-repeat",height:"70px",width:"110px" });
		}, function () {
			$('.blur1').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -100px no-repeat",height:"70px",width:"110px" });
	});
	$('.blurThis2').hover(function() {
		$('.blur2').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -310px no-repeat",height:"70px",width:"100px" });
		}, function () {
			$('.blur2').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -240px no-repeat",height:"70px",width:"100px" });
	});
	$('.blurThis3').hover(function() {
		$('.blur3').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -450px no-repeat",height:"70px",width:"100px" });
		}, function () {
			$('.blur3').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -380px no-repeat",height:"70px",width:"100px" });
	});
	$('.blurThis4').hover(function() {
		$('.blur4').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -590px no-repeat",height:"70px",width:"95px" });
		}, function () {
			$('.blur4').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -520px no-repeat",height:"70px",width:"95px" });
	});
	$('.blurThis5').hover(function() {
		$('.blur5').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -723px no-repeat",height:"70px",width:"90px" });
		$("#mailto").fadeIn("slow");
		}, function () {
			$('.blur5').css({ background:"url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -653px no-repeat",height:"70px",width:"90px" });
			$("#mailto").fadeOut("slow");
	});
})
</script>
</head>
<body>
<header id="header">
<div class="header">
<div class="hd_frame">
<div class="hd_house1"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/house1.png" /></div>
<div class="hd_house2"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/house2.png" /></div>
<div class="hd_windmill_s"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/windmill_s.gif" /></div>
<div class="hd_windmill_b"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/windmill_b.gif" /></div>
<div class="hd_post"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/post.png" /></div>
<div class="hd_bird"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/bird.png" /></div>
<div class="hd_flowers"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/flowers.png" /></div>
<div class="hd_girl"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/girl.png" /></div>
<div class="hd_mailto" id="mailto"><img src="<?php echo $this->_vars['TPATH']; ?>
images/mailto.png" /></div>
<div class="hd_menu">
<ul>
<li><a class="blurThis0"><div class="blur0" style="background:url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 10px no-repeat;height:50px;width:100px;"></div></a></li>
<li style="width:160px;">&nbsp;</li>
<li><a href="page.php?cid=9" class="blurThis1" ><div class="blur1" style="background:url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -100px no-repeat;height:70px;width:110px;"></div></a></li>
<li><a href="page.php?cid=10" class="blurThis2" ><div class="blur2" style="background:url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -240px no-repeat;height:70px;width:100px;"></div></a></li>
<li><a href="page.php?cid=11" class="blurThis3" ><div class="blur3" style="background:url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -380px no-repeat;height:70px;width:100px;"></div></a></li>
<li><a href="info.php" class="blurThis4" ><div class="blur4" style="background:url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -520px no-repeat;height:70px;width:95px;"></div></a></li>
<li><a href="mailto:star@liuxin.name" class="blurThis5" ><div class="blur5" style="background:url(<?php echo $this->_vars['TPATH']; ?>
images/_topmenu.png) 0 -653px no-repeat;height:70px;width:90px;"></div></a></li>
</ul>
</div>
</div>
</div>
</header>

<section id="wrapper">
<div class="body_frame">
<?php if ($this->_vars['l_banner'] == "nothing"): ?>
<div class="pikachoose">
<ul id="pikame">
<li><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/bd_banner.png" /></a><span>Welcome to my sweety house!</span></li>
</ul>
</div>
<?php else: ?>
<div class="pikachoose">
<ul id="pikame">
<li><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/bd_banner.png" /></a><span>Welcome to my sweety house!</span></li>
<?php if (count((array)$this->_vars['l_banner'])): foreach ((array)$this->_vars['l_banner'] as $this->_vars['item']): ?>
<li><a <?php if ($this->_vars['item']['url'] != ""): ?>href="<?php echo $this->_vars['item']['url']; ?>
"<?php endif; ?> target="_blank"><img class="lazy" src="uploads/banner/<?php echo $this->_vars['item']['filename']; ?>
" title="<?php echo $this->_vars['item']['description']; ?>
" /></a><span><?php echo $this->_vars['item']['title']; ?>
</span></li>
<?php endforeach; endif; ?>
</ul>
</div>
<?php endif; ?>
<div class="bd_list_i">
<div class="bd_list_i_more"><a href="page.php?cid=9" target="_self">>>漫画卡通</a></div>
<div class="bd_list_i_bar">
<?php if ($this->_vars['l_cartoon_p'] == "nothing"): ?>
<dl>
<dt><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/list_thumb.png" /></a></dt>
<dd></dd>
</dl>
<?php else: ?>
<?php if (count((array)$this->_vars['l_cartoon_p'])): foreach ((array)$this->_vars['l_cartoon_p'] as $this->_vars['list']): ?>
<dl>
<dt><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></a></dt>
<dd><a><?php echo $this->_vars['list']['title']; ?>
</a></dd>
</dl>
<?php endforeach; endif; ?>
<?php endif; ?>
</div>
</div>
<div class="bd_list_ii">
<div class="bd_list_ii_more"><a href="page.php?cid=10" target="_self">>>艺术设计</a></div>
<div class="bd_list_ii_bar">
<?php if ($this->_vars['l_art_p'] == "nothing"): ?>
<dl>
<dt><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/list_thumb.png" /></a></dt>
<dd></dd>
</dl>
<?php else: ?>
<?php if (count((array)$this->_vars['l_art_p'])): foreach ((array)$this->_vars['l_art_p'] as $this->_vars['list']): ?>
<dl>
<dt><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></a></dt>
<dd><a><?php echo $this->_vars['list']['title']; ?>
</a></dd>
</dl>
<?php endforeach; endif; ?>
<?php endif; ?>
</div>
</div>
<div class="bd_list_iii">
<div class="bd_list_iii_more"><a href="page.php?cid=11" target="_self">>>摄影作品</a></div>
<div class="bd_list_iii_bar">
<?php if ($this->_vars['l_photo_p'] == "nothing"): ?>
<dl>
<dt><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/list_thumb.png" /></a></dt>
<dd></dd>
</dl>
<?php else: ?>
<?php if (count((array)$this->_vars['l_photo_p'])): foreach ((array)$this->_vars['l_photo_p'] as $this->_vars['list']): ?>
<dl>
<dt><a><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></a></dt>
<dd><a><?php echo $this->_vars['list']['title']; ?>
</a></dd>
</dl>
<?php endforeach; endif; ?>
<?php endif; ?>
</div>
</div>
</div>
</section>

<footer id="footer">
<div class="footer">
<div class="ft_frame">
<div class="ft_flower"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/flowers_ii.png" /></div>
<div class="ft_portrait"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/portrait.png" /></div>
<div class="ft_text">
<ul>
<li><?php echo $this->_vars['info']['name']; ?>
</li>
<li><?php echo $this->_vars['info']['native']; ?>
</li>
<li>职业：<?php echo $this->_vars['info']['profession']; ?>
</li>
<li>兴趣爱好：<?php echo $this->_run_modifier($this->_vars['info']['interest'], 'truncate', 'plugin', 1, 46, "..."); ?>
</li>
<li>喜爱运动：<?php echo $this->_run_modifier($this->_vars['info']['sports'], 'truncate', 'plugin', 1, 46, "..."); ?>
</li>
<li><a href="info.php">>>更多个人简介</a></li>
</ul>
</div>
<div class="ft_email"><a href="mailto:star@liuxin.name"><img src="<?php echo $this->_vars['TPATH']; ?>
images/email.png" /></a></div>
<div class="ft_girl"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/girl_ii.png" /></div>
<div class="ft_castle"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/castle.png" /></div>
<div class="ft_sign"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/sign.png" /></div>
</div>
</div>
</footer>
</body>
</html>