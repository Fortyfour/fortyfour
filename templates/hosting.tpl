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
            <div class="inner-block">
                {include file="include/common/breadcrumb.tpl"}

                <h1>{$core->page.h1}</h1>

                <hr>

                <p>
                    Всем своим клиентам мы предлагаем воспользоваться нашим хостингом.
                    Мы заботливо разместим ваши проекты на наших серверах и обеспечим
                    круглосуточный контроль и бесперебойное функционировани ваших сайтов и приложений.
                </p>

                <p>
                    Вам не нужно беспокоиться об администрировании и какой-либо настройки хостинга.
                    Мы произведем всю необходимую настройку и будем сопровождать ваши проекты,
                    устраняя любые возможные сложности.
                </p>

                <div class="hosting-container">
                    <h2>Тарифы хостинга для ваших проектов</h2>

                    <div class="units-row-end">
                        <div class="unit-33">
                            <div class="item">
                                <h3 class="color-blue">V6</h3>

                                <p class="description">
                                    Подойдет для сайта-визитки,<br>портфолио или фотосайта
                                </p>

                                <table>
                                    <tr>
                                        <th>Место на диске</th>
                                        <td>10 ГБ</td>
                                    </tr>

                                    <tr>
                                        <th>Процессор</th>
                                        <td>Xeon E5645</td>
                                    </tr>

                                    <tr>
                                        <th>Частота</th>
                                        <td>1000 МГц</td>
                                    </tr>

                                    <tr>
                                        <th>Память</th>
                                        <td>500 МБ</td>
                                    </tr>
                                </table>

                                <i class="price-stripe"></i>
                                <div class="price">
                                    9 900 <span class="rub">&#8399;</span> / год
                                </div>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="item">
                                <h3 class="color-green">V8</h3>

                                <p class="description">
                                    Решение для интернет-магазина<br>или корпоративного портала
                                </p>

                                <table>
                                    <tr>
                                        <th>Место на диске</th>
                                        <td>20 ГБ</td>
                                    </tr>

                                    <tr>
                                        <th>Процессор</th>
                                        <td>Xeon E5645</td>
                                    </tr>

                                    <tr>
                                        <th>Частота</th>
                                        <td>1500 МГц</td>
                                    </tr>

                                    <tr>
                                        <th>Память</th>
                                        <td>1 ГБ</td>
                                    </tr>
                                </table>

                                <i class="price-stripe"></i>
                                <div class="price">
                                    14 900 <span class="rub">&#8399;</span> / год
                                </div>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="item">
                                <h3 class="color-red">V12</h3>

                                <p class="description">
                                    Высокая производительность для высоконагруженных проектов
                                </p>

                                <table>
                                    <tr>
                                        <th>Место на диске</th>
                                        <td>40 ГБ</td>
                                    </tr>

                                    <tr>
                                        <th>Процессор</th>
                                        <td>Xeon E5645</td>
                                    </tr>

                                    <tr>
                                        <th>Частота</th>
                                        <td>2000 МГц</td>
                                    </tr>

                                    <tr>
                                        <th>Память</th>
                                        <td>2 ГБ</td>
                                    </tr>
                                </table>

                                <i class="price-stripe"></i>
                                <div class="price">
                                    19 900 <span class="rub">&#8399;</span> / год
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br/>

                <p class="color-gray">
                    <em>Услуга доступна только для клиентов, заказавших разработку сайта, интернет-магазина или веб-приложения.</em>
                </p>

                <br/>

                <div class="units-row-end">
                    <div class="unit-33">
                        <h3>Дата-центр</h3>

                        Мы используем технические площадки дата-центра
                        <a href="http://www.first-colo.net">First Colo</a> во Франкфурте (Германия).
                    </div>

                    <div class="unit-33">
                        <h3>Бэкап</h3>

                        На всех тарифах осуществляется ежедневный, еженедельный и ежемесячные планы бэкапа.
                    </div>

                    <div class="unit-33">
                        <h3>Панель управления</h3>

                        Простая и удобная панель управления хостингом <a href="http://vestacp.com/">Vesta</a>.
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