<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home | SharedSchool</title>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/home.css">
	<link rel="stylesheet" href="/js/jquery-ui-1.12.1/jquery-ui.css">
	<!--<link rel="stylesheet" href="/https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">-->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<script src="/js/jquery-ui-1.12.1/jquery-ui.js"></script>
	<script src="/js/script.js"></script>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-md navbar-dark darkblue">
		<div class="navbar-brand icon">
			<a class="smoothScroll" href="#home">
				<img src="/img/icon_light.png" width="35" height="35">
				SharedSchool
			</a>
		</div>
		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar top-bar"></span>
			<span class="icon-bar middle-bar"></span>
			<span class="icon-bar bottom-bar"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item one">
					<a class="nav-link smoothScroll" href="#section1">About</a>
				</li>
				<li class="nav-item two">
					<a class="nav-link smoothScroll" href="#section2">FAQ</a>
				</li>
				<li class="nav-item three">
					<a class="nav-link smoothScroll" href="#section3">Contact Us</a>
				</li>
				<li class="nav-item four">
					<a class="nav-link smoothScroll login" href="#section4">Login</a>
				</li>
				<li class="nav-item five">
					<a class="nav-link smoothScroll signup" href="#section5">Sign Up</a>
				</li>
				<hr class="slide">
			</ul>
		</div>
	</nav>
	<a name="home"></a>
	<div class="container-fluid home deadCenter lightblue alignCenter">
		<img class="logo" src="/img/banner.png" alt="SharedSchool">
		<!--<a href="#section2" class="smoothScroll"><button type="button" class="btn btn-lg lightgreen getstarted">Building a sharing economy for education</button></a>-->
		<div class="slogan">Building a new shared economy for education</div>
	</div>
	<div class="container-fluid">
		<a class="anchor first"	name="section1"></a>
		<div class="row justify-content-center">
			<div class="col-md-4 deadCenter text">
				<img class="img-fluid" src="/img/SS_hp_graphic.png" width="450">
			</div>
			<div class="col-md-6 text">
				<h1 class="display-4 alignCenter adjustLeft">About</h1>
				<p>
					SharedSchool is a software platform that allows schools to buy, rent, and sell
					specialized educational materials. SharedSchool connects primary/secondary schools
					with surplus materials to primary/secondary schools needing materials. Using a novel
					matching algorithm, SharedSchool creates a convenient shared economy and marketplace
					where institutions can trade and rent specialized materials to each other.
				</p>
			</div>
		</div>
		<a class="anchor second" name="section2"></a>
		<div class="row justify-content-center gray">
			<div class="col-md-10 text faq_qs">
				<h1 class="display-4 alignCenter">FAQ</h1>
				<h4>Why choose SharedSchool?</h4>
				<p>Because we're new and new is better. Next question?</p>
				<h4> Who uses SharedSchool? </h4>
				<p>Educational institutions, namely primary and secondary schools, media centers and libraries currently use SharedSchool. In the future, individual users will use the SharedSchool distribution network.</p>
				<h4>What is the cost of a SharedSchool account?</h4>
				<p> Nothing! SharedSchool is free. </p>
			</div>
		</div>
		<a class="anchor third" name="section3"></a>
		<div class="row justify-content-center">
			<div class="col-md-10 text">
				<h1 class="display-4 alignCenter">Contact Us</h1>
				<p align="center">If you have any questions, please contact us at <b><a href="/mailto:sharedschool1@gmail.com" class="email">sharedschool1@gmail.com</a></b>.</p>
			</div>
		</div>
		<!--<a class="anchor fifth" name="speakers"></a>
		<div class="row justify-content-center">
			<div class="col-md-10 text">
				<h1 class="display-4 alignCenter">Speakers</h1>
					 <div class="row justify-content-center">
							<div class="col-md-10 text">
								<h4> Structure of the Day </h4>
								<p>There are two main components to the event: free coding time and workshops. At any point throughout the day, groups can work on programming their own project or developing an idea and plan for a programming project, which can then be judged at the end and possibly be awarded prizes. This hackathon is themed around educational technology, so projects should focus on how technology can improve education. Occurring at the same time are workshops, which you can attend to learn more about some topic in computer science, including learning how to program if you don’t know how.</p>
								<p>You can choose to allocate your time however you wish, whether it is competing, learning, or just tinkering around with something. Often, there will be multiple workshops happening at the same time; there is a schedule below listing all of the workshops, and includes a brief description of each, as well as a guide for how to spend the day depending on your experience with programming. Also below is a diagram for you to visualize the entire schedule.</p>
								<p>Note that there are a few general events that everyone attends at the same time, listed below</p>
							</div>
					</div>
					<div class="alignCenter">
						 <h4> Speaker 1 </h4>
						 <img class="img-fluid" src="/general events.png" width="400"> <br/>
						 <br/>
						 <br/>
						 <h4> Speaker 2 </h4>
						 <img class="img-fluid" src="/workshop 1.png" width="400">
					</div>
			</div>
		</div>-->
		<?php /*include('./helpers/footer.php');*/ ?>
	</div>
	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>-->
	<!-- Modal -->
	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Sign up for SharedSchool now!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="text-align:center">
					<div class="signup-1">
						<p>Sign up as:</p>
						<div>
							<button type="button" class="btn btn-primary signup-btn signup-teacher">Teacher</button>
							<button type="button" class="btn btn-secondary signup-btn signup-supervisor">Supervisor</button>
							<button type="button" class="btn btn-success signup-btn signup-institution">Institution</button>
						</div>
					</div>
					<div class="signup-form signup-teacher">
						<form>
							<div class="form-group">
								<label for="name">Full name</label>
								<input type="text" class="form-control" name="fullname" placeholder="e.g. John Doe">
							</div>
							<div class="form-group">
								<label for="email">Email address (preferably institution)</label>
								<input type="email" class="form-control" namr="email" aria-describedby="emailHelp" placeholder="e.g. jdoe@school.org">
							</div>
							<div class="form-group">
								<label for="password1">Password</label>
								<input type="password" class="form-control" name="password1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="password2">Confirm password</label>
								<input type="password" class="form-control" name="password2" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="subject">Subject taught</label>
								<select class="form-control" name="subject">
									<option selected disabled>Select a subject</option>
									<option>Math</option>
									<option>Physics</option>
									<option>Chemistry</option>
									<option>Biology</option>
									<option>English</option>
									<option>History</option>
									<option>Spanish</option>
								</select>
							</div>
							<div class="form-group">
								<label for="institution">Institution</label>
								<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="signup-form signup-supervisor">
						<form>
							<div class="form-group">
								<label for="name">Full name</label>
								<input type="text" class="form-control" name="fullname" placeholder="e.g. John Doe">
							</div>
							<div class="form-group">
								<label for="email">Email address (preferably institution)</label>
								<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. jdoe@school.org">
							</div>
							<div class="form-group">
								<label for="password1">Password</label>
								<input type="password" class="form-control" name="password1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="password2">Confirm password</label>
								<input type="password" class="form-control" name="password2" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="dept">Department</label>
								<select class="form-control" name="dept">
									<option selected disabled>Select a department</option>
									<option>Math</option>
									<option>Science</option>
									<option>Foreign Language</option>
									<option>English</option>
									<option>History</option>
								</select>
							</div>
							<div class="form-group">
								<label for="subject">Subjects taught (if applicable</label>
								<select multiple class="form-control" name="subject">
									<option selected disabled>Select subjects</option>
									<option>Math</option>
									<option>Physics</option>
									<option>Chemistry</option>
									<option>Biology</option>
									<option>English</option>
									<option>History</option>
									<option>Spanish</option>
								</select>
							</div>
							<div class="form-group">
								<label for="institution">Institution</label>
								<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="signup-form signup-institution">
						<form>
							<div class="form-group">
								<label for="name">Institution name</label>
								<input type="text" class="form-control" name="institution" placeholder="e.g. Metropolis High School">
							</div>
							<div class="form-group">
								<label for="email">Institution email address</label>
								<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="e.g. board@school.org">
							</div>
							<div class="form-group">
								<label for="password1">Password</label>
								<input type="password" class="form-control" name="password1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="password2">Confirm password</label>
								<input type="password" class="form-control" name="password2" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="students">Approximate student enrollment</label>
								<input type="number" class="form-control" name="students" placeholder="e.g. 1500">
							</div>
							<div class="form-group">
								<label for="level">School level</label>
								<select class="form-control" name="level">
									<option selected disabled>Select a level</option>
									<option>Elementary</option>
									<option>Middle / Junior High</option>
									<option>High School (9-12)</option>
									<option>Other</option>
								</select>
							</div>
							<div class="form-group">
								<label for="type">School level</label>
								<select class="form-control" name="type">
									<option selected disabled>Select a type</option>
									<option>Public</option>
									<option>Private</option>
									<option>Other</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>