var slider = {
    showPage: function (page) {
        this.page = parseInt(page);
        
        $('.slider .panel .page').removeClass('active');
        $('.slider .panel .page:eq(' + page + ')').addClass('active');

        $('.slider .slider-container').css({
            top: -(page * 360)
        });

        $('.slider').css({
            backgroundPosition: '0 -' + (page * 100) + 'px'
        }, 700);

        setTimeout(function () {
            $('.slider .slider-container .slide').find('.left.ready, .central.ready, .right.ready, h1.ready, .button.ready').removeClass('ready');

            var $current = $('.slider .slider-container .slide:eq(' + page + ')');

            $current.find('.left, .central, .right, h1, .button').addClass('ready');
        }, 450);

        this.pause();

        setTimeout(function(){
            slider.start();
        }, 700);
    },

    interval: null,
    stm: null,
    page: 0,

    nextPage: function () {
        var page;

        if (this.page == this.items_count - 1) {
            page = 0;
        } else {
            page = parseInt(this.page) + 1;
        }

        this.showPage(page);
    },

    start: function () {    
    	$('.slider .progress-bar').addClass('animated').css({
    		width: '100%'
    	});
    	
    	$('.slider .progress-bar-container').css({
    		opacity: 1
    	});
    
        clearInterval(this.interval);
        clearTimeout(this.stm);
        
        this.interval = setInterval(function () {
            slider.nextPage();
        }, 10000);
    },

    pause: function () {
        clearInterval(this.interval);
        
        $('.slider .progress-bar-container').css({
        	opacity: 0
        });
       	
       	$('.slider .progress-bar').removeClass('animated').css({
       		width: 0
       	});
    },

    init: function () {
        this.items_count = $('.slider .slide').length;
        
        this.start();

        $('.slider .slider-container, .slider .panel').on('mouseenter', function () {
            slider.pause();
        });

        $('.slider .slider-container, .slider .panel').on('mouseleave', function () {
            slider.start();
        });

        $('.slider .slider-container .slide:eq(0) .content').addClass('ready');

        $('.slider .panel .page').on('click', function (e) {
            e.preventDefault();
            slider.showPage($(this).attr('rel'));
        });
    }
};

var mobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i) ? true : false;
    },

    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
    },

    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
    },

    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) ? true : false;
    },

    any: function() {
        return (this.Android() || this.BlackBerry() || this.iOS() || this.Windows());
    },

    init: function(){
        if(this.any()){
            $('body').addClass('mobile');
        }
    }
};

var map = {
    init: function(){
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                center: [55.634697, 37.439085],
                zoom: 12,
                controls: [
                    new ymaps.control.RouteEditor(),
                    new ymaps.control.ZoomControl(),
                    new ymaps.control.TrafficControl({providerKey: 'traffic#archive'}),
                    new ymaps.control.TypeSelector()
                ]
            });

            var myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                balloonContentBody: [
                    '<address>',
                    '<strong>Офис Fortyfour</strong>',
                    '<br/>',
                    'Москва, деревня Румянцево,<br>БП &laquo;Румянцево&raquo;, строение 1, корпус Б, офис 525-Б',
                    '<br/>',
                    '</address>'
                ].join('')
            }, {
                preset: 'islands#redDotIcon'
            });

            myMap.geoObjects.add(myPlacemark);
        });
    }
};

var contacts = {
	embedded: false,
    close_timeout: null,

    processForm: function(){
        $('input[name="cf-name"], input[name="cf-cont"], textarea[name="cf-mess"]').removeClass('input-error');

        var name = $('input[name="cf-name"]').val(),
            cont = $('input[name="cf-cont"]').val(),
            mess = $('textarea[name="cf-mess"]').val();

        if(!name && !cont && !mess){
            $('#contacts-feedback-form .right-error').html('Пустая форма');

            core.blink($('#contacts-feedback-form .right-error'));
        }else{
            if(!name || !cont || !mess){

                if(!name){
                    $('input[name="cf-name"]').addClass('input-error');
                }

                if(!cont){
                    $('input[name="cf-cont"]').addClass('input-error');
                }

                if(!mess){

                    $('textarea[name="cf-mess"]').addClass('input-error');
                }

                $('#contacts-feedback-form .right-error').html('Все поля необходимы');
                core.blink($('#contacts-feedback-form .right-error'));

            }else{
                $.ajax({
                    url: '/send.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        name: name,
                        cont: cont,
                        mess: mess
                    },
                    success: function (data) {
                        $('#contacts-feedback-form .fields').css({
                            opacity: 0
                        });

                        $('#contacts-feedback-form .success-message-inline').addClass('complete');
                        $('#contacts-feedback-form .success-message-inline h3').html('Спасибо за ваше внимание!');
                        $('#contacts-feedback-form .success-message-inline span.wonderful').html('Мы обязательно с вами свяжемся.').addClass('complete');
                        $('#contacts-feedback-form .success-message-inline span.stars').addClass('complete');

                        if(contacts.embedded === false){
                            contacts.close_timeout = setTimeout(function(){
                                common_feedback.hide();
                            }, 3000);
                        }
                    }
                });
            }
        }
    },

    bind: function(){
        $('#contacts-feedback-form').off('submit').on('submit', function(e){
            contacts.processForm();
            e.preventDefault();
        });
    },

    init: function(embedded){
    	this.embedded = embedded;
        this.bind();
    }
};

