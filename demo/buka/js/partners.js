//Partners
function hidearrows(){
	var pchild = document.getElementById('pchild');	
	if (pchild.style.marginLeft == '0px'){
		$('#lp').hide();
		$('#lp_m').show();
	};
	
	if (pchild.style.marginLeft == '-548px'){
		$('#rp').hide();
		$('#rp_m').show();
	};
};

$(document).ready(function(){	
	var pchild = document.getElementById('pchild');	
	var mlunc = pchild.style.marginLeft;
	var mlc = mlunc.substr(0,mlunc.length-2)*1;
	var temp = mlc;
	$('#lp').click(function(){
		temp+=137
			if(temp<0){
			$('#pchild').animate({ marginLeft: '+=137px' }, 400, 'swing', function(){hidearrows();});
			$('#rp').show();
			$('#rp_m').hide();
		}else{
			$('#pchild').animate({ marginLeft: '0px' }, 400, 'swing', function(){hidearrows();});
			temp=0
			$('#lp').hide();
			$('#lp_m').show();
		}
	});
	$('#rp').click(function(){	
							
		temp-=137;
		if(temp>-548){
			$('#pchild').animate({ marginLeft: '-=137px' }, 400, 'swing', function(){hidearrows();});
			$('#lp').show();
			$('#lp_m').hide();
		}else{
			$('#pchild').animate({ marginLeft: '-548px' }, 400, 'swing', function(){hidearrows();});
			temp=-548;
			$('#rp').hide();
			$('#rp_m').show();
		}
	});
});