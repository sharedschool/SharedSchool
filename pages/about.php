<?php
	include('../helper/launcher.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<style>
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
	</style>
</head>
<body data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<!-- Navigation bar -->
<?php include '../helper/navbar.php'; ?>

<div id="page-content" style="padding: 15px;">
	<div class="row justify-content-center">
		<div class="col-md-12 text deadCenter">
			<h3 class="green-header">About Us</h3>
		</div>
	</div>
	<div class="row justify-content-center row-bottom">
		<div class="col-md-6 text deadCenter">
			<h1 class="blue-header">Our Vision</h1>
			<div class="break"></div>
			<p class="gray">
				<b>Vision statement placeholder!</b> SharedSchool is a software platform that allows institutions such as primary
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
		<div class="col-md-4 deadCenter text">
			<img class="img-fluid" src="https://picsum.photos/450/245" width="450">
		</div>
	</div>
	<div class="row justify-content-center odd row-top row-bottom">
		<div class="col-md-6 deadCenter text">
			<img class="img-fluid" src="https://picsum.photos/550/300" width="550">
		</div>
		<div class="col-md-5 text deadCenter">
			<h1 class="blue-header">What We Do</h1>
			<div class="break"></div>
			<p class="gray">
				<b>What we do placeholder!</b>
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
	<div>
		<div class="row justify-content-center row-top">
			<div class="col-md-12 deadCenter">
				<h1 class="blue-header">Meet the Team</h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="column">
				<div class="card">
					<img src="https://media.licdn.com/dms/image/C4D03AQGx8LEFpSUAhQ/profile-displayphoto-shrink_800_800/0?e=1567641600&v=beta&t=PA5vJ08gsb3AECp4h6gbaNUyD76XAXGFS99xL2pwD-U" class="card-img-top" alt="Michael Rich" />
					<div class="card-body">
						<h5 class="card-title">Michael Rich</h5>
						<p class="card-text gray">CEO & Co-Founder</p>
						<p class="card-text">Miggy's his name and startups are his game.</p>
						<a href="mailto:michaelrich@sharedschool.co" class="btn-link">michaelrich@sharedschool.co</a>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="https://media.licdn.com/dms/image/C4D03AQHVgM5ipmDPzw/profile-displayphoto-shrink_800_800/0?e=1567641600&v=beta&t=MJVJxmE6fVT5Ztrc0I7T_0F0SFVnWNoNXu5oDHVgMwg" class="card-img-top" alt="Neelay Trivedi" />
					<div class="card-body">
						<h5 class="card-title">Neelay Trivedi</h5>
						<p class="card-text gray">CEO & Co-Founder</p>
						<p class="card-text">A born pioneer with a flair for mentioning his six-pack.</p>
						<a href="mailto:neelaytrivedi@sharedschool.co" class="btn-link">neelaytrivedi@sharedschool.co</a>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="https://media.licdn.com/dms/image/C4D03AQFciQCHEqSEQA/profile-displayphoto-shrink_800_800/0?e=1567641600&v=beta&t=DUp4eB8HbmFYyGQaJNrTHCqb0R3JZtAs0E9DAv2wK-4" class="card-img-top" alt="Prateek Humane" />
					<div class="card-body">
						<h5 class="card-title">Prateek Humane</h5>
						<p class="card-text gray">CTO</p>
						<p class="card-text">Smart and lazy, but actively working on the laziness.</p>
						<a href="mailto:prateekhumane@sharedschool.co" class="btn-link">prateekhumane@sharedschool.co</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center row-bottom">
			<div class="column">
				<div class="card">
					<img src="https://picsum.photos/256" class="card-img-top" alt="Rohan Kansagra" />
					<div class="card-body">
						<h5 class="card-title">Rohan Kansagra</h5>
						<p class="card-text gray">VP of Business Development</p>
						<p class="card-text">Gymnast and entrepreneur, giving you both physical and financial flexibility.</p>
						<a href="mailto:rohankansagra@sharedschool.co" class="btn-link">rohankansagra@sharedschool.co</a>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="card">
					<img src="https://media.licdn.com/dms/image/C4D03AQEvfZ15389M3g/profile-displayphoto-shrink_200_200/0?e=1567641600&v=beta&t=8YEy7JKe4b-IqvzMnndX8QNfTsnzzhnOE_k4URycFzc" class="card-img-top" alt="Peter Linder" />
					<div class="card-body">
						<h5 class="card-title">Peter Linder</h5>
						<p class="card-text gray">VP of Engineering</p>
						<p class="card-text">Keeping it fresh since Halloween, 2000.</p>
						<a href="mailto:peterlinder@sharedschool.co" class="btn-link">peterlinder@sharedschool.co</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>
