<?php
	$to = 'contact@sharedschool.co';
	$from = 'SharedSchool No Reply <no-reply@sharedschool.co>';
	$subject = 'Demo Request';
	
	$msg = 'Full Name: ' . $_POST['name'] . '. Institution: ' . 
$_POST['institution'] . '. Email: ' . $_POST['email'];

	if (isset($_POST['message']) && strlen($_POST['message']) > 0){
		$msg .= '. Message: ' . $_POST['message'];
	}
	$headers = 'From: ' . $from . '\r\n';
	mail($to,$subject,$msg,$headers);
	
	header('Location: /?demo=1');
?>
