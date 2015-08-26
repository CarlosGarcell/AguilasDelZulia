$(document).ready(function()
{
	var navbar = $('.mainMenu');
	var originOffsetY = navbar.offset().top;

	console.log("Origin = "+originOffsetY);
	console.log("Window.scrollTop = "+$(window).scrollTop());

	function scroll () {
		if($(window).scrollTop() >= 328) {
			// navbar.hide();
			navbar.addClass('sticky');
			navbar.addClass('mainMenuPadding');
			navbar.removeClass('container');
			console.log("Origin = "+originOffsetY);
			console.log("Window.scrollTop = "+$(window).scrollTop());
		} else {
			// navbar.show();
			navbar.addClass('container');
			navbar.removeClass('sticky');
		}
	}

	document.onscroll = scroll;
});