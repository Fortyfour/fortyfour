/* Sliding news menu */
$(document).ready(function(){
						   
	var curr = document.getElementById('current_sn'); 
	var top = $('#slider');
	var height = 28; //Item height
	var speed = 260; //Animation speed
	var corr = 14; //Correcting int
	var fadespeed = 150;

	/* Open\close */
	$('.current_sn').click(function(){
		top.fadeIn(fadespeed);
	});
	top.hover(
		function(){},
		function(){top.fadeOut(fadespeed);}
	);

	/* Items */
	$('#item1').click(function(){
		curr.innerHTML = $(this).html();	
		top.animate({marginTop: "-" + (height*1-corr) + "px"},speed, function(){
			top.fadeOut(fadespeed); 
		});
	});

	$('#item2').click(function(){
		curr.innerHTML = $(this).html();
		top.animate({marginTop: "-" + (height*2-corr) + "px"},speed, function(){
			top.fadeOut(fadespeed); 
		});
	});

	$('#item3').click(function(){
		curr.innerHTML = $(this).html();
		top.animate({marginTop: "-" + (height*3-corr) + "px"},speed, function(){
			top.fadeOut(fadespeed); 
		});
	});

	$('#item4').click(function(){
		curr.innerHTML = $(this).html();
		top.animate({marginTop: "-" + (height*4-corr) + "px"},speed, function(){
			top.fadeOut(fadespeed); 
		});
	});

	$('#item5').click(function(){
		curr.innerHTML = $(this).html();
		top.animate({marginTop: "-" + (height*5-corr) + "px"},speed, function(){
			top.fadeOut(fadespeed); 
		});
	});
});