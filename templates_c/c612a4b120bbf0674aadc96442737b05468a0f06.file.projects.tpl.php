<?php /* Smarty version Smarty 3.1.4, created on 2014-03-01 16:37:09
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26774063552ce6b8e727907-81358288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c612a4b120bbf0674aadc96442737b05468a0f06' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/projects.tpl',
      1 => 1393676568,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26774063552ce6b8e727907-81358288',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce6b8e8a34d',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce6b8e8a34d')) {function content_52ce6b8e8a34d($_smarty_tpl) {?><!DOCTYPE html>
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
            <div class="inner-block rounded-bg dark-blue">
                <h1 class="text-centered">Проекты</h1>

                <hr class="dark">

                <div class="units-row">
                    <div class="unit-75 unit-centered">
                        <p class="lead text-centered">
                            Мы&nbsp;не&nbsp;только разрабатываем сайты, интеренет-магазины и&nbsp;веб-приложения.
                            У&nbsp;нас так&nbsp;же есть и&nbsp;свои замечательные проекты
                        </p>
                    </div>
                </div>

                <div class="projects">
                    <div class="units-row">
                        <div class="unit-33">
                            <a class="item rdc dark" href="/projects/redactor">
                                <i class="free"></i>
                                <img class="icon" src="/resources/img/materials/banner-rdc.png" alt="Редактор">
                                <h2 class="name">Редактор</h2>
                                <span class="desc">Удобая многофункциональная система управления сайтом</span>
                            </a>
                        </div>

                        <div class="unit-33">
                            <a class="item" href="/projects/hosting">
                                <img class="icon" src="/resources/img/materials/banner-hosting.png" alt="Хостинг">
                                <h2 class="name">Хостинг</h2>
                                <span class="desc">Простой, надежный хостинг и&nbsp;администрирование</span>
                            </a>
                        </div>

                        <div class="unit-33">
                            <a class="item pt" href="http://pt-app.ru">
                                <h2 class="name">Pt-app.ru</h2>
                                <span class="desc">Периодическая система химических элементов</span>
                            </a>
                        </div>


                    </div>

                    <br>

                    <div class="units-row-end">
                        <div class="unit-33">
                            <div class="item cartrek semi">
                                <i class="soon"></i>
                                <img class="icon" src="/resources/img/materials/banner-cartrek.png" alt="Картрек">
                                <h2 class="name">Картрек</h2>
                                <span class="desc">Система мониторинга автотранспорта</span>
                            </div>
                        </div>

                        <div class="unit-33">
                            <div class="item manager semi">
                                <i class="soon"></i>
                                <img class="icon" src="/resources/img/materials/banner-manager.png" alt="Менеджер">
                                <h2 class="name">Менеджер</h2>
                                <span class="desc">Сервис для менеджеров<br>и бухгалтеров</span>
                            </div>
                        </div>

                        <div class="unit-33">
                            <span class="item empty"></span>
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