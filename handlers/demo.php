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
	$msg = str_replace('\n', '<br/>', $msg);
	$msg = '<html><body>' . $msg . '</body></html>';
	$headers = 'From: ' . $from;
	$headers .= 'MIME-Version: 1.0' . '\r\n';
	$headers .= 'Content-type:text/html;charset=UTF-8' . '\r\n';
	mail($to,$subject,$msg,$headers);
	
	header('Location: /?demo=1');
?>
