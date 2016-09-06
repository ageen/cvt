<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 09:44:48 中国标准时间 */ ?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv="Page-Exit" content="revealTrans(Duration=10,Transition=0)">
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title>涓汉绠�鍘嗭紙Curriculum Vitae锛� - 缂栬緫妯″紡</title>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['TPATH']; ?>
css/cv_style.css" />
<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript"  src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery-1.9.1.min.js"></script>
<script type="text/javascript"	src="<?php echo $this->_vars['TPATH']; ?>
scripts/jquery.lazyload.min.js"></script>
<script type="text/javascript">
$(function() {
	$("img.lazy").lazyload({
    	effect : "fadeIn",
		threshold : 100
	});
});
</script>
</head>
<body>
<div class="menu">
	<div id="nav">
    	<div style="line-height:30px;font-weight:bold; text-align:center;font-size:14px;"><a href="index.php" style="text-decoration:none;color:#333;">杩斿洖棣栭〉</a></div>
		<ul class="navigation">
        	<li data-slide="1" style="background:#626262;">椤堕儴</li>
			<li data-slide="2" style="background:#1e4e98;">涓汉淇℃伅</li>
			<li data-slide="3" style="background:#2c7d04;">鏁欒偛鑳屾櫙</li>
			<li data-slide="4" style="background:#cb5903;">宸ヤ綔缁忓巻</li>
			<li data-slide="5" style="background:#910909;">浣滃搧妗堜緥</li>
		</ul>
	</div>
</div>

