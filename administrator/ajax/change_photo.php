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
$sql = "SELECT filename FROM d_photo WHERE id = $id";
$row = get_rows($sql);
$filename_old = $row["filename"]; 
if (!empty($_FILES['photo_file']['tmp_name'])){
	$filename = mktime();
	$tempFile = $_FILES['photo_file']['tmp_name'];
	$targetPath = '../../uploads/photos/';
	$handle = new Upload($_FILES['photo_file']);
	if ($handle->uploaded){
		$handle->image_convert = 'jpg';
		$handle->jpeg_quality = 90;
		$handle->file_overwrite = true;
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
		
		// thumbnail photo
		$handle->image_resize = true;
		$handle->image_x = 300; // size of picture
		$handle->image_y = 300;
		$handle->image_ratio_crop = true;
		$handle->Process($targetPath."/thumbs/");
		if ($handle->processed) {
			$handle->clean();
		} else {
			bm_die($handle->error);
		}
	}
	
} else {
	echo "fail";
	exit;
}
$filename = $filename.".jpg";
if($filename != $filename_old ){
	$sql = "UPDATE d_photo SET filename = '" . $filename . "' WHERE id = $id";
	if($idb->query_ex($sql)){
		if(file_exists($targetPath.$filename_old)){
			unlink($targetPath.$filename_old);	
		}
		if(file_exists($targetPath."/thumbs/".$filename_old)){
			unlink($targetPath."/thumbs/".$filename_old);	
		}
	?>
	<img src="<?php echo "../uploads/photos/thumbs/".$filename;?>" />
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
<img src="<?php echo "../uploads/photos/thumbs/".$filename;?>" />
<?php	
}
?>