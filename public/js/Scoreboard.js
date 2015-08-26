// Bases behavior
$('div.base').click(function()
{
	if($(this).hasClass('fullBase')) {
		$(this).removeClass('fullBase');
	}
	else {
		$(this).addClass('fullBase');
	}
});

// Outs
$('.outs li').click(function()
{
	if($(this).hasClass('outsChecked')) {
		$(this).removeAttr('class');
	}
	else {
		$(this).addClass('outsChecked');
	}
});

// Balls and Strikes
$('.balls-Strikes #circle').click(function()
{
	if($(this).hasClass('checked')) {
		$(this).removeAttr('class');
	}
	else {
		$(this).addClass('checked');
	}
});