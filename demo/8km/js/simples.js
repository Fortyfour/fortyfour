$(function(){	   
	$('.minibuttons li').not('.active_mb').hover(function(){
		$(this).css('background', 'url(/images/round.gif) no-repeat top');
	}, function(){
		$(this).css('background', 'none');
	});
});