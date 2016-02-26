core = {
    mainNav: function(){
        $('.top-menu nav a').hover(function(){
            $('.nav-marker').css({
                top: $(this).offset().top,
                left: $(this).offset().left,
                width: $(this).width() + parseInt($(this).css('padding-left')) + parseInt($(this).css('padding-right'))
            }).stop().animate({
                top: $(this).offset().top + 12,
                opacity: 1
            }, 100);
        }, function(){
            $('.nav-marker').animate({
                opacity: 0,
                top: $(this).offset().top + 25
            }, 100);
        });
    },

    photoNews: function(){
        $('.photo-news .item a').hover(function(){
            $(this).find('.text').css({
                opacity: 0
            }, 100);

            var p = $(this).width() / 100;

            $(this).find('.img-2').css({
                left: (p * 33) + 3,
                top: 0
            }, 100);

            $(this).find('.img-3').css({
                left: (p * 66) + 6,
                top: 0
            }, 100);
        }, function(){
            $(this).find('.text').css({
                opacity: 1
            }, 100);

            $(this).find('.img-2').css({
                left: 5,
                top: 5
            }, 100);

            $(this).find('.img-3').css({
                left: 10,
                top: 10
            }, 100);
        });
    },

    stretch: function(){
        $('.stretch-block').css({
            height: 'auto'
        });

        if($('body').width() < 767){
            return;
        }

        var rows = [],
            row;

        $('.stretch-block').each(function(){
            if(row != $(this).attr('row')){
                row = $(this).attr('row');
                rows.push({num: row});
            }
        });

        for(var i = 0, l = rows.length; i < l; i++){
            var row_sel = $('.stretch-block[row="'+rows[i].num+'"]'),
                h = 0;

            row_sel.each(function(){
                if(h < $(this).height()){
                    h = $(this).height();
                }
            });

            row_sel.css({
                height: h
            });
        }
    },

    twitter: function(){
        $.getJSON('http://api.twitter.com/1/statuses/user_timeline/envato.json?count=2&callback=?', function(tweets){
            $("#twitter").html(tz_format_twitter(tweets));
        });
    },

    flipItems: function(select, inner){
        var oc = $(select).length,
            interval = null,
            $interact = null,
            iter = 0;

        interval = setInterval(function(){
            var $o = $(select).eq(iter);

            if(inner){
                $interact = $o.find(inner);
            }else{
                $interact = $o;
            }

            $interact.addClass('ready');

            iter++;

            if(iter >= oc){
                clearInterval(interval);
            }
        }, 50);
    },

    init: function(){
        this.mainNav();
        this.twitter();
    }
};

$(function(){
    core.photoNews();
    core.init();

    $('a').on('click', function(e){
        e.preventDefault();
    })
});

$(window).load(function(){
    core.flipItems('.party-item', 'a');
    setTimeout(function(){
        $('.party-item.loading').removeClass('loading');
    }, 250);

    core.stretch();
});

$(window).on('resize', function(){
    core.stretch();
});