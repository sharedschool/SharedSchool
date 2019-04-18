<?php
	session_start();
	if (!isset($_SESSION['type'])) header('Location: /');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/portal.css" />
	<link rel="stylesheet" type="text/css" href="/css/profile.css" />
	<script type="text/javascript" src="/js/portal.js"></script>
</head>
<body>

<!-- Navigation bar -->
<?php include '../helper/portal_navbar.php'; ?>

<?php
	include '../helper/sql.php';
	$data = connQuery('SELECT * FROM Accounts WHERE Email="' . $_SESSION['email'] . '"');
?>

<div class="d-flex flex-row">
<div id="profileLeft" class="my-4 mx-3">
	<div class="card bg-light p-0">
		<img class="card-image-top rounded-top" src="/img/carousel-1.png" style="height: 150px;"/>
		<img src="/img/logo_icon.png" id="mainProfileImg" class="profileImg" width="100px"/>
		<div class="d-flex" style="margin: 20px 50px;">
			<div class="w-75">
				<h1 class="card-title d-inline">John Doe</h1>
				<button class="btn btn-primary shadow-sm" id="editProf">Edit Profile</button>
				<h4 class="card-subtitle text-muted">Teacher at Watchung Hills Regional High School</h4>
			</div>
			<div class="w-25">
				<h5>ⓘ See Contact Info</h5>
				<h5>Messages</h5>
				<h5>✓ Follow</h5>
			</div>
		</div>
		<div class="w-100 p-0 d-flex justify-content-center" id="stats">
			<div>
				<h1>50</h1>
				<h5>Listings</h5>
			</div>
			<div>
				<h1>10</h1>
				<h5>Followers</h5>
			</div>
			<div>
				<h1>15</h1>
				<h5>Following</h5>
			</div>
			<div>
				<h1>25</h1>
				<h5>Wishes</h5>
			</div>
		</div>
		<div class="text-center"><hr width="95%"/></div>
		<p class="text-justify" style="margin: 0 2.5% 10px 2.5%">
			Hi! I am an AP Biology Teacher from Watchung Regional High School in Warren New Jersey.
			I have been teaching for seven years and am currently listing some of my slightly
			used materials that I do not need anymore. Please send me a message if you have anything
			available on my wishlist!
		</p>
	</div>

	<div class="card mt-4">
		<div class="card-header bg-primary text-white text-center h4">John's Listings</div>

		<div class="card-deck p-3">
			<div class="card listing">
				<img class="card-image-top rounded-top" src="/img/boxes.png"/>
				<div class="card-body p-2">
					<h4>TI-84 Calculators</h4>
					<h5>$95</h5>
				</div>
				<div class="card-footer d-flex justify-content-center p-0"><img src="/img/cart.png" width="50" height="50"/></div>
			</div>

			<div class="card listing">
				<img class="card-image-top rounded-top" src="/img/boxes.png"/>
				<div class="card-body p-2">
					<h4>Scissors (5)</h4>
					<h5>$15</h5>
				</div>
				<div class="card-footer d-flex justify-content-center p-0"><img src="/img/cart.png" width="50" height="50"/></div>
			</div>

			<div class="card listing">
				<img class="card-image-top rounded-top" src="/img/boxes.png"/>
				<div class="card-body p-2">
					<h4>New Stapler</h4>
					<h5>$10</h5>
				</div>
				<div class="card-footer d-flex justify-content-center p-0"><img src="/img/cart.png" width="50" height="50"/></div>
			</div>
		</div>
	</div>
</div>

<div id="profileRight" class="my-4 mx-3">
	<div class="card">
		<div class="card-header bg-primary text-white text-center h4">Recommended SharedSchoolers</div>

		<div class="d-flex flex-row mt-3">
			<img src="/img/logo_icon.png" class="profileImg" width="75px" height="75px">
			<div class="recBody d-flex flex-column justify-content-center">
				<h3 class="mb-0">Christina Smith</h3>
				<h5 class="text-muted mb-0">Teacher at Watchung Hils Regional High School</h5>
			</div>
		</div>
		
		<div class="d-flex flex-row mt-3">
			<img src="/img/logo_icon.png" class="profileImg" width="75px" height="75px">
			<div class="recBody d-flex flex-column justify-content-center">
				<h3 class="mb-0">Debbie Jones</h3>
				<h5 class="text-muted mb-0">Teacher at Plainfield High School</h5>
			</div>
		</div>

		<div class="d-flex flex-row my-3"> <!-- The last person requres my-3 instead of mt-3 so that the margin class affects both the top and the bottom instead of just the top -->
			<img src="/img/logo_icon.png" class="profileImg" width="75px" height="75px">
			<div class="recBody d-flex flex-column justify-content-center">
				<h3 class="mb-0">Mike Thomas</h3>
				<h5 class="text-muted mb-0">Teacher at Ridge Middle School</h5>
			</div>
		</div>

	</div>

	<div class="card mt-4">
		<div class="card-header bg-primary text-white text-center h4">SharedSchool Articles</div>

		<div class="mt-3 ml-4 article">
			<h2 class="mb-0">The EdTech Atmosphere</h2>
			<h4 class="text-muted mb-0">Michael Rich</h4>
		</div>

		<div class="mt-3 ml-4 article">
			<h2 class="mb-0">Surplus = Revenue</h2>
			<h4 class="text-muted mb-0">Rohan Kansagra</h4>
		</div>

		<div class="my-3 ml-4 article"> <!-- The last article requres my-3 instead of mt-3 so that the margin class affects both the top and the bottom instead of just the top -->
			<h2 class="mb-0">The Become a SharedSchooler</h2>
			<h4 class="text-muted mb-0">Peter Linder</h4>
		</div>
	</div>
</div>
</div>

</body>
</html>