$(document).ready(function() {
	// Sign up functionality
	$("#signup-btn").click(function(){
		// Show sign up modal
		$("#signupModal").modal('show');
		$(".signup-btn.signup-teacher").click(function(){
			$("#signupModal").modal('hide');
			$("#signupModal-teacher").modal('show');
		});
		$(".signup-btn.signup-supervisor").click(function(){
			$("#signupModal").modal('hide');
			$("#signupModal-supervisor").modal('show');
		});
		$(".signup-btn.signup-institution").click(function(){
			$("#signupModal").modal('hide');
			$("#signupModal-institution").modal('show');
		});
	});
	// Sign up form
	$(".signup-form > form").attr("action", "/signup_form.php");
	$(".signup-form > form").attr("method", "POST");
	$(".signup-form > form").on("submit", function(event){
		event.preventDefault();
		// TODO: Validate form input
		$(this)[0].submit();
	});
	
	// Login functionality
	$("#login-btn").click(function(){
		$("#loginModal").modal('show');
	});
	$(".login-form > form").attr("action", "/login_form.php");
	$(".login-form > form").attr("method", "POST");
	
	// Logout
	$("#logout-btn").click(function(){
		location.href = "/logout.php";
	});
});