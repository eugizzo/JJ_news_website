<?php 
include '../db/connection.php';
$statusMsg = '';
$title=$_POST['title'];
$description=$_POST['description'];
$phone=$_POST['phone'];
$name=$_POST['name'];
$files=$_FILES['file']['tmp_name'];
$filename=$_FILES['file']['name'];
$path='../img/advitise/'.$filename;
$fileType = pathinfo($path,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

// Allow certain file formats
$allowTypes = array('jpg','png','jpeg','gif','jfif');

if(in_array($fileType, $allowTypes)){

      // Upload file to server
if (move_uploaded_file($files,$path )) {

    // Insert image file name into database
$savefile=$conn->prepare("INSERT INTO `advatising`( `title`, `image`, `description`, `date`,`name`, `phone`) VALUES(?,?,?,?,?,?)");
$RESULT=$savefile->execute(array($title,$filename,$description,date('Y-m-d H:i:s'),$name,$phone));
if($RESULT){
    // $statusMsg = "The file ".$filename. " has been uploaded successfully.";

    ?> 
	<script type="text/javascript">
		alert("The advatising:  <?=$filename; ?> has been uploaded successfully.");
		location.href='list.php';
	</script>
	
	<?php 
}else{
    $statusMsg = "image upload failed, please try again.";
} 
}else{
$statusMsg = "Sorry, there was an error uploading your image.";
}
}else{
$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, images are allowed to upload.';
}
}else{
$statusMsg = 'Please select a image to upload.';
}

// Display status message
echo $statusMsg;

