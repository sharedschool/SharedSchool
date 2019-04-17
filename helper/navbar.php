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
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				About
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Shared School</a></li>
					<li><a class="dropdown-item" href="#">The Team</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Product
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#" style="padding: 10px">
						<div style="display:flex;flex-direction:row;">
							<img src="/img/new_logo_icon.png" height="50" width="50" style="margin-right:15px">
							<div>
								<h4 style="color:#5fc3f0">SharedSchool Platform</h1>
								Buy, sell, and rent your educational materials
							</div>
						</div>
					</a></li>
					<li><a class="dropdown-item" href="#" style="padding: 10px">
						<div style="display:flex;flex-direction:row;">
							<img src="/img/boxes.png" height="50" width="55" style="margin-right:10px">
							<div>
								<h4 style="color:#5fc3f0">Inventory Management</h4>
								Smart Inventory Management
							</div>
						</div>
					</a></li>
					<li><a class="dropdown-item" href="#" style="padding: 10px">
						<div style="display:flex;flex-direction:row;">
							<img src="/img/enrollment_pred.png" height="50" width="50" style="margin-right:15px">
							<div>
								<h4 style="color:#5fc3f0">Enrollment Prediction</h4>
								Predict future enrollements
							</div>
						</div>
					</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Resources
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#">Help Center</a></li>
					<li><a class="dropdown-item" href="#">Blog</a></li>
					<li><a class="dropdown-item" href="/faq.php">FAQ</a></li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link smoothscroll" href="/#contact">Contact Us</a>
			</li>
			<?php
				if (isset($_SESSION['type'])){
					echo '
						<li class="nav-item">
							<a class="nav-link" href="/portal/">Portal</a>
						</li>
					';
				}
			?>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<?php
				if (isset($_SESSION['type'])){
					echo '<button id="logout-btn" class="btn btn-outline-light nav-btn" type="button">Log out</button>';
				} else {
					echo '<button id="login-btn" class="btn btn-outline-light nav-btn" type="button">Log in</button>';
					echo '<button id="signup-btn" class="btn btn-outline-light nav-btn" type="button">Sign up</button>';
				}
			?>
		</form>
	</div>
</nav>

<?php
	if (!isset($_SESSION['type'])){
		include('./helper/signup_modal.php');
		include('./helper/login_modal.php');
	}
?>