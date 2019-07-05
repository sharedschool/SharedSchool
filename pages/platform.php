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
			background-size: 1280px;
			background-repeat: repeat-x;
		}
		h3, h1, h4 {
			text-align: center;
			font-weight: bold;
		}
		.col-md-4 {
			width: 300px;
			text-align: center;
		}
		.col-md-4 img {
			border-radius: 25px;
			width: 140px;
		}
		.odd, .even {
			min-height: 460px;
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
	<div style="height: 325px">
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
				</h3>
			</div>
		</div>
	</div>
	<div class="deadCenter">
		<div class="row justify-content-center">
			<div class="col-md-4 text">
				<img src="/img/platform-donate.png" style="background: #f26661" />
				<h3>Donate</h3>
			</div>
			<div class="col-md-4 text">
				<img src="/img/platform-buy-sell.png" style="background: #f8b449" />
				<h3>Buy/Sell</h3>
			</div>
			<div class="col-md-4 text">
				<img src="/img/platform-rent.png" style="background: #89cc99" />
				<h3>Rent</h3>
			</div>
		</div>
	</div>
	<div class="break"></div>
	<div class="break"></div>
	<div class="break"></div>
	<div class="row justify-content-center odd" style="text-align:center">
		<div class="col-md-10 text deadCenter">
			<div class="break"></div>
			<h3 class="green-header">DONATE</h3>
			<h2 class="blue-header">Build long-term relationships with schools through donations</h2>
			<div class="break"></div>
			<p class="gray headline" style="width: 50%">
				Free up space and help primary and secondary schools receive necessary educational materials.
			</p>
			<div class="break"></div>
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button">Learn More</button>
			<div class="break"></div>
		</div>
	</div>
	<div class="row justify-content-center even">
		<div class="col-md-7 text deadCenter">
			<h3 class="green-header" style="align-self: flex-start">BUY/SELL</h3>
			<h2 class="blue-header" style="align-self: flex-start">Make direct transactions between schools with no third party fees</h2>
			<div class="break"></div>
			<p class="gray headline">
				Buy and sell your educational surplus, find the resources you need at a low price,
				and utilize your surplus to generate revenue.
			</p>
			<div class="break"></div>
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button" style="align-self:flex-start">Learn More</button>
			<div class="break"></div>
		</div>
		<div class="col-md-3 deadCenter text" style="min-height: 400px">
			<img class="img-fluid" src="/img/platform-person.png" width="250">
		</div>
	</div>
	<div class="row justify-content-center odd">
		<div class="col-md-3 deadCenter text" style="min-height: 400px">
			<img class="img-fluid" src="/img/platform-computer.png" width="150">
		</div>
		<div class="col-md-7 text deadCenter">
			<h3 class="green-header" style="align-self: flex-start">RENT</h3>
			<h2 class="blue-header" style="align-self: flex-start">Recur revenue with our novel rent feature</h2>
			<div class="break"></div>
			<p class="gray headline">
				Rent out materials that are only used periodically and provide other schools with affordable resources.
			</p>
			<div class="break"></div>
			<button class="btn btn-primary btn-lg green-btn coming-soon" type="button" style="align-self:flex-start">Learn More</button>
			<div class="break"></div>
		</div>
	</div>
</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>