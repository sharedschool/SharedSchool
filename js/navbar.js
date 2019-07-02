$(document).ready(function() {
	// Nav bar smooth scroll
	$(".smoothscroll").click(function(event){
		event.preventDefault();
		var name = $(this).attr("href").substring(2);
		var height = $("a[name="+name+"]").offset().top - $("#navbar-top").height() - 15;
		if (name == "home") height = 0;
		$('html,body').animate({
			scrollTop: height
		}, 500);
	});
	// Sign up functionality
	$("#signup-btn").click(function(){
		// Show sign up modal
		$("#signupModal").modal('show');
		$(".signup-btn.signup-teacher").click(function(){
			$("#signupModal").modal('hide');
			$("#signupModal-teacher").modal('show');
		});
		$(".signup-btn.signup-administrator").click(function(){
			$("#signupModal").modal('hide');
			$("#signupModal-administrator").modal('show');
		});
		$(".signup-btn.signup-institution").click(function(){
			$("#signupModal").modal('hide');
			$("#signupModal-institution").modal('show');
		});
	});
	// Sign up form
	$(".signup-form > form").attr("action", "/handlers/signup_form.php");
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
	$(".login-form > form").attr("action", "/handlers/login_form.php");
	$(".login-form > form").attr("method", "POST");
	
	// Logout
	$("#logout-btn").click(function(){
		location.href = "/handlers/logout.php";
	});

	$('li.nav-item.dropdown, li.dropright').hover(function(){
		$(this).find('a.dropdown-toggle').first().next('ul.dropdown-menu').show();
	}, function(){
		$(this).find('a.dropdown-toggle').first().next('ul.dropdown-menu').hide();
	});
	$('li.nav-item.dropdown a:not(.coming-soon)').click(function(){
		location.href = $(this).attr('href');
	});
	
	$('.coming-soon').click(function(event){
		event.preventDefault();
		$('#soonModal').modal('show');
	});
});
