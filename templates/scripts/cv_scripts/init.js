$(document).ready(function(){
	$("#name").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		show_buttons:true
	});
	$("#age").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		show_buttons:true
	});
	$("#gender").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		field_type: "select",
		show_buttons:true,
		select_options: "女(FEMALE), 男(MALE)"
	});
	$("#profession").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		show_buttons:true
	});
	$("#native").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		show_buttons:true
	});
	$("#residence").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		show_buttons:true
	});
	$("#interest").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		field_type:"textarea",
		show_buttons:true
	});
	$("#sports").editInPlace({
		//callback:function(unused, enteredText) { return enteredText; },
		url:'./ajax/save_inline.php',
		field_type:"textarea",
		show_buttons:true
	});
});

$(document).ready(function(){
	$(function() {
		$("#personal_info").click(function(){
			$('body,html').animate({scrollTop:1000}, 500);
		});
		$("#education_info").click(function(){
			$('body,html').animate({scrollTop:2000}, 500);
		});
		$("#experience_info").click(function(){
			$('body,html').animate({scrollTop:3000}, 500);
		});
		$("#example_info").click(function(){
			$('body,html').animate({scrollTop:4000}, 500);
		});

		// Binding a click event
        // From jQuery v.1.7.0 use .on() instead of .bind()
        $('#add_education').bind('click', function(e) {
			// Prevents the default action to be triggered. 
			e.preventDefault();

			// Triggering bPopup when click event is fired
         	$('#education_form_popup').bPopup({
				speed: 650,
				transition: 'slideIn',
				modalClose: true
			});
		});
        $('#add_person_image').bind('click', function(e) {
			// Prevents the default action to be triggered. 
			e.preventDefault();

			// Triggering bPopup when click event is fired
         	$('#add_person_image_pop').bPopup({
				speed: 650,
				transition: 'slideIn',
				modalClose: true
			});
		});
        $('#add_job').bind('click', function(e) {
			// Prevents the default action to be triggered. 
			e.preventDefault();

			// Triggering bPopup when click event is fired
         	$('#job_form_popup').bPopup({
				speed: 650,
				transition: 'slideIn',
				modalClose: true
			});
		});
		
		 //	FORM validate
		$("#add_education_form").validate();
	});
	var options = {
		/*
		success: function() 
		{
			$("#bar").width('100%');
			$("#percent").html('100%');
		},
		beforeSend: function() 
		{
			$("#education_form_popup").html("<div style='height:90px;width:90px;background:url(templates/images/loading.gif) center center no-repeat;'></div>");
		},
		uploadProgress: function()
		{
			$("#education_form_popup").html("<div style='height:90px;width:90px;background:url(templates/images/loading.gif) center center no-repeat;'></div>");
		},
		*/
		complete: function(response)
		{
			if(response.responseText != "fail"){
				$("#list_bar_img").html(response.responseText)
				alert("更新成功！");
			} else {
				alert("更新失败！");
				//$("#education_form_popup").fadeOut("slow");
			}
		},
		error: function()
		{
			alert("图片更新失败！")
		}
	};
	$("#person_image_form").ajaxForm(options);
});
$("#add_education_info").validate({
	rules:{
		s_date:"required",
		school_name:"required",
		specialty_name:"required"
	},
	messages:{
		s_date:"",
		school_name:"",
		specialty_name:""
	}
});
$("#add_job_info").validate({
	rules:{
		s_date:"required",
		company_name:"required",
		department:"required",
		occupation:"required"
	},
	messages:{
		s_date:"",
		company_name:"",
		department:"",
		occupation:""
	}
});
function check_form(id,type){
	if(type == "education"){
		if(document.getElementById("s_date").value==""){
			alert("输入起始日期");
			return false;
		}
		if(document.getElementById("school_name").value==""){
			alert("输入学校名称");
			return false;
		}
		if(document.getElementById("specialty_name").value==""){
			alert("输入专业");
			return false;
		}
	} else if(type == "job"){
		if(document.getElementById("s_date_ii").value==""){
			alert("输入起始日期");
			return false;
		}
		if(document.getElementById("company_name").value==""){
			alert("输入公司名称");
			return false;
		}
		if(document.getElementById("department").value==""){
			alert("输入部门");
			return false;
		}
		if(document.getElementById("occupation").value==""){
			alert("输入职位");
			return false;
		}
	}
	ajax_post(id,type);	
}
function ajax_delete(id,type,list_id){
	$.ajax({
	  	type: "POST",
	  	url: "ajax/delete_info.php?id="+id,
		data: $("#delete_"+type+"_info"+id).serialize(),
		success: function(msg){
			if(msg == "fail"){
				alert("删除失败！")
			} else {
				alert("删除成功！")
	   			$("#container"+list_id).html(msg)				
			}
		}
	});
}
function ajax_post(id,type){
	$.ajax({
	  	type: "POST",
	  	url: "ajax/insert_info.php",
		data: $("#add_"+type+"_info").serialize(),
		success: function(msg){
			if(msg == "fail"){
				alert("添加失败！")
			} else {
				alert("添加成功！")
				$("#container"+id).html(msg)				
			}
		}
	});
}