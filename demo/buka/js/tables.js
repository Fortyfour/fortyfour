//Table coloring
$('.graytab').ready(function(){
	$('.graytab tr:even').addClass('gray_tr');	
	$('.graytab tr:even td').addClass('tbord');
	$('.graytab tr:even td:first-child').addClass('tbord_l');
	$('.graytab tr:even td:last-child').addClass('tbord_r');
});

//Alphabet
$(document).ready(function(){
	$('#alphabet_en').hide();
});

function alphabet(){
	if($('#alphabet_en').css('display') == 'none'){
		$('#alphabet_en').show();
		$('#alphabet_ru').hide();
		$('#alphaber_selector').html('en');
	}else{
		$('#alphabet_en').hide();
		$('#alphabet_ru').show();
		$('#alphaber_selector').html('ru');
	};
};