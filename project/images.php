<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "uploads";

$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
	die('Connection failed: '.mysqli_connect_error());
}
$status = '';
if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into images(name) values('".$name."')";
     mysqli_query($con,$query);
    
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
     if ($query) {
      $status = "File Uploaded Successfully";
     }
    
  }
   else {
      $status = "File Upload Failed. Try Again";
     }
 
}
echo $status;
?>

<form method="post" action="" enctype='multipart/form-data'>
  <input type='file' name='file' />
  <input type='submit' value='Upload' name='but_upload'>
</form>