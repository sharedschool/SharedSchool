$(document).ready(function() {
	updateSlide();
	function updateSlide(){
		if ($(window).width() > 768) {
			$("hr").css("display", "block");
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
});
