<?php
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>
<nav id="navbar-top" class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #0f0e2e;">
	<a class="navbar-brand" href="/">
		<img src="/img/logo_text.png" height="35" class="d-inline-block align-top" alt="SharedSchool">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="/portal/">Portal</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/portal/manage.php">Manage</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Explore
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li class="dropright">
						<a class="dropdown-item dropdown-toggle dropdown-submenu" href="#">Browse <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item">Add/Request items</a></li>
							<li><a class="dropdown-item">Watch list</a></li>
							<li><a class="dropdown-item">View our suggestions</a></li>
							<li><a class="dropdown-item">Browse network</a></li>
						</ul>
					</li>
					<li><a class="dropdown-item" href="#">Inventory</a></li>
					</li><div class="dropdown-divider"></div></li>
					</li><a class="dropdown-item" href="#">Enrollment</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Resources
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Help Center</a></li>
					</li><a class="dropdown-item" href="#">Blog</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/portal/profile.php">Profile</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<button id="logout-btn" class="btn btn-outline-light nav-btn" type="button">Log out</button>
		</form>
	</div>
</nav>

<?php
	if (!isset($_SESSION['type'])){
		include('./helper/signup_modal.php');
		include('./helper/login_modal.php');
	}
?>