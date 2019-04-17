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
	
	$conn = false;
	if(strpos( $_SERVER['HTTP_HOST'], 'sharedschool.tk') !== false){
		$conn = mysqli_connect('localhost', 'id8511368_backend', 'teeky2', 'id8511368_sharedschool');
	} else {
		$conn = mysqli_connect('127.0.0.1', 'backend', 'teeky2', 'SharedSchool');
	}
	if (!$conn){
		die('Connection failed: ' . mysqli_connect_error());
	}
	
	if (isset($_POST['Seller'])){
		$data = postData(['Seller', 'Buyer', 'Category', 'Item', 'Model', 'Price', 'Condition', 'Description', 'Posted', 'Updated', 'Quantity']);
		insertData($conn, 'Inventory', $data);
	}
?>
<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
	Seller: <input type="text" name="Seller" placeholder="prateek.humane@gmail.com" /><br/>
	Buyer: <input type="text" name="Buyer" placeholder="prateek.humane@gmail.com" /> (leave blank for now)<br/>
	Category: <input type="text" name="Category" placeholder="Laptop Computer Electronic" /><br/>
	Item: <input type="text" name="Item" placeholder="Chromebook" /><br/>
	Model: <input type="text" name="Model" placeholder="Samsung Chromebook 3" /><br/>
	Price: $<input type="number" name="Price" placeholder="300.00" /><br/>
	Quantity: <input type="number" name="Quantity" placeholder="3" /><br/>
	Condition: <input type="text" name="Condition" placeholder="Slightly used" /><br/>
	Description: <textarea name="Description" placeholder="Small 11 inch Chromebooks"></textarea><br/>
	Posted: <input type="date" name="Posted" value="<?php echo date('Y-m-d'); ?>" /><br/>
	Updated: <input type="date" name="Updated" value="<?php echo date('Y-m-d'); ?>" /><br/>
	<input type="submit"/>
</form>

</body>
</html>
