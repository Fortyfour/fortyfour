$(document).ready(function(){
	$("#menu_1").hover(
		function(){
			$(this).removeClass("menu_1");
			$(this).addClass("menu_1a");
		},
		function(){
			$(this).removeClass("menu_1a");
			$(this).addClass("menu_1");
		}
	);
	
	$("#menu_2").hover(
		function(){
			$(this).removeClass("menu_2");
			$(this).addClass("menu_2a");
		},
		function(){
			$(this).removeClass("menu_2a");
			$(this).addClass("menu_2");
		}
	);
	
	$("#menu_3").hover(
		function(){
			$(this).removeClass("menu_3");
			$(this).addClass("menu_3a");
		},
		function(){
			$(this).removeClass("menu_3a");
			$(this).addClass("menu_3");
		}
	);
	
	$("#menu_4").hover(
		function(){
			$(this).removeClass("menu_4");
			$(this).addClass("menu_4a");
		},
		function(){
			$(this).removeClass("menu_4a");
			$(this).addClass("menu_4");
		}
	);
	
	$("#menu_5").hover(
		function(){
			$(this).removeClass("menu_5");
			$(this).addClass("menu_5a");
		},
		function(){
			$(this).removeClass("menu_5a");
			$(this).addClass("menu_5");
		}
	);
	
	$("#menu_6").hover(
		function(){
			$(this).removeClass("menu_6");
			$(this).addClass("menu_6a");
		},
		function(){
			$(this).removeClass("menu_6a");
			$(this).addClass("menu_6");
		}
	);
	
	$(".submenu").hover(
		function(){
			$(this).css("margin-left","10px");
		},
		function(){
			$(this).css("margin-left","0");
		}
	);
	
	$("#menu_1").click(function(){
		$(this).next().show();
		$("#menu_2, #menu_3, #menu_4, #menu_5, #menu_6").next().hide();
	});	
	$("#menu_2").click(function(){
		$(this).next().show();
		$("#menu_1, #menu_3, #menu_4, #menu_5, #menu_6").next().hide();
	});	
	$("#menu_3").click(function(){
		$(this).next().show();
		$("#menu_2, #menu_1, #menu_4, #menu_5, #menu_6").next().hide();
	});	
	$("#menu_4").click(function(){
		$(this).next().show();
		$("#menu_2, #menu_3, #menu_1, #menu_5, #menu_6").next().hide();
	});	
	$("#menu_5").click(function(){
		$(this).next().show();
		$("#menu_2, #menu_3, #menu_4, #menu_1, #menu_6").next().hide();
	});	
	$("#menu_6").click(function(){
		$(this).next().show();
		$("#menu_2, #menu_3, #menu_4, #menu_5, #menu_1").next().hide();
	});	
});