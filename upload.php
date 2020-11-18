<?php
$target_dir = 'gambar/';
$target_file = $target_dir . basename($_FILES["FileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = (pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
	if ($imageFileType != "php" ) {
	   move_uploaded_file($_FILES["FileToUpload"]["tmp_name"], $target_file);
	   echo "success";
	}else{
		echo "failed";		
		
	}	
}
?>