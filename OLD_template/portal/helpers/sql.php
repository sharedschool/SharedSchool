<?php
$servername = 'localhost:3306';
$serveruser = 'root';
$password = 'Peter8';
$dbname = 'oncocurate';

function newConn(){
	global $servername, $serveruser, $password, $dbname;
	$conn = new mysqli($servername, $serveruser, $password, $dbname);
	if ($conn->connect_error){
		die('Connection failed: ' . $conn->connect_error . '\n');
	}
	return $conn;
}

function escapeString($d){
	return mysqli::real_escape_string($newConn(),$d);
}
function stringify($v){
	if (is_string($v)) return '"' . $v . '"';
	else return $v;
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
		echo '0 results';
	}*/
	$conn->close();
	return $results;
}

//insertData ( String $tbName, Associative_Array $data )
function insertData($tbName, $data){
	$conn = newConn();
	$columns = implode(', ',array_keys($data));
	//$escaped_values = array_map('mysqli::real_escape_string', array_values($data));
	$connection = newConn();
	$escaped_values = array_map(function($value) use ($connection) {
            return mysqli_real_escape_string($connection, $value);
        }, array_values($data));
	$escaped_values = array_map('stringify', $escaped_values);
	$values = implode(', ', $escaped_values);
	//$values = implode(', ', array_values($data));
	$sql = 'INSERT INTO $tbName ($columns) VALUES ($values)';
	$conn->query($sql);
	$conn->close();
	return $sql;
}

function removeNull($array){
	$newArray = array();
	foreach ($array as $key => $value){
		if ($value && $value != '') $newArray[$key] = $value;
	}
	return $newArray;
}