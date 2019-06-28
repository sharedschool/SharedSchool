<?php
	$page = basename($_SERVER["SCRIPT_FILENAME"], '.php');
	$dir = __DIR__ . DIRECTORY_SEPARATOR;
?>
<nav id="navbar-top" class="navbar sticky-top navbar-expand-lg navbar-dark blue" >
	<a class="navbar-brand" href="/">
		<img src="/img/logo_text.png" height="40" class="d-inline-block align-top" alt="SharedSchool">
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				PLATFORM
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="/pages/platform.php">Platform Overview</a></li>
					<li><a class="dropdown-item" href="/pages/use.php">Use Cases</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				RESOURCES
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="/pages/blog.php">Blog</a></li>
					<li><a class="dropdown-item" href="/pages/faq.php">FAQ</a></li>
				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				COMPANY
				</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="/pages/about.php">About Us</a></li>
					<li><a class="dropdown-item" href="/pages/contact.php">Contact Us</a></li>
				</ul>
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
		<div style="width:30px"></div>
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
		include($dir . 'signup_modal.php');
		include($dir . 'login_modal.php');
	}
?>