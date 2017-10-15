<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "sharmasaravanan.1993@gmail.com";
	$subject = $_POST['products'];
	$email = $_POST['email'];
	$txt = $_POST['body'];
	$headers = "From: " .$email . "\r\n" .
	"CC: asvinth.1992@gmail.com";
	
	mail($to,$subject,$txt,$headers);
	
	header("Location: contact.html");
	
    
		
	
	}




?>