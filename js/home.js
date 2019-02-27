$(document).ready(function() {
	$(".nav-link").click(function(event){
		event.preventDefault();
		var name = $(this).attr("href").substring(1);
		$('html,body').animate({
			scrollTop: $("a[name="+name+"]").offset().top
		}, 500);
	});
});
