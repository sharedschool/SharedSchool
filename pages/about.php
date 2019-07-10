<?php
	include('../helper/launcher.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us | SharedSchool</title>
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
		.odd, .even {
			/* min-height: 460px; */
		}
		.card {
			width: 300px;
		}
		.column {
			margin: 25px;
		}
		.row-top {
			padding-top: 50px;
		}
		.row-bottom {
			padding-bottom: 50px;
		}
		img.profile-pic {
			border-radius: 100%;
			width: 200px;
		}
		.meet-team .col-md-2 {
			margin: 25px;
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

<div id="page-content" style="padding: 15px;">
	<div class="mb-5 text-center px-2" style="min-height: 450px">
		<div class="row justify-content-center">
			<div class="col-md-8 text">
				<div class="break"></div>
				<div class="break"></div>
				<h4 style="color: #46ffee">HI, WE'RE SHAREDSCHOOL!</h4>
				<div class="break"></div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7 text">
				<h1 style="color: white">
					We're a growing team dedicated to connecting schools with a shared economy model.
				</h3>
			</div>
		</div>
	</div>
	<div class="row justify-content-center row-bottom row-top odd">
		<div class="col-md-6 text">
			<h1 class="blue-header">Our Vision</h1>
			<div class="break"></div>
			<p class="gray headline">
				To ensure surplus is used to its full potential and to enable easy access to educational materials to all schools.
			</p>
		</div>
		<div class="col-md-4 deadCenter text">
			<img src="/img/about-team.png" width="450">
		</div>
	</div>
	<div class="meet-team">
		<div class="row justify-content-center row-top">
			<div class="col-md-12 deadCenter">
				<h1 class="blue-header">Meet the Team</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-michael.jpeg" />
				<h3 class="blue-header">Michael Rich</h3>
				<h5 class="gray headline">Co-Founder and Co-CEO</h5>
			</div>
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-prateek.jpeg" />
				<h3 class="blue-header">Prateek Humane</h3>
				<h5 class="gray headline">CTO</h5>
			</div>
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-rohan.jpeg" />
				<h3 class="blue-header">Rohan Kansagra</h3>
				<h5 class="gray headline">VP of Business Development</h5>
			</div>
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-neelay.jpeg" />
				<h3 class="blue-header">Neelay Trivedi</h3>
				<h5 class="gray headline">Co-Founder and Co-CEO</h5>
			</div>
		</div>
		<div class="row justify-content-center row-bottom">
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-james.jpeg" />
				<h3 class="blue-header">James Narayanan</h3>
				<h5 class="gray headline">Frontend Engineer Intern</h5>
			</div>
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-peter.jpeg" />
				<h3 class="blue-header">Peter Linder</h3>
				<h5 class="gray headline">VP of Engineering</h5>
			</div>
			<div class="col-md-2 text-center">
				<img class="profile-pic" src="/img/about-arjun.jpeg" />
				<h3 class="blue-header">Arjun Singh</h3>
				<h5 class="gray headline">Sales and Research Intern</h5>
			</div>
		</div>
	</div>

</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>
