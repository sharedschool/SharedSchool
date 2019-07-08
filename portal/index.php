<?php
	session_start();
	//if (!isset($_SESSION['type'])) header('Location: /');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Portal | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/portal.css" />
	<script type="text/javascript" src="/js/portal.js"></script>
</head>
<body>

<!-- Navigation bar -->
<?php include '../helper/portal_navbar.php'; ?>

<?php
	if (isset($_GET['signup'])){
		echo '
			<div class="alert alert-success" role="alert" style="text-align: center; margin-bottom: 0;">
				<h4 class="alert-heading">Congratulations!</h4>
				<hr>
				<p class="mb-0">This is the portal where you can access all of your SharedSchool tools.</p>
			</div>
		';
	}
?>

<!-- Landing portal thing -->
<div id="page-content">
	<div class="row justify-content-center">
		<div class="col-md-1">
			<img src="https://picsum.photos/100/100" />
		</div>
		<div class="col-md-2">
			<h2 class="blue-header">John Doe</h2>
			<h3 class="gray headline">Institution: WHRHS</h3>
			<p class="gray">Account Type: Admin</p>
		</div>
		<div class="col-md-2">
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button">Edit Profile</button>
		</div>
		<div class="col-md-2">
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button">Manage Listings</button>
		</div>
		<div class="col-md-2">
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button">Add Listing</button>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<h1 class="blue-header deadCenter">
				Welcome John Doe! How can we help you today?
			</h1>
		</div>
	</div>
</div>

</body>
</html>