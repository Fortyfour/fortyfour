//Panel
$('.opened_panel').ready(function(){
	$('.opened_panel table tr:even').css('background','#f0f0f0');
});

$('.opened_panel').ready(function(){
	$('#ph2_p').css('display', 'none');
	$('#ph3_p').css('display', 'none');
	$('#ph4_p').css('display', 'none');
});

$(document).ready(function(){	
	
	$('#scr1').jScrollPane();
	
	var animation_speed = 450;
	
	$('#ph1').click(function(){
		//Self
		$('#ph1').removeClass('p_header1_off');
		$('#ph1').addClass('p_header1_on');
		$('#ph1_p').show();
		
		//Others
		$('#ph2_p').hide();
		$('#ph2').removeClass('p_header2_on');
		$('#ph2').addClass('p_header2_off');
		
		$('#ph3_p').hide();
		$('#ph3').removeClass('p_header3_on');
		$('#ph3').addClass('p_header3_off');
		
		$('#ph4_p').hide();
		$('#ph4').removeClass('p_header4_on');
		$('#ph4').addClass('p_header4_off');
	});
	
	$('#ph2').click(function(){
		//Self
		$('#ph2').removeClass('p_header2_off');
		$('#ph2').addClass('p_header2_on');
		$('#ph2_p').show();
		$('#scr2').jScrollPane();
		
		//Others
		$('#ph1_p').hide();
		$('#ph1').removeClass('p_header1_on');
		$('#ph1').addClass('p_header1_off');
		
		$('#ph3_p').hide();
		$('#ph3').removeClass('p_header3_on');
		$('#ph3').addClass('p_header3_off');
		
		$('#ph4_p').hide();
		$('#ph4').removeClass('p_header4_on');
		$('#ph4').addClass('p_header4_off');
	});
	
	$('#ph3').click(function(){
		//Self
		$('#ph3').removeClass('p_header3_off');
		$('#ph3').addClass('p_header3_on');
		$('#ph3_p').show();
		$('#scr3').jScrollPane();
		
		//Others
		$('#ph1_p').hide();
		$('#ph1').removeClass('p_header1_on');
		$('#ph1').addClass('p_header1_off');
		
		$('#ph2_p').hide();
		$('#ph2').removeClass('p_header2_on');
		$('#ph2').addClass('p_header2_off');
		
		$('#ph4_p').hide();
		$('#ph4').removeClass('p_header4_on');
		$('#ph4').addClass('p_header4_off');
	});
	
	$('#ph4').click(function(){
		//Self
		
		$('#ph4').removeClass('p_header4_off');
		$('#ph4').addClass('p_header4_on');
		$('#ph4_p').show();
		$('#scr4').jScrollPane();
		
		//Others
		$('#ph1_p').hide();
		$('#ph1').removeClass('p_header1_on');
		$('#ph1').addClass('p_header1_off');
		
		$('#ph2_p').hide();
		$('#ph2').removeClass('p_header2_on');
		$('#ph2').addClass('p_header2_off');
		
		$('#ph3_p').hide();
		$('#ph3').removeClass('p_header3_on');
		$('#ph3').addClass('p_header3_off');
	});
	
});