<?php	
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['']) || empty($_POST['description']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$ = $_POST[''];
	$ = $_POST[''];
	$ = $_POST[''];
	$description = $_POST['description'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from englewood-website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \n: $ \n: $ \n: $ \nDescription: $description \n";
	$headers = "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>