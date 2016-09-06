<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
require_once('../include/class/class.upload.php');
if(isset($_GET["id"])&&($_GET["id"]!="")){
	$id = $_GET["id"];
} else {
	echo "fail";
	exit;
}
$sql = "SELECT filename FROM d_banner WHERE id = $id";
$row = get_rows($sql);
$filename_old = $row["filename"]; 
if (!empty($_FILES['banner_file']['tmp_name'])){
	$filename = mktime();
	$tempFile = $_FILES['banner_file']['tmp_name'];
	$targetPath = '../../uploads/banner/';
	$handle = new Upload($_FILES['banner_file']);
	if ($handle->uploaded){
		$handle->image_convert = 'jpg';
		$handle->jpeg_quality = 100;
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
	
} else {
	echo "fail";
	exit;
}
$filename = $filename.".jpg";
if($filename != $filename_old ){
	$sql = "UPDATE d_banner SET filename = '" . $filename . "' WHERE id = $id";
	if($idb->query_ex($sql)){
		if(file_exists($targetPath.$filename_old)){
			unlink($targetPath.$filename_old);	
		}
		if(file_exists($targetPath."/thumbs/".$filename_old)){
			unlink($targetPath."/thumbs/".$filename_old);	
		}
	?>
	<img src="<?php echo "../uploads/banner/thumbs/".$filename;?>" />
	<?php
		exit;
	} else {
		if(file_exists($targetPath.$filename)){
			unlink($targetPath.$filename);	
		}
		if(file_exists($targetPath."/thumbs/".$filename)){
			unlink($targetPath."/thumbs/".$filename);	
		}
		echo "fail";
		exit;
	}
} else {
?>
<img src="<?php echo "../uploads/banner/thumbs/".$filename;?>" />
<?php	
}
?>