$(document).ready(function() {
	if ($(window).scrollTop() < $(".first").offset().top - 1) {
		$(".icon").hide();
	}
	updateSlide();
	$(window).scroll(function () {
		updateSlide();
		if ($(window).scrollTop() > $(".first").offset().top - 1) {
			$(".icon").fadeIn();
		} else {
			$(".icon").fadeOut();
		}
	});
	$(".smoothScroll:not(.login, .signup)").click(function(event){
		event.preventDefault();
		var name = $(this).attr("href").substring(1);
		$('html,body').animate({
			scrollTop: $("a[name="+name+"]").offset().top
		}, 500);
	});
		
	function updateSlide(){
		if ($(window).width() > 768) {
			if ($(window).scrollTop() < $(".first").offset().top - 1) {
				$(".one").attr("class","one");
				$(".two").attr("class","two");
				$(".three").attr("class","three");
				$(".four").attr("class","four");
				$(".five").attr("class","five");
				$("hr").css("display", "none")
				$("hr").attr("class","slide");
			} else if ($(window).scrollTop() < $(".second").offset().top - 1) {
				section1Active();
				$("hr").css("display", "block")
				$("hr").attr("class","slide section1");
			} else if ($(window).scrollTop() < $(".third").offset().top - 1) {
				section2Active();
				$("hr").css("display", "block")
				$("hr").attr("class","slide section2");
			} else if ($(window).scrollTop() < $(".fourth").offset().top - 1) {
				section3Active();
				$("hr").css("display", "block")
				$("hr").attr("class","slide section3");
			} else if ($(window).scrollTop() < $(".fifth").offset().top - 1) {
				section4Active();
				$("hr").css("display", "block")
				$("hr").attr("class","slide section4");
			} else {
				section5Active();
				$("hr").css("display", "block")
				$("hr").attr("class","slide section5");
			}
		} else {
			$("hr").css("display", "none")
			if ($(window).scrollTop() < $(".first").offset().top - 1) {
				$(".one").attr("class","one");
				$(".two").attr("class","two");
				$(".three").attr("class","three");
				$(".four").attr("class","four");
				$(".five").attr("class","five");
			} else if ($(window).scrollTop() < $(".second").offset().top - 1) {
				section1Active();
			} else if ($(window).scrollTop() < $(".third").offset().top - 1) {
				section2Active();
			} else if ($(window).scrollTop() < $(".fourth").offset().top - 1) {
				section3Active();
			} else if ($(window).scrollTop() < $(".fifth").offset().top - 1) {
				section4Active();
			} else {
				section5Active();
			}
		}
	}
	function section1Active(){
		$(".one").attr("class","one active");
		$(".two").attr("class","two");
		$(".three").attr("class","three");
		$(".four").attr("class","four");
		$(".five").attr("class","five");
	}
	function section2Active(){
		$(".one").attr("class","one");
		$(".two").attr("class","two active");
		$(".three").attr("class","three");
		$(".four").attr("class","four");
		$(".five").attr("class","five");
	}
	function section3Active(){
		$(".one").attr("class","one");
		$(".two").attr("class","two");
		$(".three").attr("class","three active");
		$(".four").attr("class","four");
		$(".five").attr("class","five");
	}
	function section4Active(){
		$(".one").attr("class","one");
		$(".two").attr("class","two");
		$(".three").attr("class","three");
		$(".four").attr("class","four active");
		$(".five").attr("class","five");
	}
	function section5Active(){
		$(".one").attr("class","one");
		$(".two").attr("class","two");
		$(".three").attr("class","three");
		$(".four").attr("class","four");
		$(".five").attr("class","five active");
	}
	// Sign up functionality
	$(".signup").click(function(){
		// Show sign up modal
		$("#signupModal").modal();
		$(".signup-form").hide();
		$(".signup-1").show();
		//$("#myCarousel").carousel({interval: false});
		$(".signup-btn.signup-teacher").click(function(){
			//$("#myCarousel").carousel("next");
			$(".signup-1").hide("slide", { direction: "up" }, 500);
			$(".signup-form.signup-teacher").show("slide", { direction: "down" }, 500);
		});
		$(".signup-btn.signup-supervisor").click(function(){
			//$("#myCarousel").carousel("next");
			$(".signup-1").hide("slide", { direction: "up" }, 500);
			$(".signup-form.signup-supervisor").show("slide", { direction: "down" }, 500);
		});
		$(".signup-btn.signup-institution").click(function(){
			//$("#myCarousel").carousel("next");
			$(".signup-1").hide("slide", { direction: "up" }, 500);
			$(".signup-form.signup-institution").show("slide", { direction: "down" }, 500);
		});
	});
	// Sign up form
	$("form").attr("action", "/signup.php");
	$("form").attr("method", "POST");
	$("form").on("submit", function(event){
		//event.preventDefault();
		alert("Sign up coming soon, " + this.elements["fullname"].value);
	});
});
