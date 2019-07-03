<?php
	session_start();
	if (strpos( $_SERVER['HTTP_HOST'], 'sharedschool.co') !== false){
		if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
			$_SERVER['HTTPS'] == 1) ||  
			isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
			$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
		{
			$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			header('HTTP/1.1 301 Moved Permanently');
			header('Location: ' . $redirect);
			exit();
		}
	}
?>