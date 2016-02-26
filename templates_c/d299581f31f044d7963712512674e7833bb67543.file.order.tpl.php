<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 14:50:21
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47945778452ee9e406baf95-08075259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd299581f31f044d7963712512674e7833bb67543' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/order.tpl',
      1 => 1393843683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47945778452ee9e406baf95-08075259',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ee9e4099718',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ee9e4099718')) {function content_52ee9e4099718($_smarty_tpl) {?><!DOCTYPE html>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/header-inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </header>

    <div class="content-inner">
        <div class="horizontal-limiter">
            <div class="inner-block">
                <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

                <hr>

                <div class="content-prefix">
                    <h3>Шаг 1 из 4 <span class="color-gray" style="font-weight: normal">&mdash; выбор типа проекта</span></h3>

                    Выберите пожалуйста тип интересующего вас&nbsp;проекта
                    и жмите кнопку &laquo;Продолжить&raquo;.
                </div>

                <div class="units-row-end">
                    <div class="unit-75">
                        <div class="calc">
                            <div class="select step-content" data-step="1">
                                <a href="#" data-type="1">
                                    <i class="hot"></i>
                                    <img class="icon" src="/resources/img/icons/basket.png" alt="Интернет-магазин">
                                    <span class="name">Интернет-магазин</span>
                                    <span class="desc">
                                        Начните расширение торговли в интернете.
                                        Интернет-магазины любого уровня сложности от&nbsp;мини до&nbsp;мега-маркета.
                                    </span>
                                </a>

                                <a href="#" data-type="2">
                                    <img class="icon" src="/resources/img/icons/mountain.png" alt="Корпоративный сайт">
                                    <span class="name">Корпоративный сайт</span>
                                    <span class="desc">
                                        Подходит средним и&nbsp;крупным компаниям,
                                        которые хотят открыть или расширить свое представительство в&nbsp;интернете.
                                    </span>
                                </a>

                                <a href="#" data-type="3">
                                    <img class="icon" src="/resources/img/icons/dude.png" alt="Сайт-визитка">
                                    <span class="name">Сайт-визитка</span>
                                    <span class="desc">
                                        Если у&nbsp;вас стартап или вы,&nbsp;скажем, фотограф, либо руководите малым предприятием,
                                        сайт-визитка поможет укрепить доверие ваших клиентов.
                                    </span>
                                </a>

                                <a href="#" data-type="4">
                                    <img class="icon" src="/resources/img/icons/calc.png" alt="Собрать свой проект">
                                    <span class="name">Собрать свой проект</span>
                                    <span class="desc">
                                        Если вы не можете определиться, к&nbsp;какому типу принадлежит ваша задумка,
                                        то воспользуйтесь конструктором без ограничений.
                                    </span>
                                </a>
                            </div>

                            <br class="step-content" data-step="1">

                            <div class="select step-content" data-step="1">
                                <a href="#" data-type="5" class="common-feedback-opener">
                                    <img class="icon" src="/resources/img/icons/envelope.png" alt="Просто оставить заявку">
                                    <span class="name">Просто оставить заявку</span>
                                    <span class="desc">
                                        Если вы не можете определиться с&nbsp;функциональной частью проекта,
                                        можете просто оставить заявку с&nbsp;пожеланиями в&nbsp;текстовом виде.
                                    </span>
                                </a>
                            </div>

                            <div class="items step-content" data-step="2" style="display: none">&nbsp;</div>

                            <div class="form step-content" data-step="3" style="display: none">
                                <form action="" class="forms forms-columnar" id="project-details-form">
                                    <p>
                                        <label>Желаемая дата реализации
                                            <ul class="forms-inline-list">
                                                <li>
                                                    <select id="date-month">
                                                        <option value="">–</option>
                                                        <option value="Январь">Январь</option>
                                                        <option value="Февраль">Февраль</option>
                                                        <option value="Март">Март</option>
                                                        <option value="Апрель">Апрель</option>
                                                        <option value="Май">Май</option>
                                                        <option value="Июнь">Июнь</option>
                                                        <option value="Июль">Июль</option>
                                                        <option value="Август">Август</option>
                                                        <option value="Сентябрь">Сентябрь</option>
                                                        <option value="Октябрь">Октябрь</option>
                                                        <option value="Ноябрь">Ноябрь</option>
                                                        <option value="Декабрь">Декабрь</option>
                                                    </select>
                                                    <div class="forms-desc">Месяц</div>
                                                </li>
                                                <li>
                                                    <select id="date-year">
                                                        <option value="">–</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                    </select>
                                                    <div class="forms-desc">Год</div>
                                                </li>
                                            </ul>
                                        </label>
                                    </p>

                                    <p>
                                        <label for="domain">Доменное имя</label>
                                        <input type="text" name="domain" id="domain" class="width-100" />
                                        <span class="forms-desc">Например: <em>mysite.ru</em></span>
                                    </p>

                                    <p>
                                        <label for="oldsite">Есть ли у вас сайт</label>
                                        <input type="text" name="oldsite" id="oldsite" class="width-100" />
                                        <span class="forms-desc">Введите назнание или адрес</span>
                                    </p>

                                    <p>
                                        <label for="sphere">Сфера деятельности</label>
                                        <input type="text" name="sphere" id="sphere" class="width-100" />
                                        <span class="forms-desc">Например: <em>разработка программного обеспечения</em></span>
                                    </p>

                                    <p>
                                        <label for="concurents">Ваши конкуренты</label>
                                        <textarea name="concurents" id="concurents" rows="5" class="width-100"></textarea>
                                    </p>

                                    <p>
                                        <label for="like">Сайты, которые вам нравятся</label>
                                        <textarea name="like" id="like" rows="5" class="width-100"></textarea>
                                    </p>

                                    <p>
                                        <label for="user-message">Комментарии к&nbsp;проекту</label>
                                        <textarea name="user-message" id="user-message" rows="5" class="width-100"></textarea>
                                    </p>
                                </form>
                                <br />
                            </div>

                            <div class="form step-content" data-step="4" style="display: none">

                                <div class="form-error"></div>

                                <form action="" class="forms forms-columnar" id="project-contacts-form">
                                    <p>
                                        <label for="username">Ваше имя</label>
                                        <input type="text" name="username" id="username" class="width-50" />
                                    </p>

                                    <p>
                                        <label for="email">Электронная почта</label>
                                        <input type="email" name="email" id="email" class="width-50" />
                                    </p>

                                    <p>
                                        <label for="phone">Телефон</label>
                                        <input type="text" name="phone" id="phone" class="width-50" />
                                        <span class="forms-desc">В любом формате</span>
                                    </p>
                                </form>
                                <br />
                            </div>
                        </div>
                    </div>

                    <div class="unit-25">
                        <div class="side-panel">
                            <div id="order-params"></div>
                            <div id="no-selection" class="color-gray">Выберите тип проекта</div>

                            <hr />

                            <a href="#" class="next button blue width-100 disabled">Продолжить</a>
                        </div>

                        <div class="additional-side-info">
                            <em class="small color-gray">
                                <span class="optical-ls">*</span>
                                Стоимость проекта указана для примерного понимания. Окончательную цену можно уточнить после общения с&nbsp;менеджером.
                            </em>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </footer>
</div>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>