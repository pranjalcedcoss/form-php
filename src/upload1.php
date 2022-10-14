<?php
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




if ($_FILES["fileToUpload"]["size"] > 200000) {
  echo  "Sorry, your file is too large.";
  $uploadOk = 0;
}elseif( $imageFileType != "png") {
  echo "Sorry, only  png files are allowed.";
  $uploadOk = 0;
}else{
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    echo "SUCCESS";
}
?>