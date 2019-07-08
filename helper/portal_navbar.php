<?php
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
	$dir = __DIR__ . DIRECTORY_SEPARATOR;
?>
<nav id="navbar-top" class="navbar sticky-top navbar-expand-lg navbar-dark blue">
	<a class="navbar-brand" href="/portal/">
		<img src="/img/logo_text.png" height="40" class="d-inline-block align-top" alt="SharedSchool">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="/portal/manage.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Manage
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="/portal/listings.php">My Listings</a></li>
					<li><a class="dropdown-item" href="/portal/wishlist.php">My Wish List</a></li>
					<li><a class="dropdown-item" href="/portal/transactions.php">My Transactions</a></li>
					<li><a class="dropdown-item" href="/portal/institutions.php">My Institutions</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/portal/browse.php">Browse</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Resources
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Support</a></li>
					<li><a class="dropdown-item" href="#">Blog</a></li>
				</ul>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="/portal/profile.php">Profile</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<button id="logout-btn" class="btn btn-outline-light nav-btn" type="button">Log Out</button>
		</form>
	</div>
</nav>

<?php
	if (!isset($_SESSION['type'])){
		include('../helper/signup_modal.php');
		include('../helper/login_modal.php');
	}
?>