<?php include('../helper/launcher.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<style>
		#page-content {
			background-image: url("/img/contact-bg.jpg");
			background-size: 100%;
			background-repeat: no-repeat;
			background-position: 0% 50%;
		}
	</style>
</head>
<body class="blue" data-spy="scroll" data-target="#navbar-top" data-offset="0" >

<!-- Navigation bar -->
<?php include '../helper/navbar.php'; ?>

<div id="page-content" style="min-height: 500px">
	<div class="row justify-content-center">
		<div class="col-md-10 deadCenter" style="min-height: 300px">
			<img src="/img/contact-mail.png" height="100" />
			<h1 class="blue-header deadCenter text-center" style="color:white">
				Don't be a stranger! For all inquiries, reach out to us at
				<a href="mailto:contact@sharedschool.co" class="blue-header" style="color:white">contact@sharedschool.co</a>
			</h1>
		</div>
	</div>
</div>

<?php include '../helper/footer.php'; ?>

</body>
</html>
