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
	})
});