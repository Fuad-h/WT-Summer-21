<?php
if(isset($_POST['SUBMIT'])) {
$filename=$_FILES['filename']['name'];
$tmp_loc=$_FILES['filename']['tmp_name'];

$uploc='images/';
if(!empty($filename)){
  move_uploaded_file($tmp_loc,$uploc.$filename);
}else{
  echo'select a file';
}



}
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="filename"><br> <br>
  <input type="submit" value="Upload" name="submit">
</form>

