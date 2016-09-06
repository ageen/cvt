<?php
require_once("../global.php");
if(isset($_SESSION["authentication"])&&($_SESSION["authentication"]==true)){
	1;
} else {
	echo "fail";
	exit;
}
require_once('../include/class/class.upload.php');
$sql = "SELECT portrait FROM info_person WHERE id = 10";
$row = get_rows($sql);
$filename_old = $row["portrait"]; 
if (!empty($_FILES['portrait']['tmp_name'])){
	$filename = mktime();
	$tempFile = $_FILES['portrait']['tmp_name'];
	$targetPath = '../uploads/cv/';
	$handle = new Upload($_FILES['portrait']);
	if ($handle->uploaded){
		$handle->image_convert = 'jpg';
		$handle->file_src_name_body	= $filename; // hard name
		$handle->file_auto_rename = false;
		$handle->file_overwrite = true;
		$handle->image_resize = true;
		$handle->image_x = 212; // size of picture
		$handle->image_y = 312;
		$handle->image_ratio_crop = true;
		$handle->file_max_size = '1012000'; // max size
		$handle->Process($targetPath);
		if ($handle->processed) {
			$handle->clean();
		} else {
			echo $handle->error;
			exit;
		}
	}
	
}
$filename = $filename.".jpg";
if($filename != $filename_old ){
	$sql = "UPDATE info_person SET portrait = '" . $filename . "' WHERE id = 10";
	if($idb->query_ex($sql)){
		if(file_exists($targetPath.$filename_old)){
			unlink($targetPath.$filename_old);	
		}
	?>
	<img id="add_person_image" src="<?php echo "uploads/cv/".$filename;?>" />
	<?php
		exit;
	} else {
		if(file_exists($targetPath.$filename)){
			unlink($targetPath.$filename);	
		}
		echo "fail";
		exit;
	}
} else {
?>
<img id="add_person_image" src="<?php echo "uploads/cv/".$filename;?>" />
<?php	
}
?>