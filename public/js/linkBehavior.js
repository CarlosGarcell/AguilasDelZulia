$('.homeMenu a').click(function()
{
	$("a[class='active-link']").removeClass();

	$(this).addClass('active-link');
});