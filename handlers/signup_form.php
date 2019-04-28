<?php
	session_start();
	function filled_out($array){
		foreach ($array as $key){
			if (isset($_POST[$key])){
				if (is_array($_POST[$key])){
					if (count($_POST[$key]) == 0) return false;
				} else {
					if (strlen($_POST[$key]) == 0) return false;
				}
			} else {
				return false;
			}
		}
		return true;
	}
	function stringify($v){
		if (is_string($v)) return '"' . $v . '"';
		else return $v;
	}
	function insertData($conn, $tbName, $data){
		$columns = implode(", ",array_keys($data));
		//$escaped_values = array_map('mysqli::real_escape_string', array_values($data));
		$escaped_values = array();
		foreach ($data as $value){
			array_push($escaped_values, stringify(mysqli_real_escape_string($conn, $value)));
		}
		$values = implode(", ", $escaped_values);
		//$values = implode(", ", array_values($data));
		$sql = "INSERT INTO $tbName ($columns) VALUES ($values)";
		if (mysqli_query($conn, $sql)) {
			return true;
		} else {
			echo '<b>Error:</b> ' . $sql . '<br/>' . mysqli_error($conn) . '<br/><br/>';
			return false;
		}
	}
	// Validate some constant form data
	if (filled_out(['acnt_type','institution','email','password1','password2'])){
		// TODO: Make sure email is not taken
		// Make sure passwords match
		if ($_POST['password1'] == $_POST['password2']){
			// Validate the data for different institution types
			$acnt = $_POST['acnt_type'];
			if (
				($acnt == 'teacher' && filled_out(['fullname','subject'])) ||
				($acnt == 'administrator' && filled_out(['fullname','dept','subject'])) ||
				($acnt == 'institution' && filled_out(['students','level','type']))
			){
				// Now we can sign up
				$conn = false;
				if(strpos( $_SERVER['HTTP_HOST'], 'sharedschool.tk') !== false){
					$conn = mysqli_connect('localhost', 'id8511368_backend', 'teeky2', 'id8511368_sharedschool');
				} else {
					$conn = mysqli_connect('127.0.0.1', 'backend', 'teeky2', 'sharedschool');
				}
				if (!$conn){
					die("Connection failed: " . mysqli_connect_error());
				}
				$data = false;
				if ($acnt == 'teacher'){
					$data = array(
						'FullName' => $_POST['fullname'],
						'Email' => $_POST['email'],
						'Password' => password_hash($_POST['password1'], PASSWORD_DEFAULT),
						'Subject' => $_POST['subject'],
						'Institution' => $_POST['institution'],
						'AccountType' => 1
					);
				} elseif ($acnt == 'administrator'){
					$data = array(
						'FullName' => $_POST['fullname'],
						'Email' => $_POST['email'],
						'Password' => password_hash($_POST['password1'], PASSWORD_DEFAULT),
						'Department' => $_POST['dept'],
						'Subject' => $_POST['subject'],
						'Institution' => $_POST['institution'],
						'AccountType' => 2
					);
				} elseif ($acnt == 'institution'){
					$data = array(
						'Institution' => $_POST['institution'],
						'Email' => $_POST['email'],
						'Password' => password_hash($_POST['password1'], PASSWORD_DEFAULT),
						'Students' => $_POST['students'],
						'SchoolLevel' => $_POST['level'],
						'SchoolType' => $_POST['type'],
						'AccountType' => 3
					);
				}
				if(insertData($conn, 'Accounts', $data)){
					$_SESSION['email'] = $data['Email'];
					$_SESSION['type'] = $data['AccountType'];
					$_SESSION['name'] = ($data['AccountType'] == 3) ? $data['Institution'] : $data['FullName'];
					header('Location: /portal/?signup=1');
				} else {
					echo 'Account creation failed.<br/>';
				}
			}
		} else {
			echo 'Passwords do not match.<br/>';
		}
	} else {
		echo 'Missing account type, email, or password.<br/>';
	}
?>
