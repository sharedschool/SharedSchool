$(document).ready(function() {
	$('a.dropdown-submenu').on("click", function(e){
		$(this).next('ul').toggle();
		e.stopPropagation();
		e.preventDefault();
	});
});