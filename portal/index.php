<?php
	session_start();
	if (!isset($_SESSION['type'])) header('Location: /');
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
<div id="carouselPortal" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/img/portal-landing.png" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block landing-content">
				<p><h1>Hi <?php echo $_SESSION['name']; ?>! How can we help you today?</h1></p>
				<p><h3>Learn more:</h3></p>
				<p>
					<button type="button" class="btn btn-outline-light btn-lg portal-btn">
						<a href="/portal/manage.php">
							<img src="/img/glyph/manage.png" />
							Manage
						</a>
					</button>
					<button type="button" class="btn btn-outline-light btn-lg portal-btn">
						<a href="/portal/explore.php">
							<img src="/img/glyph/explore.png" />
							Explore
						</a>
					</button>
					<button type="button" class="btn btn-outline-light btn-lg portal-btn">
						<a href="/portal/resources.php">
						<img src="/img/glyph/resources.png" />
						Resources
						</a>
					</button>
					<button type="button" class="btn btn-outline-light btn-lg portal-btn">
						<a href="/portal/profile.php">
							<img src="/img/glyph/institution.png" />
							Profile
						</a>
					</button>
				</p>
			</div>
		</div>
	</div>
</div>

<div id="page-content">
	<div>
		<div class="row justify-content-center">
			<div class="col-md-10 text">
				<h1 class="display-4 alignCenter">Anything. Any school. Anytime.</h2>
				<p class="alignCenter">
					The all-in-one software platform where you can buy, sell, and rent your specialized educational materials,
					generating extra revenue and saving money in the process.
				</p>
			</div>
		</div>
	</div>
	<div>
		<div class="row justify-content-center">
			<div class="col-md-4 deadCenter text">
				<img class="img-fluid" src="/img/portal-manage-demo.png" width="350">
			</div>
			<div class="col-md-6 text">
				<h2 class="display-4 alignCenter adjustLeft">Manage</h2>
				<h3 class="alignCenter">your requests and listing</h3>
				<br/>
				<p>
					The Manage portal enables you to look at your status. Blah blah blah and some more blahs.
				</p>
				<h4>Explore the manage portal &gt;&gt;</h4>
			</div>
		</div>
	</div>
</div>

</body>
</html>