<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | SharedSchool</title>
	<link rel="icon" href="/img/logo_icon.png" type="image/png">
	<?php include './helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/home.css" />
	<script type="text/javascript" src="/js/home.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-top" data-offset="0" >

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
	<div id="faq">
		<a class="anchor" name="faq"></a>
		<div class="row justify-content-center">
			<div class="col-md-10 text">
				<h1 class="display-4 alignCenter">FAQ</h1>
				<h4> Why should I use SharedSchool? </h4>
				<p> There are many key advantages to using the SharedSchool platform. In summary, if you want to generate revenue and/or save money for your institution, join SharedSchool today! </p>
				<h4> Who uses SharedSchool? </h4>
				<p> Educational institutions, namely primary and secondary schools, media centers and libraries currently use SharedSchool. Teachers and administrators are also a part of the SharedSchool network since they are affiliated with their own institution. In the near future, we will provide individual user accounts where anyone can use the SharedSchool platform. </p>
				<h4> What is the cost of a SharedSchool account? </h4>
				<p> Nothing! SharedSchool is free. </p>
				<h4> How does SharedSchool work? </h4>
				<p> SharedSchool uses novel matching algorithms to correctly identify and optimize the proper listings with requests based on time, availability, and location. Our distribution network will then supply the materials based on these matchings. </p>
				<h4> How can SharedSchool make and/or save me money? </h4>
				<p> Many institutions either have surplus materials or need materials. We can generate extra revenue for your school by listing surplus materials onto the SharedSchool platform and connecting them to other schools who need these items. The schools wanting these materials will receive them at a cheaper price because they are typically used and have the option to rent them. </p>
				<h4> Why is SharedSchool different from other surplus centers? </h4>
				<p> In general, we provide a lower cost and higher flexibility than our competitors. Currently there doesn’t exist a marketplace and shared economy where institutions can list and request specialized materials on the scale that we do. Additionally, we are working towards social good, aiming to provide institutions with essential materials at a cheaper cost, enabling other schools to gain extra revenue in the process. </p>
				<br/>
				<h4 align="center"> More Questions? Click <a href="/faq.php">here</a> to see our full FAQ page </h4>
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
					please contact us at <b><a href="mailto:sharedschool1@gmail.com" class="email">
						sharedschool1@gmail.com
					</a></b>.
				</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>
