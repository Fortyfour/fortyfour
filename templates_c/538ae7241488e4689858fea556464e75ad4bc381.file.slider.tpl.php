<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 10:33:11
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/include/blocks/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212109521754265a270cf7b9-21623808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '538ae7241488e4689858fea556464e75ad4bc381' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/include/blocks/slider.tpl',
      1 => 1411668488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212109521754265a270cf7b9-21623808',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54265a270f299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54265a270f299')) {function content_54265a270f299($_smarty_tpl) {?><div class="slider">
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