$(document).ready(function() {
	$(".nav-link").click(function(event){
		event.preventDefault();
		var name = $(this).attr("href").substring(2);
		var height = $("a[name="+name+"]").offset().top - $("#navbar-top").height() - 15;
		if (name == "home") height = 0;
		$('html,body').animate({
			scrollTop: height
		}, 500);
	});
	$(".demo-btn").click(function(){
		alert("Demos coming soon");
	});
});
