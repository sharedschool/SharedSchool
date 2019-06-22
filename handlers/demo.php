<?php
	$to = 'contact@sharedschool.co';
	$from = 'no-reply@sharedschool.co';
	$subject = 'Demo Request';
	
	$msg = 'Full Name: ' . $_POST['name'] . '\nInstitution: ' . $_POST['institution'] . '\nEmail: ' . $_POST['email']
	
	$msg = wordwrap($msg,70);
	$headers = 'From: ' . $from;
	mail($to,$subject,$txt,$headers);
	
	header('Location: /?demo=1')
?>