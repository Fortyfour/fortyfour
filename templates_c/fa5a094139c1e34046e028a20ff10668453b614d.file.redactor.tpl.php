<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 13:23:24
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/redactor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26074376152ce9bcc0349b4-77659991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa5a094139c1e34046e028a20ff10668453b614d' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/redactor.tpl',
      1 => 1393838603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26074376152ce9bcc0349b4-77659991',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce9bcc2367e',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce9bcc2367e')) {function content_52ce9bcc2367e($_smarty_tpl) {?><!DOCTYPE html>
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

    <div class="content-inner project">
        <div class="horizontal-limiter">

            <div class="inner-block redactor-bg">
                <div class="light-bg">
                    <img class="logo" src="/resources/img/materials/banner-rdc.png">

                    <h1 class="text-centered">Редактор</h1>

                    <div class="units-row-end">
                        <div class="unit-75 unit-centered">
                            <p class="lead text-centered">
                                Удобая многофункциональная<br>система управления сайтом
                            </p>
                        </div>
                    </div>

                    <div class="rdc-info">
                        <div class="ribbon">Система распостраняется бесплатно,<br>при заказе разрабоки сайта</div>

                        <div class="left">
                            <ul class="custom-bullets-list">
                                <li>Масштабируемость</li>
                                <li>Высокая скорость работы</li>
                                <li>Простота управления</li>
                                <li>Редактор модулей</li>
                                <li>Хороший дизайн</li>
                            </ul>
                        </div>

                        <div class="central">
                            <ul class="custom-bullets-list">
                                <li>Бесплатно при заказе сайта</li>
                                <li>Легкость интеграции</li>
                                <li>Нелинейная архитектура</li>
                                <li>Возможность реализовать любой проект</li>
                            </ul>
                        </div>

                        <div class="right">
                            <a href="/projects/redactor"><img src="/resources/img/slider/redactor-macbook-2.png" alt="Редактор CMS" title="Редактор CMS"/></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inner-block" style="padding-top: 0">
                <div class="screenshots">
                    <h3>Скриншоты</h3>

                    <div class="units-row-end">


                        <div class="item unit-25">
                            <a class="fancybox" rel="gallery" href="/resources/img/materials/rdc/screenshots/5.png"><img src="/resources/img/materials/rdc/screenshots/5.png" alt=""/></a>
                            <span>Структура сайта</span>
                        </div>

                        <div class="item unit-25">
                            <a class="fancybox" rel="gallery" href="/resources/img/materials/rdc/screenshots/1.png"><img src="/resources/img/materials/rdc/screenshots/1.png" alt=""/></a>
                            <span>Список объектов модуля</span>
                        </div>

                        <div class="item unit-25">
                            <a class="fancybox" rel="gallery" href="/resources/img/materials/rdc/screenshots/3.png"><img src="/resources/img/materials/rdc/screenshots/3.png" alt=""/></a>
                            <span>Редактирование модуля</span>
                        </div>

                        <div class="item unit-25">
                            <a class="fancybox" rel="gallery" href="/resources/img/materials/rdc/screenshots/4.png"><img src="/resources/img/materials/rdc/screenshots/4.png" alt=""/></a>
                            <span>Редактирование объекта</span>
                        </div>
                    </div>
                </div>

                <h3>Редактируемые модули &mdash; вы сами диктуете, какая функциональность должна быть в системе управления сайтом!</h3>

                <div class="units-row-end">
                    <div class="unit-50">
                        <p>
                            В&nbsp;Редакторе можно создать собственные модули с&nbsp;любым набором данных,
                            будь&nbsp;то&nbsp;каталог фильмов, список режиссеров, или каталог трейлеров.
                        </p>
                    </div>

                    <div class="unit-50">
                        <p>
                            Затем можно связать модули между собой, указав, к какому фильму относится
                            тот&nbsp;или&nbsp;иной режиссер, а&nbsp;так&nbsp;же&nbsp;привязать к&nbsp;этому
                            фильму его трелер из&nbsp;соответствующего модуля.
                        </p>
                    </div>
                </div>


                <div class="toolbox">
                    <h3>Редактор полей</h3>

                    <p>
                        Редактор полей позволяет создать любой необходимый набор данных<br>и форму для редактирования,
                        всего у каждого модуля доступно 18 типов полей:
                    </p>

                    <br/>
                    <br/>

                    <ul>
                        <li rel="checkbox" title="Переключатель (включено/откючено)">
                            <span><i class="icon switch"></i>Переключатель</span>
                        </li>

                        <li rel="textfield" title="Строка (текст, число или адрес электронной почты)">
                            <span><i class="icon text"></i>Текстовое поле</span>
                        </li>

                        <li rel="textarea" title="Текстовое поле с редактированием для внесения HTML-данных">
                            <span><i class="icon textarea"></i>Текстовый редактор</span>
                        </li>

                        <li rel="param" title="Строка с указанием префикса и суффикса (текст или число)">
                            <span><i class="icon param"></i>Параметр</span>
                        </li>

                        <li rel="catalog" title="Каталог">
                            <span><i class="icon catalog"></i>Каталог</span>
                        </li>

                        <li rel="tags" title="Инструмент для добавления тегов">
                            <span><i class="icon tags"></i>Теги</span>
                        </li>

                        <li rel="url" title="Строка, фильтрующая непригодные для URL символы">
                            <span><i class="icon url"></i>URL-адрес</span>
                        </li>

                        <li rel="slider" title="Инструмент для выбора значения из заданного диапазона">
                            <span><i class="icon range"></i>Диапазон значений</span>
                        </li>

                        <li rel="select" title="Выпадающий список, использующий данные из другого раздела или указанные параметры">
                            <span><i class="icon list"></i>Список</span>
                        </li>

                        <li rel="multiselect" title="Список, использующий данные из другого раздела или указанные параметры, с возможностью выбора нескольких позиций одновременно">
                            <span><i class="icon multilist"></i>Мультисписок</span>
                        </li>

                        <li rel="color_picker" title="Инстумент выбора цвета">
                            <span><i class="icon palette"></i>Палитра</span>
                        </li>

                        <li rel="calendar" title="Инструмент для выбора даты и времени">
                            <span><i class="icon date"></i>Дата и время</span>
                        </li>

                        <li rel="image" title="Инструмент для загрузки одной картинки">
                            <span><i class="icon picture"></i>Картинка</span>
                        </li>

                        <li rel="gallery" title="Инструмент для загрузки нескольких фоторгафий">
                            <span><i class="icon gallery"></i>Фотогалерея</span>
                        </li>

                        <li rel="file" title="Инструмент для загрузки одного файла">
                            <span><i class="icon file"></i>Файл</span>
                        </li>

                        <li rel="multifile" title="Инструмент для загрузки нескольких файлов">
                            <span><i class="icon multifile"></i>Список файлов</span>
                        </li>

                        <li rel="map" title="Инструмент для выбора координат на картах">
                            <span><i class="icon mapicon"></i>Карта</span>
                        </li>

                        <li rel="splitter" title="Визуальный разделитель полей форм">
                            <span><i class="icon separator"></i>Разделитель</span>
                        </li>

                        <div class="clear"></div>
                    </ul>
                </div>

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
    </div>

    <footer class="footer">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </footer>
</div>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>