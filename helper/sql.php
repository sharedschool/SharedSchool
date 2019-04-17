<?php
	function stringify($v){
		if (is_string($v)) return '"' . $v . '"';
		else return $v;
	}
	function removeNull($array){
		$newArray = array();
		foreach ($array as $key => $value){
			if ($value && $value != '') $newArray[$key] = $value;
		}
		return $newArray;
	}
	function insertData($conn, $tbName, $data){
		$columns = '`' . implode('`, `',array_keys($data)) . '`';
		//$escaped_values = array_map('mysqli::real_escape_string', array_values($data));
		$escaped_values = array();
		foreach ($data as $value){
			array_push($escaped_values, stringify(mysqli_real_escape_string($conn, $value)));
		}
		$values = implode(', ', $escaped_values);
		//$values = implode(', ', array_values($data));
		$sql = "INSERT INTO $tbName ($columns) VALUES ($values)";
		if (mysqli_query($conn, $sql)) {
			return true;
		} else {
			echo '<b>Error:</b> ' . $sql . '<br/>' . mysqli_error($conn) . '<br/><br/>';
			return false;
		}
	}
	function postData($keys){
		$data = array();
		foreach($keys as $key){
			if (isset($_POST[$key]) && strlen($_POST[$key]) > 0){
				$data[$key] = $_POST[$key];
			}
		}
		return $data;
	}
	function newConn(){
		$conn = false;
		if(strpos( $_SERVER['HTTP_HOST'], 'sharedschool.tk') !== false){
			$conn = mysqli_connect('localhost', 'id8511368_backend', 'teeky2', 'id8511368_sharedschool');
		} else {
			$conn = mysqli_connect('127.0.0.1', 'backend', 'teeky2', 'SharedSchool');
		}
		if (!$conn){
			die('Connection failed: ' . mysqli_connect_error());
		}
		return $conn;
	}
	function getQuery($query){
		$conn = newConn();
		$sql = $query;
		$result = $conn->query($sql);
		$results = [];
		if ($result){
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					array_push($results, $row);
				}
			}
		}/* else {
			echo "0 results";
		}*/
		$conn->close();
		return $results;
	}
	
?>