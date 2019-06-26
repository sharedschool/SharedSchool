<?php 
	session_start(); 
	if (isset($_SESSION['type'])) header('Location: /portal/');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | SharedSchool</title>
	<?php include './helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/home.css" />
	<script type="text/javascript" src="/js/home.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<?php
	if (isset($_GET['demo'])){
		echo '<div class="alert alert-success" role="alert" id="demo-alert" style="text-align:center">Demo requested!</div>';
	}
?>

<!-- Navigation bar -->
<?php include './helper/navbar.php'; ?>

<div id="home"><a class="anchor" name="home"></a></div>

<!-- Homepage carousel -->
<div id="carouselCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselCaptions" data-slide-to="1"></li>
		<li data-target="#carouselCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/img/carousel-1.png" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<p>We enable easy access to specialized materials at a moment's notice.</p>
				<button class="btn btn-outline-light btn-lg demo-btn" type="button">Request Demo</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/img/carousel-2.png" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<p>We help build long-term relationships between institutions.</p>
				<button class="btn btn-outline-light btn-lg demo-btn" type="button">Request Demo</button>
			</div>
		</div>
		<div class="carousel-item">
			<img src="/img/carousel-3.png" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<p>We empower institutions to find new sources of revenue through a shared economy model.</p>
				<button class="btn btn-outline-light btn-lg demo-btn" type="button">Request Demo</button>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<!-- Page content -->
<div id="page-content">
	<div id="about">
		<a class="anchor" name="about"></a>
		<div class="row justify-content-center">
			<div class="col-md-4 deadCenter text">
				<img class="img-fluid" src="/img/about.png" width="450">
			</div>
			<div class="col-md-6 text">
				<h1 class="display-4 alignCenter adjustLeft">About</h1>
				<p>
					SharedSchool is a software platform that allows institutions such as primary
					and secondary schools to buy, rent, and sell specialized educational materials.
					Our flexible network is beneficial towards any institution. Simply put, we generate
					revenue streams from your surplus materials and provide cheap materials that anyone
					can rent or buy. Paired with novel matching algorithms, we create a convenient and
					unique marketplace where all the work is done for you! All you have to do is list or request
					your desired materials. We are dedicated to connect schools who have surplus materials
					to schools needing materials, simultaneously forming a new shared economy.
					Sign up for SharedSchool today!
				</p>
			</div>
		</div>
	</div>
	<div id="contact">
		<a class="anchor" name="contact"></a>
		<div class="row justify-content-center">
			<div class="col-md-10 text">
				<h1 class="display-4 alignCenter">Contact Us</h1>
				<p align="center">
					If you have any questions or would like to request a demo,
					please contact us at <b><a href="mailto:contact@sharedschool.co" class="email">
						contact@sharedschool.co
					</a></b>.
				</p>
			</div>
		</div>
	</div>
</div>

<?php
	include('./helper/demo_modal.php');
?>

</body>
</html>
