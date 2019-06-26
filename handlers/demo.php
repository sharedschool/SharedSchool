<?php
	$to = 'contact@sharedschool.co';
	$from = 'SharedSchool No Reply <no-reply@sharedschool.co>';
	$subject = 'Demo Request';
	
	$msg = 'Full Name: ' . $_POST['name'] . '\nInstitution: ' . 
$_POST['institution'] . '\nEmail: ' . $_POST['email'];

	if (isset($_POST['message']) && strlen($_POST['message']) > 0){
		$msg .= '\n\nMessage: ' . $_POST['message'];
	}
	
	$msg = wordwrap($msg,70);
	$headers = 'From: ' . $from;
	mail($to,$subject,$msg,$headers);
	
	header('Location: /?demo=1');
?>
