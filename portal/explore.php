<?php
	session_start();
	if (!isset($_SESSION['type'])) header('Location: /');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Explore | SharedSchool</title>
	<?php include '../helper/includes.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/portal.css" />
	<script type="text/javascript" src="/js/portal.js"></script>
</head>
<body>

<!-- Navigation bar -->
<?php include '../helper/portal_navbar.php'; ?>

<!-- Landing portal thing -->
<div id="carouselPortal" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/img/explore-landing.png" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block landing-content">
				<p><h1>Find the educational materials you need.</h1></p>
				<div class="search-container">
					<form action="/portal/search.php" method="GET">
						<div class="form-group inner-addon right-addon">
							<span class="glyphicon glyphicon-search"></span>
							<input type="text" name="query" class="form-control" id="searchbox" placeholder="Search for anything" onkeyup="suggestedResults(this.value)"/>
							<!--<div class="container" style="position:absolute;padding:0">
								<div class="row" style="border-style: solid;/*border-color: rgb(206, 212, 218);*/border-width: 1px; background-color:white; color: rgb(240,66,100);height:calc(1.5em + .75rem + 2px);margin:0;">
									<div class="col text-left my-auto">math</div>
									<div class="col text-right mx-3 my-auto">category</div>
								</div>	
								<div class="row" style="border-style: solid;/*border-color: rgb(206, 212, 218);*/border-width: 1px; background-color:white; color: rgb(28,277,87);height:calc(1.5em + .75rem + 2px);margin:0;">
									<div class="col text-left my-auto">microscope</div>
									<div class="col text-right mx-3 my-auto">product</div>
								</div>	
								<div class="row" style="border-style: solid;/*border-color: rgb(206, 212, 218);*/border-width: 1px; background-color:white; color: rgb(3,158,252);height:calc(1.5em + .75rem + 2px);margin:0;">
									<div class="col text-left my-auto">Microscope RB50</div>
									<div class="col text-right mx-3 my-auto">model</div>
								</div>	
							</div>	-->
						</div>
						<div class="search-filters">
						
							<div class="form-group">
								<select name="price-range" class="form-control" id="priceRangeSelect">
									<option selected disabled value="NULL">Price Range</option>
									<option value="0-99">$0 to $99</option>
									<option value="100-499">$100 to $499</option>
									<option value="500-1000">$500 to $1000</option>
									<option value=">1000">&gt; $1000</option>
									<option value="Any">Any price</option>
								</select>
							</div>
							
							<div class="form-group">
								<select name="location" class="form-control" id="locationSelect">
									<option selected disabled value="NULL">Location</option>
									<option value="10">Within 10 miles</option>
									<option value="50">Within 50 miles</option>
									<option value="100">Within 100 miles</option>
									<option value="Any">Any distance</option>
								</select>
							</div>
							
							<div class="form-group">
								<select name="subject" class="form-control" id="subjectSelect">
									<option selected disabled value="NULL">Subject</option>
									<option>Math</option>
									<option>Science</option>
									<option>English</option>
									<option value="Any">Any subject</option>
								</select>
							</div>
							
							<div class="form-group">
								<select name="institution" class="form-control" id="institutionSelect">
									<option selected disabled value="NULL">Institution Type</option>
									<option>Private</option>
									<option>Public</option>
									<option value="Any">Any type</option>
								</select>
							</div>
							
						</div>
						
						<div class="form-group" style="margin-top: 15px;">
							<button type="submit" class="btn btn-light">Search</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="page-content">
	<div>
		<div class="row justify-content-center">
			<div class="col-md-10 text">
				<h1 class="display-4 alignCenter">Browse Categories</h2>
				<p class="alignCenter">
					The most popular categories on the portal
				</p>
				<table id="categories">
					<tr>
						<td>
							<img src="/img/glyph/desktop.png" />
							<h6>Electronics</h6>
						</td>
						<td>
							<img src="/img/glyph/microscope.png" />
							<h6>Lab Equipment</h6>
						</td>
						<td>
							<img src="/img/glyph/textbook.png" />
							<h6>Textbooks</h6>
						</td>
						<td>
							<img src="/img/glyph/microphone.png" />
							<h6>Entertainment</h6>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

</body>
</html>