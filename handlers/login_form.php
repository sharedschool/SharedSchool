<?php
	session_start();
	$conn = mysqli_connect('127.0.0.1', 'backend', 'teeky2', 'SharedSchool');
	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}
	function stringify($v){
		if (is_string($v)) return '"' . $v . '"';
		else return $v;
	}
	if (isset($_POST['email']) && isset($_POST['password'])){
		$email = stringify(mysqli_real_escape_string($conn, $_POST['email']));
		$password = $_POST['password'];
		$result = mysqli_query($conn, 'SELECT Email, FullName, Institution, Password, AccountType FROM Accounts WHERE Email=' . $email);
		if (mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row['Password'])){
				$_SESSION['name'] = ($row['AccountType'] == 3) ? $row['Institution'] : $row['FullName'];
				$_SESSION['email'] = $row['Email'];
				$_SESSION['type'] = $row['AccountType'];
				header('Location: /portal.php');
			} else {
				echo 'Incorrect password';
			}
		} else {
			echo 'Email does not exist';
		}
	} else {
		echo 'You must enter the email or password';
	}
?>