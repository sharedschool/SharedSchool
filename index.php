<!DOCTYPE html>
<html>
<head>
	<title>Home | SharedSchool</title>
	<style>a[href*='000webhost']{display:none;}</style>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand" />
	<link rel="stylesheet" type="text/css" href="/bootstrap-4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/css/home.css" />
	<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="/js/popper.min.js"></script>
	<script type="text/javascript" src="/bootstrap-4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/js/home.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<!-- Navigation bar -->
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
				<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#faq">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact Us</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<button class="btn btn-outline-primary nav-btn" type="button">Login</button>
			<button class="btn btn-outline-success nav-btn" type="button">Signup</button>
		</form>
	</div>
</nav>

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
				<p> Educational institutions, namely primary and secondary schools, media centers and libraries currently use SharedSchool. Teachers and supervisors are also a part of the SharedSchool network since they are affiliated with their own institution. In the near future, we will provide individual user accounts where anyone can use the SharedSchool platform. </p>
				<h4> What is the cost of a SharedSchool account? </h4>
				<p> Nothing! SharedSchool is free. </p>
				<h4> How does SharedSchool work? </h4>
				<p> SharedSchool uses novel matching algorithms to correctly identify and optimize the proper listings with requests based on time, availability, and location. Our distribution network will then supply the materials based on these matchings. </p>
				<h4> How can SharedSchool make and/or save me money? </h4>
				<p> Many institutions either have surplus materials or need materials. We can generate extra revenue for your school by listing surplus materials onto the SharedSchool platform and connecting them to other schools who need these items. The schools wanting these materials will receive them at a cheaper price because they are typically used and have the option to rent them. </p>
				<h4> Why is SharedSchool different from other surplus centers? </h4>
				<p> In general, we provide a lower cost and higher flexibility than our competitors. Currently there doesn’t exist a marketplace and shared economy where institutions can list and request specialized materials on the scale that we do. Additionally, we are working towards social good, aiming to provide institutions with essential materials at a cheaper cost, enabling other schools to gain extra revenue in the process. </p>
				<h4> If I have to rent something continually (every year for example), should I just buy it? </h4>
				<p> The beauty about the SharedSchool platform is that the ball is in your court. You can decide! We recommend that if you are not sure about how many materials you will need in the future, or if the material is prone to damage/breakage, then rent said material. </p>
				<h4> What different abilities do teacher, supervisor, and institution accounts have? </h4>
				<p> An institution account is an “umbrella” account made so that supervisors and teachers can be affiliated with an institution. Supervisors handle the transactions (requests/listings) and teachers have the ability to make suggested requests and listings. All accounts have the ability to browse the requests and listings on the platform. </p>
				<h4> I’m a teacher and I’m not sure if I completely understand the process of how I can receive and/or list materials. Can you describe this process? </h4>
				<p> Once your institution has created their own institution-based account, you will be able to create a separate teacher account under your institution. After creating your account, you will be able to add suggested requests and listings to be verified by an appropriate supervisor. If verified, the request/listing will be added onto the SharedSchool platform and then accordingly matched with another institution. That’s it! </p>
				<h4> What if no one wants the material that I’m listing on SharedSchool? </h4>
				<p> We will keep your material listed on the SharedSchool platform until you decide you want to take it off. Requests are dynamic and constantly change, so odds are that eventually you will be able to sell your material. </p>
				<h4> Why is it important to become a part of a shared economy? </h4>
				<p> Shared economy’s connect buyers and sellers by the means of sharing a good or service. Becoming a part of one makes it easier for you to receive these materials by increasing flexibility and lowering the cost. </p>
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