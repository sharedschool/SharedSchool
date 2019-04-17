<?php
	session_start();
	if (!isset($_SESSION['type'])) header('Location: /');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/portal.css" />
	<script type="text/javascript" src="/js/portal.js"></script>
</head>
<body>

<!-- Navigation bar -->
<?php include '../helper/portal_navbar.php'; ?>


<?php include '../helper/sql.php'; ?>
<?php
	if (isset($_POST['filters'])){
		// Blah blah blah
	}
	$query = 'SELECT `Item`, `Model`, `Price`, `Quantity`, `Condition`, `Updated` FROM Inventory WHERE Buyer IS NULL ORDER BY `Updated` DESC LIMIT 25';
	$data = connQuery($query);
?>

<table id="inventory">
	<tbody>
		<tr>
<!-- 			<td class="filters">Filters</td> -->
			<td>
				<table id="inventory-catalog">
					<thead>
						<tr>
							<?php
								foreach($data[0] as $key=>$value){
									echo '<th>' . $key . '</th>';
								}
							?>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($data as $row){
								echo '<tr>';
								foreach($row as $value){
									echo '<td>' . $value . '</td>';
								}
								echo '</tr>';
							}
						?>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>

</body>
</html>