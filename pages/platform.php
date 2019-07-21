<?php include('../helper/launcher.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Platform Overview | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<style>
		#navbar-top {
			background: none;
			transition: background 0.5s ease;
		}
		body {
			background-image: url('/img/platform-bg.png');
			background-size: 100% 529px;
			background-repeat: repeat-x;
		}
		.col-sm-4 {
			width: 300px;
			text-align: center;
		}
		.col-sm-4 img {
			border-radius: 25px;
			width: 140px;
		}
		.odd, .even {
			/* min-height: 460px; */
		}
	</style>
	<script type="text/javascript">
		function scrollCallback(){
			scroll_start = $(this).scrollTop();
			if(scroll_start < 50) {
				$("#navbar-top").css('background', 'none');
			} else {
				$('#navbar-top').css('background', '#3a53a4');
			}
		}
		$(document).ready(function(){
			var scroll_start = 0;
			$(document).scroll(scrollCallback);
			scrollCallback();
		});
	</script>
</head>
<body data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<!-- Navigation bar -->
<?php include '../helper/navbar.php'; ?>

<div id="page-content">
	<div class="mb-5 text-center px-2">
		<div class="row justify-content-center">
			<div class="col-md-8 text">
				<div class="break"></div>
				<div class="break"></div>
				<h4 style="color: #46ffee">SHAREDSCHOOL PLATFORM OVERVIEW</h4>
				<div class="break"></div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7 text">
				<h1 style="color: white">
					The EdTech platform enabling schools to find resources and scale surplus
				</h1>
			</div>
		</div>
	</div>
	<div class="mb-5 d-none d-md-block">&nbsp;</div>
	<div class="deadCenter mb-5">
		<div class="row justify-content-center">
			<div class="col-12 col-sm-4 text">
				<img src="/img/platform-donate.png" style="background: #f26661" />
				<h3>Donate</h3>
			</div>
			<div class="col-12 col-sm-4 mt-3 mt-sm-0 text">
				<img src="/img/platform-buy-sell.png" style="background: #f8b449" />
				<h3>Buy/Sell</h3>
			</div>
			<div class="col-12 col-sm-4 mt-3 mt-sm-0 text">
				<img src="/img/platform-rent.png" style="background: #89cc99" />
				<h3>Rent</h3>
			</div>
		</div>
	</div>

	<div class="row justify-content-center text-center odd py-3 py-md-5">
		<div class="col px-5 text deadCenter">
			<h3 class="green-header">DONATE</h3>
			<h2 class="blue-header">Build long-term relationships with schools through donations</h2>
			<p class="gray headline w-75">
				Free up space and help primary and secondary schools receive necessary educational materials.
			</p>
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button">Learn More</button>
		</div>
	</div>
	<div class="row justify-content-center align-items-center even py-3 py-md-5">
		<div class="col-10 col-md-7 mx-3 ml-md-5 text d-flex flex-column text-center text-md-left d-flex">
			<h3 class="green-header" >BUY/SELL</h3>
			<h2 class="blue-header" >Make direct transactions between schools with no third party fees</h2>
			<p class="gray headline">
				Buy and sell your educational surplus, find the resources you need at a low price,
				and utilize your surplus to generate revenue.
			</p>
			<button class="btn btn-primary btn-lg green-btn coming-soon align-self-center align-self-md-start" type="button" style="align-self:flex-start">Learn More</button>
		</div>
		<div class="col-10 col-md-3 mt-3 mt-md-0 deadCenter text">
			<img class="img-fluid" src="/img/platform-person.png" width="250">
		</div>
	</div>
	<div class="row flex-wrap-reverse justify-content-center align-items-center odd py-3 py-md-5">
		<div class="col-10 col-md-3 mt-3 mt-md-0 deadCenter text">
			<img class="img-fluid" src="/img/platform-computer.png" width="150">
		</div>
		<div class="col-10 col-md-7 mx-3 ml-md-5 text d-flex flex-column text-center text-md-left d-flex">
			<h3 class="green-header">RENT</h3>
			<h2 class="blue-header">Recur revenue with our novel rent feature</h2>
			<p class="gray headline">
				Rent out materials that are only used periodically and provide other schools with affordable resources.
			</p>
			<button class="btn btn-primary btn-lg green-btn coming-soon align-self-center align-self-md-start" type="button">Learn More</button>
		</div>
	</div>
	<div class="row flex-wrap-reverse justify-content-center align-items-center even py-3 py-md-5">
		<div class="col-10 col-md-7 mx-3 ml-md-5 text d-flex flex-column text-center text-md-left d-flex">
			<h3 class="green-header">SECURE</h3>
			<h2 class="blue-header">A safe and secure network for your district</h2>
			<p class="gray headline">
				Sell, donate and receive surplus within an exclusive network you can trust. Transactions can only occur between schools, ensuring that all SharedSchool users are trustworthy and accountable members of the educational ecosystem.
			</p>
			<button class="btn btn-primary btn-lg green-btn coming-soon align-self-center align-self-md-start" type="button">Learn More</button>
		</div>
		<div class="col-10 col-md-3 mt-3 mt-md-0 deadCenter text">
			<img class="img-fluid" src="/img/platform-secure.png" width="120">
		</div>
	</div>
</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>
