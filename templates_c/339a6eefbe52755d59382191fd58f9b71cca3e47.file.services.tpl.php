<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:26:03
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/services.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043638380531463a07e93d1-37670335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '339a6eefbe52755d59382191fd58f9b71cca3e47' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/services.tpl',
      1 => 1393845913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043638380531463a07e93d1-37670335',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531463a0ac769',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531463a0ac769')) {function content_531463a0ac769($_smarty_tpl) {?><!DOCTYPE html>
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
            <div class="inner-block services-inner">
                <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

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
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </footer>
</div>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>