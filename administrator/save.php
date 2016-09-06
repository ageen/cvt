<?php
require_once("global.php");
require_once("authentication.php");
if(isset($_POST["mode"])&&($_POST["mode"]!="")){
	$mode = $_POST["mode"];
	unset($_POST["mode"]);
} else {
	bm_die("Parameters error!");
}
switch($mode):
	case "category":
		foreach($_POST as $k=>$v){
			if($v != ""){
				$feed[$k] = $v;
			}
		}
		$sql = $idb->query_insert($feed, "d_category");
		if($idb->query_ex($sql)){
			showinfo("新增成功！", "view.php?mode=category");
		} else {
			$idb->print_error();
		}
		break;
		
	case "photo":
		if(!empty($_FILES['photo_d']['tmp_name'])){
			$filename = mktime();
			$targetPath = '../uploads/photos';
			$handle = new Upload($_FILES['photo_d']);
			if ($handle->uploaded){
				$handle->image_convert = 'jpg';
				$handle->jpeg_quality = 90;
				$handle->file_src_name_body	= $filename; // hard name
				$handle->image_resize = false;
				if(IS_MARK == 1){
					//	IMAGE TEXT MARK
					$handle->image_text = MARK_TEXT;
					$handle->image_text_color = '#000';
					$handle->image_text_percent = 50;
					$handle->image_text_background = '#FFFFFF';
					$handle->image_text_background_percent = 20;
					$handle->image_text_padding_x = 5;
					$handle->image_text_padding_y = 3;
					$handle->image_text_position = 'BR';
					//	END IMAGE TEXT MARK			
				}
				$handle->file_max_size = '1012000'; // max size
				$handle->Process($targetPath);
				if (!$handle->processed) {
					bm_die($handle->error);
				}				
				//	thumbnail photo
				$handle->file_src_name_body	= $filename; // hard name
				$handle->file_auto_rename = false;
				$handle->file_overwrite = true;
				$handle->image_resize = true;
				$handle->image_x = 300; // size of picture
				$handle->image_y = 300;
				$handle->image_ratio_crop = true;
				//$handle->image_text = 'test';
				//$handle->image_ratio_fill = true;
				//$handle->image_ratio_y = true;
				$handle->file_max_size = '1012000'; // max size
				$handle->Process($targetPath."/thumbs");
				if ($handle->processed) {
					$handle->clean();
				} else {
					bm_die($handle->error);
					break;
				}
			}
			$feed["filename"]=$filename.".jpg";
			$feed["publish_time"] = date("Y-m-d H:i:s");
			foreach($_POST as $k=>$v){
				if($v != ""){
					$feed[$k] = $v;
				}
			}
			$sql = $idb->query_insert($feed, "d_photo");
			if($idb->query_ex($sql)){
				showinfo("新增成功！","view.php?mode=photo");
			} else {
				$idb->print_error();	
			}
		} else {
			showinfo("请选择图片！","back");	
		}
		break;
		
	case "banner":
		if(!empty($_FILES['banner_d']['tmp_name'])){
			$filename = mktime();
			$targetPath = '../uploads/banner';
			$handle = new Upload($_FILES['banner_d']);
			if ($handle->uploaded){
				$handle->image_convert = 'jpg';
				$handle->jpeg_quality = 90;
				$handle->file_src_name_body	= $filename; // hard name
				$handle->file_overwrite = true;
				$handle->image_resize = true;
				$handle->image_x = 980; // size of picture
				$handle->image_y = 340;
				$handle->image_ratio_crop = true;
				if(IS_MARK == 1){
					//	IMAGE TEXT MARK
					$handle->image_text = MARK_TEXT;
					$handle->image_text_color = '#000';
					$handle->image_text_percent = 50;
					$handle->image_text_background = '#FFFFFF';
					$handle->image_text_background_percent = 20;
					$handle->image_text_padding_x = 5;
					$handle->image_text_padding_y = 3;
					$handle->image_text_position = 'BR';
					//	END IMAGE TEXT MARK			
				}
				$handle->file_max_size = '1012000'; // max size
				$handle->Process($targetPath);
				if (!$handle->processed) {
					bm_die($handle->error);
				}				
				//	thumbnail photo
				$handle->file_src_name_body	= $filename; // hard name
				$handle->image_convert = 'jpg';
				$handle->file_auto_rename = false;
				$handle->file_overwrite = true;
				$handle->image_resize = true;
				$handle->image_x = 294; // size of picture
				$handle->image_y = 102;
				$handle->image_ratio_crop = true;
				//$handle->image_text = 'test';
				//$handle->image_ratio_fill = true;
				//$handle->image_ratio_y = true;
				$handle->file_max_size = '1012000'; // max size
				$handle->Process($targetPath."/thumbs");
				if ($handle->processed) {
					$handle->clean();
				} else {
					bm_die($handle->error);
					break;
				}
			}	
			$feed["filename"]=$filename.".jpg";
			foreach($_POST as $k=>$v){
				if($v != ""){
					$feed[$k] = $v;
				}
			}
			$sql = $idb->query_insert($feed, "d_banner");
			if($idb->query_ex($sql)){
				showinfo("新增成功！","view.php?mode=banner");
			} else {
				$idb->print_error();	
			}	
		} else {
			showinfo("请选择图片！","back");	
		}
		break;
		
	case "account":
		foreach($_POST as $k=>$v){
			if($v != ""){
				if($k == "password"){
					$feed[$k] = md5($v);
				} else {
					$feed[$k] = $v;	
				}
			}
		}
		$sql = $idb->query_insert($feed, "d_account");
		if($idb->query_ex($sql)){
			showinfo("新增成功！", "view.php?mode=account");
		} else {
			$idb->print_error();
		}
		break;
	
	default:
		bm_die("Parameters error!");
		break;
endswitch;
?>