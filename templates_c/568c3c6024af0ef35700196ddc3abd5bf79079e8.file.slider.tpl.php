<?php /* Smarty version Smarty 3.1.4, created on 2014-03-30 13:32:21
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/blocks/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19837421835314609e47beb0-33616890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568c3c6024af0ef35700196ddc3abd5bf79079e8' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/blocks/slider.tpl',
      1 => 1396171937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19837421835314609e47beb0-33616890',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5314609e4b610',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5314609e4b610')) {function content_5314609e4b610($_smarty_tpl) {?><div class="slider">
    <div class="progress-bar-container">
        <i class="progress-bar"></i>
    </div>

    <div class="panel">
        <a class="page active" rel="0" href="#"><i></i></a>
        <a class="page" rel="1" href="#"><i></i></a>
    </div>

    <div class="slider-viewport">
        <div class="slider-container">
            <div class="slide active" rel="0">
                <h1 class="ready">Начните создание сайта<br>прямо сейчас!</h1>

                <div class="left left-text ready" style="padding-top: 2.75em">
                    Попробуйте наш конструктор заказов, он&nbsp;поможет вам определиться с&nbsp;функциональностью,
                    а&nbsp;так же&nbsp;покажет конечную стоимость будущего сайта, это интересно!
                </div>

                <div class="right ready">
                    <a href="/order"><img src="/resources/img/slider/calc-n-rows.png" alt="Конструктор заказа сайта"
                                          title="Конструктор заказа сайта"/></a>
                </div>

                <a href="/order" class="button big blue ready">Собрать свой сайт</a>
            </div>

            <div class="slide" rel="1">
                <h1>CMS &laquo;Редактор&raquo;</h1>

                <div class="left">
                    <ul>
                        <li>Масштабируемость</li>
                        <li>Высокая скорость работы</li>
                        <li>Простота управления</li>
                        <li>Редактор модулей</li>
                        <li>Хороший дизайн</li>
                    </ul>
                </div>

                <div class="central">
                    <ul>
                        <li>Бесплатно при заказе сайта</li>
                        <li>Легкость интеграции</li>
                        <li>Нелинейная архитектура</li>
                        <li>Возможность реализовать любой проект</li>
                    </ul>
                </div>

                <div class="right">
                    <a href="/projects/redactor"><img src="/resources/img/slider/redactor-macbook-2.png" alt="Редактор CMS" title="Редактор CMS"/></a>
                </div>

                <a href="/projects/redactor" class="button big blue">Посмотреть подробнее</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        slider.init();
    });
</script><?php }} ?>