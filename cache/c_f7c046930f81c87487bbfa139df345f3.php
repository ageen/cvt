<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-18 09:44:48 �й���׼ʱ�� */ ?>

<!doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv="Page-Exit" content="revealTrans(Duration=10,Transition=0)">
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<title>个人简历（Curriculum Vitae） - 编辑模式</title>
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
    	<div style="line-height:30px;font-weight:bold; text-align:center;font-size:14px;"><a href="index.php" style="text-decoration:none;color:#333;">返回首页</a></div>
		<ul class="navigation">
        	<li data-slide="1" style="background:#626262;">顶部</li>
			<li data-slide="2" style="background:#1e4e98;">个人信息</li>
			<li data-slide="3" style="background:#2c7d04;">教育背景</li>
			<li data-slide="4" style="background:#cb5903;">工作经历</li>
			<li data-slide="5" style="background:#910909;">作品案例</li>
		</ul>
	</div>
</div>

<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
<div class="slide_header">
<h1>个人简历</h1>
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
images/blue.png" /></div><div class="slide_title_text">个人信息<p>Personal Information</p></div></div>
<div style="clear:both;"></div>
<div id="container">
<div class="list_bar"><label>姓名<span>(NAME)</span></label><p id="name"><?php if ($this->_vars['info']['name'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['name'];  endif; ?></p></div>
<div class="list_bar"><label>年龄<span>(AGE)</span></label><p id="age"><?php if ($this->_vars['info']['age'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['age'];  endif; ?></p></div>
<div class="list_bar"><label>性别<span>(GENDER)</span></label><p id="gender"><?php if ($this->_vars['info']['gender'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['gender'];  endif; ?></p></div>
<div class="list_bar"><label>职业<span>(PROFESSION)</span></label><p id="profession"><?php if ($this->_vars['info']['profession'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['profession'];  endif; ?></p></div>
<div class="list_bar"><label>籍贯<span>(NATIVE PLACE)</span></label><p id="native"><?php if ($this->_vars['info']['native'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['native'];  endif; ?></p></div>
<div class="list_bar"><label>现居住地<span>(RESIDENCE)</span></label><p id="residence"><?php if ($this->_vars['info']['residence'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['residence'];  endif; ?></p></div>
<div class="list_bar"><label>兴趣爱好<span>(INTEREST)</span></label><p id="interest"><?php if ($this->_vars['info']['interest'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['interest'];  endif; ?></p></div>
<div class="list_bar"><label>喜爱运动<span>(INTEREST)</span></label><p id="sports"><?php if ($this->_vars['info']['sports'] == ""): ?><span style="color:#F00">暂无信息</span><?php else:  echo $this->_vars['info']['sports'];  endif; ?></p></div>
<div class="list_bar_img" id="list_bar_img"><img id="add_person_image" class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php if ($this->_vars['info']['portrait'] == ""):  echo $this->_vars['TPATH']; ?>
images/no_portrait.png"<?php else:  echo $this->_vars['info']['portrait']; ?>
"<?php endif; ?> /></div>
</div>
</div>
<div id="add_person_image_pop">
<h4>更新个人图片</h4>
<hr />
<form id="person_image_form" name="person_image_form" method="post" action="ajax/update_person_image.php" enctype="multipart/form-data">
<div class="list_bar3"><label>选择图片文件:</label><input type="file" name="portrait" /></div>
<div class="list_bar3" style="text-align:center;"><button type="submit">更新</button></div>
</form>
</div>
</div>
<!--education info-->
<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
<div class="slide_frame">
<div class="slide_title"><div class="slide_title_bk"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/green.png" /></div><div class="slide_title_text">教育背景<p>Education Background</p></div></div>
<div id="container3" class="container_d">
<table>
<tr><th width=200>起止时间</th><th width=220>学校名称</th><th width=200>所学专业</th><th></th></tr>
<tr><td colspan="3"><hr /></td></tr>
<?php if ($this->_vars['edu'] == "nothing"): ?>
<tr><td colspan="4"><span style="color:#F00;">暂无信息</span></td></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php else: ?>
<?php if (count((array)$this->_vars['edu'])): foreach ((array)$this->_vars['edu'] as $this->_vars['item']): ?>
<tr>
<td><?php echo $this->_vars['item']['s_date']; ?>
 至 <?php if ($this->_vars['item']['e_date'] == ""): ?>现在<?php else:  echo $this->_vars['item']['e_date'];  endif; ?></td><td><?php echo $this->_vars['item']['school_name']; ?>
</td><td><?php echo $this->_vars['item']['specialty_name']; ?>
</td>
<td><form method="post" action="ajax/delete_info.php" onSubmit="return false;" id="delete_edu_info<?php echo $this->_vars['item']['id']; ?>
"><button onClick="ajax_delete(<?php echo $this->_vars['item']['id']; ?>
,'edu',3);">删除</button><input type="hidden" name="type_info" value="edu_info" /></form></td>
</tr>
<tr>
<td colspan="4" style="text-align:left;text-indent:1em;">
<span style="color:#000;font-weight:bold;">备注：</span><?php if ($this->_vars['item']['append_note'] == ""): ?><span style="color:#F00;">暂无备注</span><?php else:  echo $this->_vars['item']['append_note'];  endif; ?>
</td>
</tr>
<tr><td colspan="3"><hr /></td></tr>
<?php endforeach; endif; ?>
<?php endif; ?>
</table>
</div>
<div class="add_time_bar"><a id="add_education" style="cursor:pointer;">新增项目</a></div>
</div>
<div id="education_form_popup">
<h4>新增项目</h4>
<form id="add_education_info" name="add_education_form" method="post" onSubmit="return false;">
<div class="list_bar3"><label>起止时间:</label><input type="text" name="s_date" id="s_date" /> 至 <input type="text" name="e_date" /></div>
<div class="list_bar3"><label>学校名称:</label><input type="text" name="school_name" id="school_name" /></div>
<div class="list_bar3"><label>所学专业:</label><input type="text" name="specialty_name" id="specialty_name" /></div>
<div class="list_bar3"><label>附加说明:</label><textarea name="append_note"></textarea></div>
<div class="list_bar3" style="text-align:center;"><button onClick="check_form(3,'education');">提交</button></div>
<input type="hidden" name="type_info" value="edu" />
</form>
</div>
</div>
<!--job info-->
<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
<div class="slide_frame">
<div class="slide_title"><div class="slide_title_bk"><img class="lazy" src="<?php echo $this->_vars['TPATH']; ?>
images/lightblue.gif" data-original="<?php echo $this->_vars['TPATH']; ?>
images/yellow.png" /></div><div class="slide_title_text">工作经历<p>Work Experience</p></div></div>
<div id="container4" class="container_d">
<table>
<tr><th width=190>起止时间</th><th width=200>公司名称</th><th width=120>所属部门</th><th width=180>职位</th><th></th></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php if ($this->_vars['job'] == "nothing"): ?>
<tr><td colspan="4"><span style="color:#F00;">暂无信息</span></td></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php else: ?>
<?php if (count((array)$this->_vars['job'])): foreach ((array)$this->_vars['job'] as $this->_vars['item']): ?>
<tr><td><?php echo $this->_vars['item']['s_date']; ?>
 至 <?php if ($this->_vars['item']['e_date'] == ""): ?>现在<?php else:  echo $this->_vars['item']['e_date'];  endif; ?></td><td><?php echo $this->_vars['item']['company_name']; ?>
</td><td><?php echo $this->_vars['item']['department']; ?>
</td><td><?php echo $this->_vars['item']['occupation']; ?>
</td>
<td><form method="post" id="delete_job_info<?php echo $this->_vars['item']['id']; ?>
" onSubmit="return false;">
<button onClick="ajax_delete(<?php echo $this->_vars['item']['id']; ?>
,'job',4);">删除</button>
<input type="hidden" name="type_info" value="job_info" /></form></td></tr>
<tr><td colspan="4" style="text-align:left;text-indent:1em;">
<span style="color:#000;font-weight:bold;">备注：</span><?php if ($this->_vars['item']['append_note'] == ""): ?><span style="color:#F00;">暂无备注</span><?php else:  echo $this->_vars['item']['append_note'];  endif; ?>
</td></tr>
<tr><td colspan="4"><hr /></td></tr>
<?php endforeach; endif; ?>
<?php endif; ?>
</table>
</div>
<div class="add_time_bar"><a id="add_job" style="cursor:pointer;">新增项目</a></div>
<div id="job_form_popup">
<h4>新增项目</h4>
<form id="add_job_info" name="add_job_info" method="post" action="ajax/insert_info.php" onSubmit="return false;">
<div class="list_bar3"><label>起止时间:</label><input type="text" name="s_date" id="s_date_ii" /> 至 <input type="text" name="e_date" /></div>
<div class="list_bar3"><label>公司名称:</label><input type="text" name="company_name" id="company_name" /></div>
<div class="list_bar3"><label>所属部门:</label><input type="text" name="department" id="department" /></div>
<div class="list_bar3"><label>担任职位:</label><input type="text" name="occupation" id="occupation" /></div>
<div class="list_bar3"><label>附加说明:</label><textarea name="append_note"></textarea></div>
<div class="list_bar3" style="text-align:center;"><button onClick="check_form(4,'job');">提交</button></div>
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
images/red.png" /></div><div class="slide_title_text" style="color:#910909;">作品案例<p>Work Example</p></div></div>
<div id="container5">
<h4><a href="page.php?cid=9">漫画卡通</a></h4>
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
<h4><a href="page.php?cid=10">艺术设计</a></h4>
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
<h4><a href="page.php?cid=11">摄影作品</a></h4>
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