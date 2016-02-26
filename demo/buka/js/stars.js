//Ratings
$(document).ready(function(){
	$('#st_rate1').hover(function(){
		$('#st_rate1').addClass('star_a');
	},function(){
		$('#st_rate1').removeClass('star_a');
	});
	
	$('#st_rate2').hover(function(){
		$('#st_rate1, #st_rate2').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2').removeClass('star_a');
	});
	
	$('#st_rate3').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3').removeClass('star_a');
	});
	
	$('#st_rate4').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4').removeClass('star_a');
	});
	
	$('#st_rate5').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5').removeClass('star_a');
	});
	
	$('#st_rate6').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6').removeClass('star_a');
	});
	
	$('#st_rate7').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7').removeClass('star_a');
	});
	
	$('#st_rate8').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8').removeClass('star_a');
	});
	
	$('#st_rate9').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9').removeClass('star_a');
	});
	
	$('#st_rate10').hover(function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').addClass('star_a');
	},function(){
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a');
	});
	
	/* -------------------------------------- send ---------------------------------------- */
	$('#st_rate1').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate1 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1').addClass('star_a_perm');
	});
	$('#st_rate2').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate2 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2').addClass('star_a_perm');
	});
	$('#st_rate3').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate3 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3').addClass('star_a_perm');
	});
	$('#st_rate4').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate4 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4').addClass('star_a_perm');
	});
	$('#st_rate5').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate5 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5').addClass('star_a_perm');
	});
	$('#st_rate6').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate6 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6').addClass('star_a_perm');
	});
	$('#st_rate7').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate7 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7').addClass('star_a_perm');
	});
	$('#st_rate8').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate8 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8').addClass('star_a_perm');
	});
	$('#st_rate9').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate9 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9').addClass('star_a_perm');
	});
	$('#st_rate10').click(function(){
		valuetosend = document.getElementById('valuetosend').value = $('#st_rate10 span').html();
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').removeClass('star_a_perm');
		$('#st_rate1, #st_rate2, #st_rate3, #st_rate4, #st_rate5, #st_rate6, #st_rate7, #st_rate8, #st_rate9, #st_rate10').addClass('star_a_perm');
	});
});