$('div.base').click(function()
{
	if($(this).hasClass('fullBase')) {
		$(this).removeClass('fullBase');
	}
	else {
		$(this).addClass('fullBase');
	}
});