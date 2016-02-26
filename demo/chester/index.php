<!DOCTYPE html>
<html>
<head>
    <title>Chesterfield</title>
    <meta name="description" content="Бар, ресторан и ночной клуб Chesterfield"/>
    <meta name="keywords" content="бар, ресторан, ночной клуб"/>

    <meta charset="utf-8">

    <?
    error_reporting(E_ALL | E_STRICT);
    error_reporting(1);

    function devScale()
    {
        $container = $_SERVER['HTTP_USER_AGENT'];
        $useragents = array('iPhone','iPod');
        $iphone = false;

        foreach ($useragents as $useragent) {
            if (eregi($useragent, $container)) {
                $iphone = true;
            }
        }

        if ($iphone) {
            return '0.5';
        } else {
            return '0.85';
        }
    }
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=<? echo devScale(); ?>"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <link rel="stylesheet" type="text/css" href="css/kube.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/master.css"/>
    <link href='http://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="/js/twitter.js"></script>
    <script src="js/core.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script type="text/javascript">// <![CDATA[
(function(doc) {

var addEvent = 'addEventListener',
type = 'gesturestart',
qsa = 'querySelectorAll',
scales = [1, 1],
meta = qsa in doc ? doc[qsa]('meta[name=viewport]') : [];

function fix() {
meta.content = 'width=device-width,minimum-scale=' + scales[0] + ',maximum-scale=' + scales[1];
doc.removeEventListener(type, fix, true);
}

if ((meta = meta[meta.length - 1]) && addEvent in doc) {
fix();
scales = [0.85, 1];
doc[addEvent](type, fix, true);
}

}(document));
// ]]></script>
</head>
<body>

<i class="nav-marker"></i>

