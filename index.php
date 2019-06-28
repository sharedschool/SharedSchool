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

<!-- Page content -->
<div id="page-content">
	<div>
		<div class="row justify-content-center">
			<div class="col-md-5 deadCenter text">
				<img class="img-fluid" src="/img/home-1.png" width="550">
			</div>
			<div class="col-md-5 text">
				<h1 class="blue-header">Make use of your school's surplus</h1>
				<div class="break"></div>
				<p class="gray-headline">
					A modern EdTech platform that directly connects schools to each other based on your needs and surplus. Maximize what your surplus can do for you!
				</p>
				<div class="break"></div>
				<button class="btn btn-primary btn-lg demo-btn" type="button">Request a Demo</button>
			</div>
		</div>
	</div>
	
	<div>
		<div class="row justify-content-center">
			<div class="col-md-5 text">
				<h1 class="blue-header">See how SharedSchool works for your school</h1>
				<div class="break"></div>
				<p class="gray headline">
					Empowering public and private schools through a shared economy model.
				</p>
				<div class="break"></div>
				<button class="btn btn-primary btn-lg demo-btn" type="button">Request a Demo</button>
			</div>
			<div class="col-md-5 deadCenter text">
				<div class="row justify-content-center">
					<div class="col">
						<img src="/img/home-social.png" class="for-icon"/>
						<h6 class="gray">FOR</h6>
						<h5 class="blue-header">Social Good</h5>
						<p class="gray for-p">
							Directly help other schools obtain necessary educational materials from your surplus.
						</p>
					</div>
					<div class="col">
						<img src="/img/home-revenue.png" class="for-icon"/>
						<h6 class="gray">FOR</h6>
						<h5 class="blue-header">Generating Revenue</h5>
						<p class="gray for-p">
							Generate revenue for your school through our buy/sell or rent feature.
						</p>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col">
						<img src="/img/home-resources.png" class="for-icon"/>
						<h6 class="gray">FOR</h6>
						<h5 class="blue-header">Acquiring Resources</h5>
						<p class="gray for-p">
							Find the specialized educational materials you need for your school.
						</p>
					</div>
					<div class="col">
						<img src="/img/home-space.png" class="for-icon"/>
						<h6 class="gray">FOR</h6>
						<h5 class="blue-header">Freeing Up Space</h5>
						<p class="gray for-p">
							Quickly free up storage for your school using our easy and flexible platform.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div>
		<div class="row justify-content-center">
			<h1 class="blue-header">The SharedSchool Process</h1>
		</div>
		<div class="row justify-content-center process">
			<div class="col">
				<div class="break"></div>
				<div class="break"></div>
				<img src="/img/home-identify.png" />
				<h6>Identify</h6>
				<p>Find excess materials you don't need.</p>
			</div>
			<div class="col">
				<div class="break"></div>
				<img src="/img/home-list.png" />
				<h6>List</h6>
				<p>Directly input your product details online or with our mobile app.</p>
			</div>
			<div class="col">
				<img src="/img/home-match.png" />
				<h6>Match</h6>
				<p>Connect directly with schools who are in need of your products.</p>
			</div>
			<div class="col">
				<div class="break"></div>
				<img src="/img/home-connect.png" />
				<h6>Connect</h6>
				<p>Discuss product logistics with the school you have been matched with.</p>
			</div>
			<div class="col">
				<div class="break"></div>
				<div class="break"></div>
				<img src="/img/home-complete.png" />
				<h6>Complete</h6>
				<p>Finalize details and decide on shipment method.</p>
			</div>
		</div>
	</div>
</div>

<?php
	include('./helper/footer.php');
	include('./helper/demo_modal.php');
?>

</body>
</html>
