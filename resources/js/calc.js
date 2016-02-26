var calc = {
	interval: null,
	step: 1,
	props: {},
	selected: {
		type: false,
		props: [],
		necessary: [],
		groups: [],
		min_price: 0,
		props_user: [],
		form_details: {},
		form_contacts: {}
	},
	
	strorageTest: function(){
		try {
	        return 'localStorage' in window && window['localStorage'] !== null;
	    } catch (e) {
	        return false;
	    }
	},
	
	save: function(){	
		localStorage.setItem('selected', JSON.stringify(this.selected));
	},
	
	load: function(){
		var selected = JSON.parse(localStorage.getItem('selected'));
	
		if(selected && selected.type && selected.type.id > 0){
			this.selected = selected;
		}
	},
	
	resetStorage: function(){
		localStorage.setItem('selected', '');
	},

	loadProperties: function(cb){
		$.ajax({
			url: '/?ajax&action=getOrderItems',
			type: 'get',
			dataType: 'json',
			success: function(data){
				if(cb){
					cb(data);
				}
			}
		});
	},
	
	getType: function(type){
		var type_obj = $.grep(this.props.types, function(n, i){ 		
			if(n.id == type){
				return n;
			}
		});
		
		return type_obj[0];
	},
	
	getPropsByType: function(type){
		var props = $.grep(this.props.props, function(n, i){ 		
			if($.inArray(type, n.types) >= 0){
				return n;
			}
		});
		
		return props;
	},
	
	getPropById: function(id){
		var props = $.grep(this.props.props, function(n, i){ 		
			if(n.id == id){
				return n;
			}
		});
		
		return props[0];
	},
	
	insertUserProp: function(id){
		this.selected.props_user.push(this.getPropById(id));
	},
	
	removeUserProp: function(id){
		var temp = [];
	
		for(var i = 0, l = this.selected.props_user.length; i < l; i++){
			if(this.selected.props_user[i].id != id){
				temp.push(this.selected.props_user[i]);
			}
		}
		
		this.selected.props_user = temp;
	},
	
	getNecessaryPropsByType: function(type){
		var props = $.grep(this.props.props, function(n, i){ 		
			if($.inArray(type, n.types) >= 0 && $.inArray(type, n.necessary) >= 0){
				return n;
			}
		});
		
		return props;
	},
	
	getMinPriceByNecessary: function(type){
		var price = 0, 
			necessary = this.getNecessaryPropsByType(type);
		
		for(var i = 0, l = necessary.length; i < l; i++){
			price += parseFloat(necessary[i].price);
		}
		
		return price;
	},
	
	getActiveGroupsForType: function(type){
		var props = this.getPropsByType(type),
			groups_temp = [],
			groups = [];
		
		for(var i = 0, l = props.length; i < l; i++){
			if($.inArray(props[i].group, groups_temp) < 0){
				groups_temp.push(props[i].group);
			}
		}
		
		for(var i = 0, l = groups_temp.length; i < l; i++){
			for(var i1 = 0, l1 = this.props.groups.length; i1 < l1; i1++){
				if(groups_temp[i] == this.props.groups[i1].id){
					groups.push(this.props.groups[i1]);
				}
			}
		}
		
		return groups;
	},
	
	selectType: function(type){
		this.selected.type = this.getType(parseInt(type));
		this.selected.props = this.getPropsByType(type);
		this.selected.necessary = this.getNecessaryPropsByType(type);
		this.selected.min_price = this.getMinPriceByNecessary(type);
		this.selected.groups = this.getActiveGroupsForType(type);
		
		this.drawOrderParams();
		
		$('#no-selection').empty();
		$('.calc .select a').removeClass('active');
		$('.calc .select a[data-type="' + type + '"]').addClass('active');
		$('.next').removeClass('disabled');
		
		if(type == 5){
			this.next();
			$('.additional-side-info').hide();
		}else{
			$('.additional-side-info').show();
		}
	},
	
	drawOrderParams: function(html_addon){
		var html = '',
			price = 0,
			count = calc.countUserProps();
		
		if(!html_addon){
			html_addon = '';
		}
		
		if(count.price > 0){
			price = count.price;
		}else{
			price = this.selected.min_price;
		}

        if(this.selected && this.selected.type){
		    html += '<p><strong>Тип проекта</strong><br>' + this.selected.type.name + '</p>';
        }
			
		if(calc.selected.props_user.length > 0){
			html += '<p><strong>Количество опций</strong><br>' + calc.selected.props_user.length + '</p>';
		}
		
		if(this.selected.type.id != 5){
			html += '<p><strong>Стоимость *</strong><br>от ' + core.numberFormat(price, 0, ',', ' ') + ' <span class="rub">&#8399;</span></p>';
			html += html_addon;
		}
	
		$('#order-params').html(html);
		$('.additional-side-info').show();
	},
	
	countUserProps: function(){
		var price = 0;
		
		for(var i = 0, l = this.selected.props_user.length; i < l; i++){
			price += parseFloat(this.selected.props_user[i].price);
		}
	
		return {
			count: this.selected.props_user.length,
			price: price
		};
	},
	
	drawItemsTable: function(){
		var html = '';
					
		for(var gi = 0, gl = this.selected.groups.length; gi < gl; gi++){			
			html += '<table class="group">' + 
						'<tr>' + 
							'<th class="name" colspan="3">' + this.selected.groups[gi].name + '</th>' + 
						'</tr>';
				
			for(var ii = 0, il = this.selected.props.length; ii < il; ii++){
				if(this.selected.props[ii].group == this.selected.groups[gi].id){
					var necessary = false,
						old_price = '';
					
					for(var ni = 0, nl = this.selected.necessary.length; ni < nl; ni++){
						if(this.selected.necessary[ni].id == this.selected.props[ii].id){
							necessary = true;
						}
					}
					
					if(necessary === true){
						checkbox = '<i class="icon-star-empty necessary-icon" title="В текущем типе проекта обязательно присутствие данной опции"></i>';
					}else{
						checkbox = '<input data-id="' + this.selected.props[ii].id + '" id="prop-cb-' + this.selected.props[ii].id + '" type="checkbox">';
					}
					
					if(this.selected.props[ii].old_price > 0){
						old_price = '<span class="line-through color-gray">' + core.numberFormat(this.selected.props[ii].old_price, 0, ',', ' ') + '</span>&nbsp;&nbsp;';						
					}
				
					html += '<tr>' +
								'<td width="1%"><div class="text-centered">' + checkbox + '</div></td>' +  
								'<td width="98%"><label for="prop-cb-' + this.selected.props[ii].id + '">' + this.selected.props[ii].name + '</label></td>' +
								'<td width="1%"><label class="nobr text-right" for="prop-cb-' + this.selected.props[ii].id + '">' + old_price + core.numberFormat(this.selected.props[ii].price, 0, ',', ' ') + 
								' <span class="rub">&#8399;</span></label></td>' +
							'</tr>';
				}
			}
		}
	
		html += '</table>';
		
		$('.step-content.items').html(html);
		
		if(this.selected.type.id != 4){
			this.selected.props_user = new Array();
			this.selected.props_user = this.selected.necessary;
		}
		
		calc.drawOrderParams();
		
		$('.calc .group input[type="checkbox"]').off('change').on('change', function(){
			if($(this).prop('checked') === true){
				calc.insertUserProp($(this).data('id'));
			}else{
				calc.removeUserProp($(this).data('id'));
			}

			calc.drawOrderParams();
		});
	},
	
	convertSendData: function(data){	
		var props = [];
		
		for(var i = 0, l = data.props_user.length; i < l; i++){
			props.push(data.props_user[i].id);
		}
	
		var temp = {
			type: data.type.id,
			props: props,
			form_details: data.form_details,
			form_contacts: data.form_contacts
		};
		
		return temp;
	},
	
	sendData: function(){
		$.ajax({
			url: '/?ajax&action=offer',
			data: this.convertSendData(this.selected),
			dataType: 'json',
			type: 'POST',
            beforeSend: function(){
                $('.form-error').html('');
                $('#email').removeClass('input-error');
            },
			success: function(data){
				if(data.status == true){
                    $('.content-prefix').next().remove();
                    $('.content-prefix').after(
                        '<h2>Спасибо, ваш заказ принят!</h2><p>В ближайшее время мы с вами свяжемся!</p>'
                    );
                    $('.content-prefix').remove();
				}else{
                    $('.form-error').html('Неправильниый адрес электронной почты');
                    $('#email').addClass('input-error');
                }
			}
		});
	},
	
	next: function(){
		if(this.selected.type.id == 5 && this.step == 1){
			this.step = 2;
		}
		
		switch(this.step){
			case 1 : {
				if(this.selected.type === false){
					core.blink($('#no-selection'));
				}else{
					$('.step-content[data-step="1"]').fadeOut(200, function(){
						calc.drawItemsTable();
						$('.step-content[data-step="2"]').fadeIn(300);
					});
					
					var additional = '';
					
					if(this.selected.type.id != 4){
						additional = '<br><em>Обратите внимание, опции, отмеченные звездочками (<i class="icon-star-empty necessary-icon"></i>) являются обязательным набором для выбранного типа проекта.</em>';
					}
					
					$('.content-prefix').html(
						'<h3>Шаг 2 из 4 <span class="color-gray" style="font-weight: normal">&mdash; набор необходимых опций</span></h3>' +
	                    'Выберите пожалуйста необходимые опции из спсика. Когда будете готовы, жмите &laquo;Продолжить&raquo;.' + additional
	                );
	                
	                $('.breadcrumb').html('<a href="/">Главная</a> &rarr; <a href="/order">Конфигуратор заказа</a> &rarr; Выбор опций');
	                
	                this.step = 2;
				}
			} break;
			
			case 2 : {					
				if(this.selected.type.id == 5){
					$('.step-content[data-step="1"]').fadeOut(200, function(){
						$('.step-content[data-step="3"]').fadeIn(300);
					});
				}else{
					$('.step-content[data-step="2"]').fadeOut(200, function(){
						$('.step-content[data-step="3"]').fadeIn(300);
					});
				}
				
				$('.content-prefix').html(
					'<h3>Шаг 3 из 4 <span class="color-gray" style="font-weight: normal">&mdash; подробная информация о проекте</span></h3>' +
	                'Заполните те поля, которые посчитаете нужными и жмите &laquo;Продолжить&raquo;. Максимально полные сведения помогут нам более точно понять, какой проект вам необходим.'
	            );
	            
	            $('.breadcrumb').html('<a href="/">Главная</a> &rarr; <a href="/order">Конфигуратор заказа</a> &rarr; Информация о проекте');
	            
	            this.step = 3;
			} break;
			
			case 3 : {
				this.selected.form_details = {
					date_month: $('#date-month').val(),
					date_year: $('#date-year').val(),
					domain: $('#domain').val(),
					oldsite: $('#oldsite').val(),
					sphere: $('#sphere').val(),
					concurents: $('#concurents').val(),
					like: $('#like').val(),
					user_message: $('#user-message').val()
				};
			
				$('.step-content[data-step="3"]').fadeOut(200, function(){
					$('.step-content[data-step="4"]').fadeIn(300);
				});
				
				$('.content-prefix').html(
					'<h3>Шаг 4 из 4 <span class="color-gray" style="font-weight: normal">&mdash; Контактная информация</span></h3>' +
	                'Последний шаг! Введите пожалуйста свой адрес электронной почты (и телефон при желании), нажмите &laquo;Отправить&raquo; и мы отправим вам коммерческое предложение прямо на почту.'
	            );
	            
	             $('.breadcrumb').html('<a href="/">Главная</a> &rarr; <a href="/order">Конфигуратор заказа</a> &rarr; Контактная информация');
	            
	            $('.next').html('Отправить');
	            
	            this.step = 4;
			} break;
			
			case 4 : {
				this.selected.form_contacts = {
					username: $('#username').val(),
					email: $('#email').val(),
					phone: $('#phone').val()
				};
				
				this.sendData();
			} break;
		}	
	},

	binds: function(){
		$('.calc .select a').on('click', function(e){
			calc.selectType($(this).data('type'));
			e.preventDefault();
		});
		
		$('.next').on('click', function(e){
			calc.next();
			e.preventDefault();
		});
	},

	init: function(){
		this.interval = setInterval(function(){
			calc.save();
		}, 1000);
	
		this.loadProperties(function(data){
            for(var i = 0, l = data.props.length; i < l; i++){
                data.props[i].id = parseInt(data.props[i].id);
                data.props[i].price = parseFloat(data.props[i].price);
                data.props[i].old_price = parseFloat(data.props[i].old_price);
                data.props[i].group = parseInt(data.props[i].group);
                data.props[i].types = data.props[i].types.split(',');
                data.props[i].necessary = data.props[i].necessary.split(',');

                for(var i1 = 0, l1 = data.props[i].types.length; i1 < l1; i1++){
                    data.props[i].types[i1] = parseInt(data.props[i].types[i1]);
                }

                for(var i2 = 0, l2 = data.props[i].necessary.length; i2 < l2; i2++){
                    data.props[i].necessary[i2] = parseInt(data.props[i].necessary[i2]);
                }
            }

            for(var i = 0, l = data.groups.length; i < l; i++){
                data.groups[i].id = parseInt(data.groups[i].id);
            }

            for(var i = 0, l = data.types.length; i < l; i++){
                data.types[i].id = parseInt(data.types[i].id);
            }

			calc.props = data;
			calc.binds();
		});
	}	
};

$(function(){
	calc.init();
});