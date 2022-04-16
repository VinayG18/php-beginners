<?php

if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']))
{
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text))
	{
		if(strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text)>1000)
		{
			echo 'Sorry, Max. length for some field has been exceeded.';
		}
		else
		{
			$to = 'receiveremail@gmail.com';
			$subject = 'Contect form Submitted.';
			$body = $contact_name."\n".$contact_text;
			$header = 'From: '.$contact_email;
			
			if(mail($to, $subject, $body, $header))
			{
				echo 'Thanks for contacting us. We\'ll be in touch soon.';
			}
			else
			{
				echo  'Sorry, an error occurred. Please try again later.';
			}
		}
	}
	else
	{
		echo 'All fields are required.';
	}
}

?>

<form method="post" action="index.php">
	Name:<br /><input type="text" name="contact_name" /><br /><br />
	Email Address:<br /><input type="text" name="contact_email" /><br /><br />
	Message:<br /><textarea name="contact_text" cols="30" rows="6"></textarea><br /><br />
	<input type="submit" value="Send" />
</form>