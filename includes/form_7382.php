<?php	
	if (empty($_POST['name_47531_7382']) && strlen($_POST['name_47531_7382']) == 0 || empty($_POST['email_47531_7382']) && strlen($_POST['email_47531_7382']) == 0 || empty($_POST['message_47531_7382']) && strlen($_POST['message_47531_7382']) == 0)
	{
		return false;
	}
	
	$name_47531_7382 = $_POST['name_47531_7382'];
	$email_47531_7382 = $_POST['email_47531_7382'];
	$message_47531_7382 = $_POST['message_47531_7382'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_47531_7382: $name_47531_7382 \nEmail_47531_7382: $email_47531_7382 \nMessage_47531_7382: $message_47531_7382 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_47531_7382";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>