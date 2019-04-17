$(document).ready(function() {
	$('li.nav-item.dropdown, li.dropright').hover(function(){
		$(this).find('a.dropdown-toggle').first().next('ul.dropdown-menu').show();
	}, function(){
		$(this).find('a.dropdown-toggle').first().next('ul.dropdown-menu').hide();
	});
	$('li.nav-item.dropdown a').click(function(){
		location.href = $(this).attr('href');
	});
});