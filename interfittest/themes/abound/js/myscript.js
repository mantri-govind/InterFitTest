$(document).ready(function(e) {
	$(".slider img:first").css(1000);
});


	var interval = setInterval(slideNow,3000);
	var a = 0;
	function slideNow()
	{
			a++;
			if( a == 1 )
			{
				$("#a").fadeIn(200);
				$("#b").fadeOut(200);
				$("#c").fadeOut(200);
			}
			else if( a == 2 )
			{
				$("#a").fadeOut(200);
				$("#b").fadeIn(200);
				$("#c").fadeOut(200);
			}
			else if( a == 3 )
			{
				$("#a").hide(200);
				$("#b").fadeOut(1000);
				$("#c").fadeIn(200);
				a = 1;
			}
			else
			{
			}
	}
