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
		h3, h1 {
			text-align: center;
			font-weight: bold;
		}
		.col-md-4 {
			width: 300px;
			text-align: center;
		}
		.col-md-4 img {
			background: #78ced3;
			border-radius: 25px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			var scroll_start = 0;
			$(document).scroll(function(){
				scroll_start = $(this).scrollTop();
				if(scroll_start < 50) {
					$("#navbar-top").css('background', 'none');
				} else {
					$('#navbar-top').css('background', '#3a53a4');
				}
			});
		});
	</script>
</head>
<body data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<!-- Navigation bar -->
<?php include '../helper/navbar.php'; ?>

<div>
	<div style="height: 315px">
		<div class="row justify-content-center">
			<div class="col-md-8 text">
				<div class="break"></div>
				<div class="break"></div>
				<h3 style="color: #78ced3">
					SHAREDSCHOOL PLATFORM OVERVIEW
				</h3>
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
				<img src="/img/platform-donate.png" width="150" />
				<h3 class="gray headline">Donate</h3>
			</div>
			<div class="col-md-4 text">
				<img src="/img/platform-buy-sell.png" width="150" style="background: #38c7f4" />
				<h3 class="gray headline">Buy/Sell</h3>
			</div>
			<div class="col-md-4 text">
				<img src="/img/platform-rent.png" width="150" />
				<h3 class="gray headline">Rent</h3>
			</div>
		</div>
	</div>
	<div class="break"></div>
	<div class="break"></div>
	<div class="break"></div>
</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>