var portfolio = {
    trackPreview: function(offset_y, $vp){
        var $img = $vp.find('img'),
            vp_height = $vp.height(),
            vp_image_height = $img.height();

        if(vp_image_height > vp_height){
            var cp = offset_y / (vp_height / 100),
                margin = vp_image_height - vp_height,
                mp = (margin / 100) * cp;

            $vp.find('img').stop().css({
                marginTop: -mp
            });
        }
    },

    trackPreviewsBind: function(){
        $('.portfolio .item.browser .viewport').on('mousemove', function(e){
            portfolio.trackPreview(e.pageY - $(this).offset().top, $(this));

            clearTimeout($(this).data('to'));
        });

        $('.portfolio .item.browser .viewport').on('mousein', function(e){
            portfolio.trackPreview(e.pageY - $(this).offset().top, $(this));

            clearTimeout($(this).data('to'));
        });

        $('.portfolio .item.browser .viewport').on('mouseout', function(){
            var $t = $(this);

            $t.data('to', setTimeout(function(){
                $t.find('img').animate({
                    marginTop: 0
                }, 350);
            }, 1500));
        });
    },

    init: function(){
        $(window).on('load.portfolio', function(){
            portfolio.trackPreviewsBind();
        });
    }
};

var common_feedback = {
	opened: false,
	
	hide: function (){	
		$('.feedback-window').removeClass('opened').addClass('closed');
		
		setTimeout(function () {
			$('.feedback-window').remove();
		}, 350);
		
		this.opened = false;

        if(contacts.close_timeout){
            clearTimeout(contacts.close_timeout);
        }
	},

	draw: function (){
		if(contacts.embedded === true){
			core.blink($('.form-contacts-feedback'));
			
			$('html, body').animate({
	            scrollTop: $('.form-contacts-feedback').offset().top - 50
	        }, 200);

            $('input[name="cf-name"]').focus();

			return;
		}
	
		var html = '<div class="feedback-window closed">' +
						'<form method="post" action="" class="forms form-contacts-feedback" id="contacts-feedback-form">' + 
				            '<div class="success-message-inline animated-form-element">' + 
				            	'<h3>Напишите нам прямо сейчас!</h3>' + 
				            	
				            	'<span class="stars animated-form-element">' + 
				            		'<i class="icon-star-empty"></i>' + 
				            		'<i class="icon-star-empty"></i>' + 
				            		'<i class="icon-star-empty"></i>' +
                                    '<i class="icon-star-empty"></i>' +
                                    '<i class="icon-star-empty"></i>' +
                                '</span>' +
				            	
				            	'<span class="wonderful animated-form-element"></span>' + 
				            '</div>' + 
				
				            '<div class="fields animated-form-element">' + 
				                '<label class="forms-inline">' + 
				                    '<input type="text" class="width-100" name="cf-name" placeholder="Вас зовут" x-webkit-speech speech-maxlength="50">' + 
				                '</label>' + 
				
				                '<label class="forms-inline">' + 
				                    '<input type="text" class="width-100" name="cf-cont" placeholder="Контактная информация" x-webkit-speech speech-maxlength="50">' + 
				                '</label>' + 
				
				                '<label>' + 
				                    '<textarea name="cf-mess" rows="3" class="width-100" placeholder="Сообщение" x-webkit-speech></textarea>' + 
				                '</label>' + 
				
				                '<input type="submit" class="button blue" value="Отправить">' + 
				
				                '<span class="right-error"></span>' + 
				            '</div>' + 
				        '</form>' + 
				        '<span class="close" title="Закрыть окно (клавиша Esc)"></span>' + 
			        '</div>';
	
		$('body').append(html);

        $('input[name="cf-name"]').focus();
		
		setTimeout(function(){
			$('.feedback-window').removeClass('closed').addClass('opened');
		}, 50);
		
		$('.feedback-window .close').off('click').on('click', function () {
			common_feedback.hide();
		});
		
		$('body').off('keyup.feedback').on('keyup.feedback', function (e) {
			if(e.keyCode == 27){
				common_feedback.hide();
			}
		});
		
		contacts.init(false);
		
		this.opened = true;
	},
	
	init: function(){
		$('.common-feedback-opener').on('click', function(e){
            e.preventDefault();

			if(common_feedback.opened === false){
				common_feedback.draw();
			}else{
				common_feedback.hide();
			}
		});
	}
};

var core = {
	blink: function($o){
		var time = 750;
	
		$o.removeClass('blink');
		
		setTimeout(function(){
			$o.addClass('blink');
			
			setTimeout(function(){
				$o.removeClass('blink');
			}, time);
		}, 50);
	},
	
	numberFormat: function(number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    },

    init: function(){
        mobile.init();

        var timer;

        $(window).on('scroll.hoverd', function(){
            clearTimeout(timer);

            if(!$('body').hasClass('disable-hover')){
                $('body').addClass('disable-hover');
            }

            timer = setTimeout(function(){
                $('body').removeClass('disable-hover');
            }, 500);
        });

        $('*[data-gourl]').on('click', function(){
            document.location.href = $(this).data('gourl');
        });

        $('.fancybox').fancybox({
            padding: 5
        });
    }
};

$(function(){
    core.init();
    portfolio.init();
    common_feedback.init();
});
