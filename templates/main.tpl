<!DOCTYPE HTML>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    {include file="include/common/head.tpl"}
</head>

<body>

<div class="background-top">
    <ul id="scene">
        <li class="layer" data-depth="0.10"><img src="/resources/img/parallax/space/1.png"></li>
        <li class="layer" data-depth="0.20"><img src="/resources/img/parallax/space/2.png"></li>
        <li class="layer" data-depth="0.30"><img src="/resources/img/parallax/space/3.png"></li>
        <li class="layer" data-depth="0.60"><img src="/resources/img/parallax/space/4.png"></li>
        <li class="layer" data-depth="1.30"><img src="/resources/img/parallax/space/5.png"></li>
    </ul>
</div>

<div class="wrapper">

<header class="header-mainpage">
    {include file="include/common/header-mainpage.tpl"}
</header>

<div class="content-mainpage">
    <div class="horizontal-limiter">

        {include file="include/blocks/slider.tpl"}

        <div class="front-row-icons">
            <div class="units-row-end">
                <div class="unit-25">
                    <a href="/services/shops" class="icon-block-item">
                        <span class="image"><img src="/resources/img/icons/basket.png" alt="Интернет-магазины"/></span>
                        <h4>Интернет-магазины</h4>
                        <span class="desc">Любой сложности, от&nbsp;мини до&nbsp;мега-маркетов</span>
                    </a>
                </div>

                <div class="unit-25">
                    <a href="/projects/hosting" class="icon-block-item">
                        <span class="image"><img src="/resources/img/icons/earth.png" alt="Качественный хостинг"/></span>
                        <h4>Качественный хостинг</h4>
                        <span class="desc">Забудьте о&nbsp;проблемах и&nbsp;администрировании</span>
                    </a>
                </div>

                <div class="unit-25">
                    <a href="/services/sites" class="icon-block-item">
                        <span class="image"><img src="/resources/img/icons/mountain.png" alt="Корпоративные сайты"/></span>
                        <h4>Корпоративные сайты</h4>
                        <span class="desc">Простые и&nbsp;креативные, а&nbsp;так&nbsp;же&nbsp;сайты-визитки</span>
                    </a>
                </div>

                <div class="unit-25">
                    <a href="/services/support" class="icon-block-item">
                        <span class="image"><img src="/resources/img/icons/Retina-Ready.png" alt="Поддержка и наполнение"/></span>
                        <h4>Поддержка и&nbsp;наполнение</h4>
                        <span class="desc">Все странички грамотные и&nbsp;аккуратные</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="inner-block">
            <div class="units-row-end">
                <div class="unit-50">
                    <h3>Отличный результат за хорошую цену</h3>

                    Мы&nbsp;поможем вам создать действительно хороший сайт.<br>
                    У нас за плечами большой опыт разработки, который помогает нам ваши решать задачи быстрее,
                    что дает нам возможность устанавливать более низкие цены на качественные услуги.
                    Вы&nbsp;останетесь довольны результатом.
                </div>

                <div class="unit-50">
                    <h3>Сайт работает как швейцарские часы</h3>

                    Мы&nbsp;разработали множество технических решений, начиная с&nbsp;серверного&nbsp;ПО,
                    заканчивая веб-фреймворками и&nbsp;дизайн-прототипами. Это позволяет нам быстро
                    находить решение именно для ваших бизнес-задач. При этом, решение создается
                    уникальным, производительным и&nbsp;отлаженным, предоставляя отличный сервис.
                </div>
            </div>
        </div>

        <div class="portfolio">
            <div class="portfolio-inner" style="background-position: 0 98px">
                <h2 class="giant">Наши работы<i class="heart-icon"></i></h2>

                <a href="/portfolio" class="button big yellow dive-in-button">Все работы &rarr;</a>

                {include file="include/common/portfolio-list.tpl" items=$core->getPortfolio(12)}

                <div class="clear"></div>

                <div class="calc-banner">
                    <div class="units-row-end">
                        <div class="unit-50">
                            <a href="/order" class="button big yellow">Заказать разработку сайта</a>
                        </div>

                        <div class="unit-50">
                            <div class="text-side">
                                Узнайте стоимость своего проекта<br>и закажите разработку прямо сейчас!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="inner-block news-shortlist">
            <h2>Последние записи в блоге</h2>

            <a href="/blog" class="button red">Весь блог &rarr;</a>

            <div class="units-row-end">
                {foreach $core->getNewsShort(2) as $item}
                    <div class="unit-50">
                        <div class="head">
                            <div class="date">
                                <span class="bar">
                                    <i class="pin-l"></i>
                                    <i class="pin-r"></i>
                                </span>

                                <span class="day">{$item.date|date:"d"}</span>
                                <span class="month">{$item.date|date:"m"}</span>
                                <span class="year">{$item.date|date:"y"}</span>
                            </div>

                            <h3><a class="black-link" href="{$item.path}">{$item.structure_name}</a></h3>
                        </div>

                        {$item.announce}
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>
</div>

<script src="/resources/js/parallax.js"></script>

<script>
    $(function(){
        $('#scene').parallax({
            calibrateX: false,
            calibrateY: false,
            invertX: true,
            invertY: true,
            limitX: false,
            limitY: 10,
            scalarX: 5,
            scalarY: 9,
            frictionX: 0.2,
            frictionY: 0.8
        });
    });
</script>

{include file="include/common/footer.tpl"}

{$core->getConstant('scripts', 'body_code')}

</body>
</html>