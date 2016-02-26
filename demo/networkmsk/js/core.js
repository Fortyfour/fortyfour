var search = {
	init: function(){
		var menu_items = $('.main-menu nav a').length,
			menu_padding = parseInt($('.main-menu nav a').css('padding-left')),
			wide_addition = menu_items * 12,
			search_width = 275;
	
		$('.search .text').on('focus', function(){
			$('.search').animate({
				width: wide_addition + search_width
			}, 150);
			
			$('.search .text').css({
				width: wide_addition + search_width - 60
			}, 100);
			
			$('.main-menu nav a').animate({
				padding: '0 10px'
			}, 50);
		});
		
		$('.search .text').on('blur', function(){
			$('.search').animate({
				width: search_width
			}, 150);
			
			$('.search .text').css({
				width: search_width - 60
			}, 100);
			
			$('.main-menu nav a').animate({
				padding: '0 ' + menu_padding + 'px'
			}, 50);
		});
	}
};

var core = {
    init: function(){
    	search.init();
    }
};



$(function() {
    core.init();
});