<!DOCTYPE html>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    {include file="include/common/head.tpl"}
</head>
<body>

<div class="background-top bg-top-inner">
    <ul id="scene">
        <li class="layer" data-depth="0.10"><img src="/resources/img/parallax/space/1.png"></li>
        <li class="layer" data-depth="0.20"><img src="/resources/img/parallax/space/2.png"></li>
        <li class="layer" data-depth="0.30"><img src="/resources/img/parallax/space/3.png"></li>
        <li class="layer" data-depth="0.60"><img src="/resources/img/parallax/space/4.png"></li>
        <li class="layer" data-depth="1.30"><img src="/resources/img/parallax/space/5.png"></li>
    </ul>
</div>

<div class="wrapper">
    <header class="header-inner">
        {include file="include/common/header-inner.tpl"}
    </header>

    <div class="content-inner">
        <div class="horizontal-limiter">
            <div class="inner-block services-inner">
                {include file="include/common/breadcrumb.tpl"}

                <h1>{$core->page.h1}</h1>

                <hr style="margin-bottom: 0"/>
            </div>

            <div class="front-row-icons">
                <div class="units-row">
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

                <br/>

                <div class="units-row-end">
                    <div class="unit-25">
                        <a href="/services/apps" class="icon-block-item">
                            <span class="image"><img src="/resources/img/icons/box.png" alt="Веб-приложения"/></span>
                            <h4>Веб-приложения</h4>
                            <span class="desc">От уникалных CRM <nobr>до&nbsp;веб-сервисов</nobr></span>
                        </a>
                    </div>

                    <div class="unit-25">
                        <a href="/services/ui" class="icon-block-item">
                            <span class="image"><img src="/resources/img/icons/user-interface.png" alt="Дизайн пользовательских интерфейсов"/></span>
                            <h4>Пользовательские интерфейсы</h4>
                            <span class="desc">Разработка и анализ юзабилити</span>
                        </a>
                    </div>

                    <div class="unit-25">
                        <a href="/services/mobile" class="icon-block-item">
                            <span class="image"><img src="/resources/img/icons/mobile.png" alt="Разработка мобильных приложений"/></span>
                            <h4>Мобильные платформы</h4>
                            <span class="desc">Создание приложений и&nbsp;сервисов для мобильных платформ</span>
                        </a>
                    </div>

                    <div class="unit-25">
                        <a href="/services/support" class="icon-block-item">
                            <span class="image"><img src="/resources/img/icons/board.png" alt="Продвижение"/></span>
                            <h4>Продвижение сайтов</h4>
                            <span class="desc">Комплексный аудит и&nbsp;продвижение в&nbsp;поисковых системах</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        {include file="include/common/footer.tpl"}
    </footer>
</div>

{$core->getConstant('scripts', 'body_code')}

</body>
</html>