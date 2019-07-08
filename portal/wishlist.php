<?php
	session_start();
	//if (!isset($_SESSION['type'])) header('Location: /');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wish List | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/portal.css" />
	<script type="text/javascript" src="/js/portal.js"></script>
</head>
<body>

<!-- Navigation bar -->
<?php include '../helper/portal_navbar.php'; ?>

<div id="page-content">
	<div class="row justify-content-center">
		<div class="col-md-3">
			<h1 class="blue-header">Wish List</h1>
		</div>
		<div class="col-md-3">
			<h5 class="gray" style="display:inline">Sort By:</h5>
			<div class="form-group" style="display:inline">
				<select name="price-range" class="form-control" id="sortBy">
					<option value="low">Price (Low to High)</option>
					<option value="high">Price (High to Low)</option>
					<option value="popularity">Popularity</option>
				</select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group inner-addon right-addon">
				<span class="glyphicon glyphicon-search"></span>
				<input type="text" name="query" class="form-control" id="searchbox" placeholder="Search for anything" onkeyup="suggestedResults(this.value)"/>
			</div>
		</div>
	</div>
</div>

</body>
</html>