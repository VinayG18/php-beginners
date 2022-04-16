<?php
$to = 'receivermail@gmail.com';
$subject = 'This is an email.';
$body = 'This is a Test Email'."\n\n".'Hope you got it.';
$headers = 'From: senderemail@gmail.com';

	if(mail($to, $subject, $body, $headers))
	{
		echo 'Email has been sent to '.$to;
	}
	else
	{
		echo 'There was an error sending the mail';
	}
?>