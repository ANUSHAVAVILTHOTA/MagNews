<?php
include("connection.php");

if(isset($_POST['but_upload'])){
  $sname=$_POST['sname'];
  $class=$_POST['class'];
  $name = $_FILES['file']['name'];
  $target_dir = getcwd().DIRECTORY_SEPARATOR.'upload/';
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("pdf","doc");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ) {
     // Insert record
     $query = "insert into paperdetails(place,date,pdf) values('".$sname."','".$class."','".$name."')";
     mysqli_query($db,$query);
	
  
     // Upload file
	 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	 header ("location: student.php");  
	}
 
}
?>