<div class="page limiter">
    <div class="limiter center">
        <header class="header content-lim transform">
            <i class="a-18-p transform"></i>

            <div class="phones" itemscope itemtype="http://schema.org/LocalBusiness">
                <span class="l" itemprop="telephone">+7 (495) 697-69-36</span>
                <span class="r" itemprop="telephone">+7 (905) 590-10-60</span>
            </div>

            <address class="address transform">
                <span class="l">Бар, ресторан, ночной клуб</span>
                <span class="r street-address">Москва, Новый Арбат, 19</span>
            </address>

            <a itemprop="name" href="/" title="Бар, ресторан и ночной клуб Chesterfield" class="logo transform">Chesterfield</a>
        </header>
    </div>

    <div class="limiter center transform">
        <div class="top-menu transform">
            <i class="l"></i>
            <i class="r"></i>

            <div class="c">
                <nav>
                    <a href="#">Афиша</a>
                    <b>Блог</b>
                    <a href="#">Фото и видео</a>
                    <a href="#">Меню</a>
                    <a href="#">Акции</a>
                    <a href="#">Контакты</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="limiter center transform">
        <div class="content-container content-lim transform">
            <div class="content">
                <div class="row container">
                    <div class="twothird">
                        <div class="top-actions stretch-block" row="0">
                            Ресторан Chesterfield находится в&nbsp;самом центре Москвы на&nbsp;Новом Арбате.
                            Если вы&nbsp;устали от&nbsp;серых будней и&nbsp;банального отдыха по&nbsp;выходным, то&nbsp;Chesterfield&nbsp;— это идеальное место для вас!

                            <nav class="nav-vertical">
                                <a href="#">О баре</a>
                                <a href="#">Интерьер</a>
                                <a href="#">Планировка</a>
                                <a href="#">Карта проезда</a>
                                <div class="clear"></div>
                            </nav>

                            <div style="display: none">
                                <p>
                                    Chesterfield — это успешное сочетание бара, ресторана и&nbsp;ночного клуба. Интерьер заведения исполнен в&nbsp;американском стиле.
                                    Ресторан состоит из&nbsp;<nobr>3-х</nobr> залов. Основной зал находится на&nbsp;втором этаже, в&nbsp;центре которого расположена
                                    сцена и&nbsp;большой контактный бар. Огромные витражные окна с&nbsp;видом на&nbsp;Новый Арбат, мягкие диваны, а&nbsp;так&nbsp;же интересные
                                    цветовые решения в интерьере гармонично сочетаются и&nbsp;передают атмосферу этой страны.
                                </p>

                                <p>
                                    Заведение прекрасно подходит не&nbsp;только для отдыха с&nbsp;друзьями или семьей,
                                    но&nbsp;и&nbsp;для проведения корпоративных мероприятий, праздников и&nbsp;презентаций. Именно здесь проходят
                                    самые эксклюзивные вечеринки, а&nbsp;специальная шоу-программа на&nbsp;каждый день недели радует наших гостей
                                    своей многогранностью. Так&nbsp;же надо отметить, что Европейско-Американская кухня представленная в Chesterfield
                                    действительно разнообразна и&nbsp;удовлетворит любого гурмана, а&nbsp;ценовая политика порадует своей демократичностью.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="third">
                        <div class="top-actions stretch-block" row="0">
                            <a href="#" class="more-button-gray">Задать вопрос</a>
                            <br>
                            <a href="#" class="more-button-red">Забронировать столик</a>
                        </div>
                    </div>
                </div>

                <h2 class="heading-giant">Анонсы ближайших мероприятий</h2>

                <div class="row">
                    <div class="third">
                        <div class="party-item transform loading">
                            <a href="#" class="stretch-block" row="1">
                                <img src="img/art/1.jpg">

                                <h3>
                                    Запой: выпей и спой
                                    <span class="date">17 июня (понедельник)</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="third">
                        <div class="party-item transform loading">
                            <a href="#" class="stretch-block" row="1">
                                <i class="free" title="Алкоголь - бесплатно!">FREE BAR!</i>
                                <img src="img/art/2.jpg">

                                <h3>
                                    Час пик или праздник живота
                                    <span class="date">18 июня (вторник)</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="third">
                        <div class="party-item transform loading">
                            <a href="#" class="stretch-block" row="1">
                                <img src="img/art/3.jpg">

                                <h3>
                                    Ladies night party hard
                                    <span class="date">19 июня (среда)</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="third">
                        <div class="party-item transform loading">
                            <a href="#" class="stretch-block" row="2">
                                <i class="hot" title="Приходите, будет жарко!">HOT PARTY!</i>
                                <img src="img/art/4.jpg">

                                <h3>
                                    Latino party
                                    <span class="date">20 июня (четверг)</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="third">
                        <div class="party-item transform loading">
                            <a href="#" class="stretch-block" row="2">
                                <img src="img/art/6.jpg">

                                <h3>
                                    Забей на дачу, лови удачу!
                                    <span class="date">21 и 22 июня (пятница и суббота)</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                    <div class="third">
                        <div class="party-item transform loading">
                            <a href="#" class="stretch-block" row="2">
                                <i class="cold" title="Новый формат вечеринок">NEW!</i>
                                <img src="img/art/5.jpg">

                                <h3>
                                    Усама party
                                    <span class="date">22 июня (воскресенье)</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>

                <h2 class="heading-giant">Блог, события и отчеты с мероприятий</h2>

                <div class="row">
                    <div class="third">
                        <div class="blured-bg-block bbb-button blog-event-item stretch-block" row="3">
                            <h2>Блог</h2>

                            <div class="separator"></div>

                            <div class="date">
                                <div class="date-container">
                                    <span class="day">24</span>
                                    <span class="month">Апр</span>
                                    <span class="year">2013</span>
                                </div>
                            </div>
                            <h3><a href="#">Час пик или праздник живота</a></h3>
                            Максимум программирует невероятный функциональный анализ, явно демонстрируя всю чушь
                            вышесказанного.
                            Отсюда естественно следует, что рациональное число переворачивает интеграл по бесконечной
                            области.

                            <br><br>
                            <div class="separator"></div>

                            <div class="date">
                                <div class="date-container">
                                    <span class="day">24</span>
                                    <span class="month">Апр</span>
                                    <span class="year">2013</span>
                                </div>
                            </div>
                            <h3><a href="#">Час пик или праздник живота</a></h3>
                            Максимум программирует невероятный функциональный анализ, явно демонстрируя всю чушь
                            вышесказанного.
                            Отсюда естественно следует, что рациональное число переворачивает интеграл по бесконечной
                            области.

                            <div class="button-block">
                                <div class="wrapper">
                                    <div class="separator"></div>
                                    <a href="#" class="more-button-red">Весь блог</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="third">
                        <div class="photo-news blured-bg-block bbb-button stretch-block" row="3">
                            <h2>Фотоотчеты</h2>

                            <div class="separator"></div>

                            <div class="item">
                                <a href="#" class="transform">
                                    <div class="images">
                                        <i class="count" title="В альбоме 20 фотографий">20</i>
                                        <img class="img-1" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/1.jpg">
                                        <img class="img-2" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/2.jpg">
                                        <img class="img-3" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/3.jpg">
                                    </div>

                                    <div class="text">
                                        <h3>Забей на дачу, лови удачу!</h3>
                                        <div class="date">26 июля, 2013</div>
                                    </div>

                                    <div class="clear"></div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="transform">
                                    <div class="images">
                                        <i class="count" title="В альбоме 12 фотографий">12</i>
                                        <img class="img-1" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/2.jpg">
                                        <img class="img-2" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/3.jpg">
                                        <img class="img-3" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/1.jpg">
                                    </div>

                                    <div class="text">
                                        <h3>Час пик или праздник живота</h3>
                                        <div class="date">25 июля, 2013</div>
                                    </div>

                                    <div class="clear"></div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="transform">
                                    <div class="images">
                                        <i class="count" title="В альбоме 43 фотографии">43</i>
                                        <img class="img-1" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/3.jpg">
                                        <img class="img-2" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/2.jpg">
                                        <img class="img-3" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/1.jpg">
                                    </div>

                                    <div class="text">
                                        <h3>Усама party</h3>
                                        <div class="date">24 июля, 2013</div>
                                    </div>

                                    <div class="clear"></div>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="transform">
                                    <div class="images">
                                        <i class="count" title="В альбоме 12 фотографий">12</i>
                                        <img class="img-1" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/2.jpg">
                                        <img class="img-2" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/3.jpg">
                                        <img class="img-3" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/art/1.jpg">
                                    </div>

                                    <div class="text">
                                        <h3>Час пик или праздник живота</h3>
                                        <div class="date">25 июля, 2013</div>
                                    </div>

                                    <div class="clear"></div>
                                </a>
                            </div>

                            <div class="button-block">
                                <div class="wrapper">
                                    <div class="separator"></div>
                                    <a href="#" class="more-button-red">Все фотоотчеты</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="third">
                        <div class="blured-bg-block stretch-block bbb-button" row="3">
                            <h2>Акции</h2>

                            <div class="separator"></div>

                            <div class="promo-item">
                                <h3><a href="#">Час пик или праздник живота</a></h3>
                                <a href="#"><img class="img-1" title="Час пик или праздник живота" alt="Час пик или праздник живота" src="img/banners/Rifw1F7TN7A.jpg"></a>
                            </div>

                            <div class="button-block">
                                <div class="wrapper">
                                    <div class="separator"></div>
                                    <a href="#" class="more-button-red">Все акции</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="limiter center transform">
        <footer class="content-footer content-lim transform">
            <div class="content">
                <div class="row container">
                    <div class="third">
                        <nav class="bottom-nav">
                            <a href="#">Афиша</a>
                            <a href="#">Блог</a>
                            <a href="#">Фото и видео</a>
                            <a href="#">Меню</a>
                        </nav>
                    </div>
                    <div class="third">
                        <nav class="bottom-nav">
                            <a href="#">Акции</a>
                            <a href="#">Контакты</a>
                            <a href="#">Схема проезда</a>
                            <a href="#">Бронирование столиков</a>
                        </nav>
                    </div>
                    <div class="third">
                        <div class="socials">
                            <div class="text-centered gray">Chesterfield в социальных сетях</div>
                            <div class="row container">
                                <div class="third"><a class="fb transform" href="#"></a></div>
                                <div class="third"><a class="tw transform" href="#"></a></div>
                                <div class="third"><a class="gp transform" href="#"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="limiter center transform">
        <footer class="bottom-info content-lim transform">
            <div class="content">
                <div class="row">
                    <div class="half">
                        <div style="margin-left: 15px">&copy; 2013 Бар, ресторан и ночной клуб Chesterfield</div>
                    </div>
                    <div class="half text-right">
                        <div style="margin-right: 15px"><a href="mailto:info@chester-bar.ru">info@chester-bar.ru</a></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>