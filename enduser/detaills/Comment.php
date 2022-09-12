<?php
include '../../dashmin-1.0.0/db/connection.php';

    $message='';
    $id='';
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	if(isset($_POST["submit"]) && !empty($_POST["subject"])&& !empty($_POST["message"]) && !empty($_POST["name"])&& !empty($_POST["email"])){
	$insert="INSERT INTO feedback( name, email, subject, comment,date) VALUES (?,?,?,?,?)";
	$query=$conn->prepare($insert);
	
	
	$query->execute(array($name,$email,$subject,$message,date('Y-m-d H:i:s')));
	if ($query) {
		// $message="Your comment have been sent";
        // $_SESSION['message']=$message;
	?> 
	<script type="text/javascript">
		alert("Your comment have been sent");
		location.href='post_comment.php';
	</script>
	
	<?php  
	
	}
	 else {
			echo "data not inserted";
	}

	}
	

   
   ?>

	
	
	 