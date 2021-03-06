<!DOCTYPE html>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    {include file="include/common/head.tpl"}

    <script src="//api-maps.yandex.ru/2.1-dev/?lang=ru-RU&load=package.full" type="text/javascript"></script>
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
            <div class="inner-block" style="padding-bottom: 0">

                {include file="include/common/breadcrumb.tpl"}

                <h1>{$core->page.h1}</h1>

                <hr>

                <div class="units-row-end">
                    <div class="unit-50">
                        <div class="units-row-end table-row">
                            <div class="unit-40">
                                <span class="color-gray">Телефон</span>
                            </div>

                            <div class="unit-60">
                                +7 (926) 960-40-20
                            </div>
                        </div>

                        <div class="units-row-end table-row">
                            <div class="unit-40">
                                <span class="color-gray">Электронная почта</span>
                            </div>
                            <div class="unit-60">
                                <a href="mailto:mail@fortyfour.ru">mail@fortyfour.ru</a>
                            </div>
                        </div>

                        <div class="units-row-end table-row">
                            <div class="unit-40">
                                <span class="color-gray">Адрес</span>
                            </div>
                            <div class="unit-60">
                                Москва, поселок Румянцево,<br>БП &laquo;Румянцево&raquo;, строение 2, корпус В, офис 525-В
                            </div>
                        </div>

                        <div class="units-row-end table-row-socials">
                            <div class="unit-40">
                                <span class="color-gray">В соцсетях</span>
                            </div>
                            <div class="unit-60">
                                <div class="social">
                                    {*<a class="google" href="http://plus.google.com/fortyfour">Гугль плюс</a>*}
                                    <a class="twitter" href="https://twitter.com/fortyfourmedia">Твиттер</a>
                                    {*<a class="facebook" href="http://facebook.com/fortyfour">Фейсбук</a>*}
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>

                        <div class="units-row-end table-row">
                            <em class="color-gray">
                                Если собираетесь к&nbsp;нам, не&nbsp;забудьте взять с&nbsp;собой свой паспорт &mdash;
                                у&nbsp;нас контрольно-пропускная система. Уведомите заранее, мы&nbsp;закажем для вас пропуск.
                            </em>
                        </div>
                    </div>

                    <div class="unit-50">
                        <form method="post" action="" class="forms form-contacts-feedback" id="contacts-feedback-form">
                            <div class="success-message-inline animated-form-element">
                                <h3>Напишите нам прямо сейчас!</h3>

                                <span class="stars animated-form-element">
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                    <i class="icon-star-empty"></i>
                                </span>

                                <span class="wonderful animated-form-element"></span>
                            </div>

                            <div class="fields animated-form-element">
                                <label class="forms-inline">
                                    <input type="text" class="width-100" name="cf-name" placeholder="Вас зовут" x-webkit-speech speech-maxlength="50">
                                </label>

                                <label class="forms-inline">
                                    <input type="text" class="width-100" name="cf-cont" placeholder="Контактная информация" x-webkit-speech speech-maxlength="50">
                                </label>

                                <label>
                                    <textarea name="cf-mess" rows="3" class="width-100" placeholder="Сообщение" x-webkit-speech></textarea>
                                </label>

                                <input type="submit" class="button blue" value="Отправить">

                                <span class="right-error"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <br>

                <div class="map" id="map"></div>

                <script>
                    $(function(){
                        map.init();
                        contacts.init(true);
                    });
                </script>
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