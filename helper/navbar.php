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
				<a class="nav-link" href="/#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/#about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($page=='faq') echo 'active'; ?>" href="/<?php if ($page=='index') echo '#faq'; else echo 'faq.php'; ?>">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/#contact">Contact Us</a>
			</li>
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