var map_points = new Array();
//piont y, point x, map y, map x, text

/*map_points[0] = new Array(
	324, 1064, -270, -1100, "<b>SCITECH Tower</b>, 22, Jianguomenwai Dajie, Beijing, China, 100004<br />Тел./Факс: +86 (10) 85118895, 85118896, 65150856, 65158522"
);*/

map_points[0] = new Array(
	142, 705, -76, -700, "<b>Котка</b>"
);

map_points[1] = new Array(
	146, 720, -80, -710, "<b>Санкт-Петербург</b>"
);

map_points[2] = new Array(
	168, 765, -100, -760, "<b>Москва</b><br />Москва, МКАД, 8-ой км, Торговый центр «Косино Плаза», <br />Тел.: +7 (495) 796-44-66."
);

map_points[3] = new Array(
	161, 880, -96, -860, "<b>Екатеринбург</b>"
);

map_points[4] = new Array(
	181, 948, -120, -925, "<b>Новосибирск</b>"
);

map_points[5] = new Array(
	241, 956, -180, -930, "<b>Урумчи</b>"
);

map_points[6] = new Array(
	212, 1135, -162, -1113, "<b>Хабаровск</b>"
);

map_points[7] = new Array(
	257, 1073, -200, -1052, "<b>Пекин</b><br />Office No. 509, Kuntai International Mansion Building 1, Yi No.12 Chao Wai Street, Chao Yang District, Beijing, Post: 100020."
);

map_points[8] = new Array(
	217, 1130, -157, -1108, "<b>Тунзянь</b>"
);

map_points[9] = new Array(
	240, 1130, -180, -1108, "<b>Владивосток</b>"
);


var target;

function showPointText(){
	var obj = $('#map_point');
	obj.find('.point_text .pt_inner').html(target[4]);
	obj.find('.point_text').stop().animate({ width: 50 }, 0);
	obj.find('.point_text').stop().animate({ width: 360 }, 400);
};

function jumpPoint(){
	var pointX = target[1];
	var pointY = target[0];
	
	var obj = $('#map_point');
	
	obj.css('margin', pointY+'px 0 0 '+pointX+'px');
	
	obj.find('.point_img').stop().animate({ marginTop: '-100px'}, { duration: 0 });
	obj.find('.point_img').stop().animate({ marginTop: '0'}, { duration: 800, easing: 'easeOutBounce' }, showPointText());
};

function moveMap(num){
	target = map_points[num];
	
	var mapX = target[3];
	var mapY = target[2];
	//var pointX = target[1];
	//var pointY = target[0];
	
	var obj = $('.map_inner');
	obj.stop().animate({ marginTop: mapY, marginLeft: mapX}, { duration: 700, easing: 'easeInOutCubic' }, setTimeout('jumpPoint()', 500));
};

$(function(){
	$(".map_clicker").not('.ms_active_li').hover(function(){
		$(this).addClass('ms_hover_li');
	}, function(){
		$(this).removeClass('ms_hover_li');
	});	   
	
	$(".map_clicker").click(function(){
		$(".map_clicker").removeClass('ms_active_li');				 
		$(this).addClass('ms_active_li');
		if($('.map_selector').attr('identify') != $(this).attr('identify')){
			moveMap($(this).attr('identify'));
			$('.map_selector').attr('identify', $(this).attr('identify'));
		};
	});
});