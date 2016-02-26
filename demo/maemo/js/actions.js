$(function(){
	$('.main_menu_btn').hover(function(){
		$(this).parent().next().css('display', '');
	},function(){
		$(this).parent().next().css('display', 'none');
	})
	Cufon.replace('.nokia_font');
	Cufon.replace('.h_more_gray');
});