<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
<div class="slide_header">
<h1>涓汉绠�鍘�</h1>
<h2>Curriculum Vitae</h2>
<div class="info_title"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/info_title.png" id="personal_info" /></div>
<div class="education_title"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/education_title.png" id="education_info" /></div>
<div class="experience_title"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/experience_title.png" id="experience_info" /></div>
<div class="example_title"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/example_title.png" id="example_info" /></div>
</div>
</div>
<!--personal info-->
<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
<div class="slide_frame">
<div class="slide_title"><div class="slide_title_bk"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/blue.png" /></div><div class="slide_title_text">涓汉淇℃伅<p>Personal Information</p></div></div>
<div style="clear:both;"></div>
<div id="container">
<div class="list_bar"><label>濮撳悕<span>(NAME)</span></label><p id="name"><?php if ($this->_vars['info']['name'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['name'];  endif; ?></p></div>
<div class="list_bar"><label>骞撮緞<span>(AGE)</span></label><p id="age"><?php if ($this->_vars['info']['age'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['age'];  endif; ?></p></div>
<div class="list_bar"><label>鎬у埆<span>(GENDER)</span></label><p id="gender"><?php if ($this->_vars['info']['gender'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['gender'];  endif; ?></p></div>
<div class="list_bar"><label>鑱屼笟<span>(PROFESSION)</span></label><p id="profession"><?php if ($this->_vars['info']['profession'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['profession'];  endif; ?></p></div>
<div class="list_bar"><label>绫嶈疮<span>(NATIVE PLACE)</span></label><p id="native"><?php if ($this->_vars['info']['native'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['native'];  endif; ?></p></div>
<div class="list_bar"><label>鐜板眳浣忓湴<span>(RESIDENCE)</span></label><p id="residence"><?php if ($this->_vars['info']['residence'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['residence'];  endif; ?></p></div>
<div class="list_bar"><label>鍏磋叮鐖卞ソ<span>(INTEREST)</span></label><p id="interest"><?php if ($this->_vars['info']['interest'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['interest'];  endif; ?></p></div>
<div class="list_bar"><label>鍠滅埍杩愬姩<span>(INTEREST)</span></label><p id="sports"><?php if ($this->_vars['info']['sports'] == ""): ?><span style="color:#F00">鏆傛棤淇℃伅</span><?php else:  echo $this->_vars['info']['sports'];  endif; ?></p></div>
<div class="list_bar_img" id="list_bar_img"><img id="add_person_image" class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php if ($this->_vars['info']['portrait'] == ""):  echo $this->_vars['TPATH']; ?>
images/no_portrait.png"<?php else:  echo $this->_vars['info']['portrait']; ?>
"<?php endif; ?> /></div>
</div>
</div>
<div id="add_person_image_pop">
<h4>鏇存柊涓汉鍥剧墖</h4>
<hr />
<form id="person_image_form" name="person_image_form" method="post" action="ajax/update_person_image.php" enctype="multipart/form-data">
<div class="list_bar3"><label>閫夋嫨鍥剧墖鏂囦欢:</label><input type="file" name="portrait" /></div>
<div class="list_bar3" style="text-align:center;"><button type="submit">鏇存柊</button></div>
</form>
</div>
</div>
<!--education info-->
<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
<div class="slide_frame">
<div class="slide_title"><div class="slide_title_bk"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/green.png" /></div><div class="slide_title_text">鏁欒偛鑳屾櫙<p>Education Background</p></div></div>
<div id="container3" class="container_d">
<table>
<tr><th width=200>璧锋鏃堕棿</th><th width=220>瀛︽牎鍚嶇О</th><th width=200>鎵�瀛︿笓涓�</th><th></th></tr>
<tr><td colspan="3"><hr /></td></tr>
<?php if ($this->_vars['edu'] == "nothing"): ?>
<tr><td colspan="4"><span style="color:#F00;">鏆傛棤淇℃伅</span></td></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php else: ?>
<?php if (count((array)$this->_vars['edu'])): foreach ((array)$this->_vars['edu'] as $this->_vars['item']): ?>
<tr>
<td><?php echo $this->_vars['item']['s_date']; ?>
 鑷� <?php if ($this->_vars['item']['e_date'] == ""): ?>鐜板湪<?php else:  echo $this->_vars['item']['e_date'];  endif; ?></td><td><?php echo $this->_vars['item']['school_name']; ?>
</td><td><?php echo $this->_vars['item']['specialty_name']; ?>
</td>
<td><form method="post" action="ajax/delete_info.php" onSubmit="return false;" id="delete_edu_info<?php echo $this->_vars['item']['id']; ?>
"><button onClick="ajax_delete(<?php echo $this->_vars['item']['id']; ?>
,'edu',3);">鍒犻櫎</button><input type="hidden" name="type_info" value="edu_info" /></form></td>
</tr>
<tr>
<td colspan="4" style="text-align:left;text-indent:1em;">
<span style="color:#000;font-weight:bold;">澶囨敞锛�</span><?php if ($this->_vars['item']['append_note'] == ""): ?><span style="color:#F00;">鏆傛棤澶囨敞</span><?php else:  echo $this->_vars['item']['append_note'];  endif; ?>
</td>
</tr>
<tr><td colspan="3"><hr /></td></tr>
<?php endforeach; endif; ?>
<?php endif; ?>
</table>
</div>
<div class="add_time_bar"><a id="add_education" style="cursor:pointer;">鏂板椤圭洰</a></div>
</div>
<div id="education_form_popup">
<h4>鏂板椤圭洰</h4>
<form id="add_education_info" name="add_education_form" method="post" onSubmit="return false;">
<div class="list_bar3"><label>璧锋鏃堕棿:</label><input type="text" name="s_date" id="s_date" /> 鑷� <input type="text" name="e_date" /></div>
<div class="list_bar3"><label>瀛︽牎鍚嶇О:</label><input type="text" name="school_name" id="school_name" /></div>
<div class="list_bar3"><label>鎵�瀛︿笓涓�:</label><input type="text" name="specialty_name" id="specialty_name" /></div>
<div class="list_bar3"><label>闄勫姞璇存槑:</label><textarea name="append_note"></textarea></div>
<div class="list_bar3" style="text-align:center;"><button onClick="check_form(3,'education');">鎻愪氦</button></div>
<input type="hidden" name="type_info" value="edu" />
</form>
</div>
</div>
<!--job info-->
<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
<div class="slide_frame">
<div class="slide_title"><div class="slide_title_bk"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/yellow.png" /></div><div class="slide_title_text">宸ヤ綔缁忓巻<p>Work Experience</p></div></div>
<div id="container4" class="container_d">
<table>
<tr><th width=190>璧锋鏃堕棿</th><th width=200>鍏徃鍚嶇О</th><th width=120>鎵�灞為儴闂�</th><th width=180>鑱屼綅</th><th></th></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php if ($this->_vars['job'] == "nothing"): ?>
<tr><td colspan="4"><span style="color:#F00;">鏆傛棤淇℃伅</span></td></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php else: ?>
<?php if (count((array)$this->_vars['job'])): foreach ((array)$this->_vars['job'] as $this->_vars['item']): ?>
<tr><td><?php echo $this->_vars['item']['s_date']; ?>
 鑷� <?php if ($this->_vars['item']['e_date'] == ""): ?>鐜板湪<?php else:  echo $this->_vars['item']['e_date'];  endif; ?></td><td><?php echo $this->_vars['item']['company_name']; ?>
</td><td><?php echo $this->_vars['item']['department']; ?>
</td><td><?php echo $this->_vars['item']['occupation']; ?>
</td>
<td><form method="post" id="delete_job_info<?php echo $this->_vars['item']['id']; ?>
" onSubmit="return false;">
<button onClick="ajax_delete(<?php echo $this->_vars['item']['id']; ?>
,'job',4);">鍒犻櫎</button>
<input type="hidden" name="type_info" value="job_info" /></form></td></tr>
<tr><td colspan="4" style="text-align:left;text-indent:1em;">
<span style="color:#000;font-weight:bold;">澶囨敞锛�</span><?php if ($this->_vars['item']['append_note'] == ""): ?><span style="color:#F00;">鏆傛棤澶囨敞</span><?php else:  echo $this->_vars['item']['append_note'];  endif; ?>
</td></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php endforeach; endif; ?>
<?php endif; ?>
</table>
</div>
<div class="add_time_bar"><a id="add_job" style="cursor:pointer;">鏂板椤圭洰</a></div>
<div id="job_form_popup">
<h4>鏂板椤圭洰</h4>
<form id="add_job_info" name="add_job_info" method="post" action="ajax/insert_info.php" onSubmit="return false;">
<div class="list_bar3"><label>璧锋鏃堕棿:</label><input type="text" name="s_date" id="s_date_ii" /> 鑷� <input type="text" name="e_date" /></div>
<div class="list_bar3"><label>鍏徃鍚嶇О:</label><input type="text" name="company_name" id="company_name" /></div>
<div class="list_bar3"><label>鎵�灞為儴闂�:</label><input type="text" name="department" id="department" /></div>
<div class="list_bar3"><label>鎷呬换鑱屼綅:</label><input type="text" name="occupation" id="occupation" /></div>
<div class="list_bar3"><label>闄勫姞璇存槑:</label><textarea name="append_note"></textarea></div>
<div class="list_bar3" style="text-align:center;"><button onClick="check_form(4,'job');">鎻愪氦</button></div>
<input type="hidden" name="type_info" value="job" />
</form>
</div>
</div>
</div>
<!--work exmaple-->
<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
<div class="slide_frame">
<div class="slide_title"><div class="slide_title_bk"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/red.png" /></div><div class="slide_title_text" style="color:#910909;">浣滃搧妗堜緥<p>Work Example</p></div></div>
<div id="container5">
<h4><a href="page.php?cid=9">婕敾鍗￠��</a></h4>
<ul>
<?php if ($this->_vars['l_cartoon'] == "nothing"): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/page_thumb.png" /></li>
<?php else: ?>
<?php if (count((array)$this->_vars['l_cartoon'])): foreach ((array)$this->_vars['l_cartoon'] as $this->_vars['list']): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></li>
<?php endforeach; endif; ?>
<?php endif; ?>
</ul>
<div style="clear:both"></div>
<h4><a href="page.php?cid=10">鑹烘湳璁捐</a></h4>
<ul>
<?php if ($this->_vars['l_art'] == "nothing"): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/page_thumb.png" /></li>
<?php else: ?>
<?php if (count((array)$this->_vars['l_art'])): foreach ((array)$this->_vars['l_art'] as $this->_vars['list']): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></li>
<?php endforeach; endif; ?>
<?php endif; ?>
</ul>
<div style="clear:both"></div>
<h4><a href="page.php?cid=11">鎽勫奖浣滃搧</a></h4>
<ul>
<?php if ($this->_vars['l_pho'] == "nothing"): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/page_thumb.png" /></li>
<?php else: ?>
<?php if (count((array)$this->_vars['l_pho'])): foreach ((array)$this->_vars['l_pho'] as $this->_vars['list']): ?>
<li><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="uploads/photos/thumbs/<?php echo $this->_vars['list']['filename']; ?>
" /></li>
<?php endforeach; endif; ?>
<?php endif; ?>
</ul>
<div style="clear:both"></div>
</div>
</div>
</div>
<div class="_footer">Design by liuxin, SmallCell Studio 2013</div>
</body>
</html>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/jquery.ajax.upload.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/jquery.editinplace.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/jquery.bpopup.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/stellar_init.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['TPATH']; ?>
scripts/cv_scripts/init.js"></script>