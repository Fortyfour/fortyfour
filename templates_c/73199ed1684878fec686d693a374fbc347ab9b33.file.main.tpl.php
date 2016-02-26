<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 10:33:10
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131777665354265a26ef8f90-69819649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73199ed1684878fec686d693a374fbc347ab9b33' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/main.tpl',
      1 => 1411668490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131777665354265a26ef8f90-69819649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54265a2707447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54265a2707447')) {function content_54265a2707447($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/home/fortyfour/web/fortyfour.ru/public_html/smarty/plugins/modifier.date.php';
?><!DOCTYPE HTML>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>

<div class="background-top">
    <ul id="scene">
        <li class="layer" data-depth="0.10"><img src="/resources/img/parallax/space/1.png"></li>
        <li class="layer" data-depth="0.20"><img src="/resources/img/parallax/space/2.png"></li>
        <li class="layer" data-depth="0.30"><img src="/resources/img/parallax/space/3.png"></li>
        <li class="layer" data-depth="0.60"><img src="/resources/img/parallax/space/4.png"></li>
        <li class="layer" data-depth="1.30"><img src="/resources/img/parallax/space/5.png"></li>
    </ul>
</div>

<div class="wrapper">

<header class="header-mainpage">
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/header-mainpage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</header>

<div class="content-mainpage">
    <div class="horizontal-limiter">

        <?php echo $_smarty_tpl->getSubTemplate ("include/blocks/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div class="front-row-icons">
            <div class="units-row-end">
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
        </div>

        <div class="inner-block">
            <div class="units-row-end">
                <div class="unit-50">
                    <h3>Отличный результат за хорошую цену</h3>

                    Мы&nbsp;поможем вам создать действительно хороший сайт.<br>
                    У нас за плечами большой опыт разработки, который помогает нам ваши решать задачи быстрее,
                    что дает нам возможность устанавливать более низкие цены на качественные услуги.
                    Вы&nbsp;останетесь довольны результатом.
                </div>

                <div class="unit-50">
                    <h3>Сайт работает как швейцарские часы</h3>

                    Мы&nbsp;разработали множество технических решений, начиная с&nbsp;серверного&nbsp;ПО,
                    заканчивая веб-фреймворками и&nbsp;дизайн-прототипами. Это позволяет нам быстро
                    находить решение именно для ваших бизнес-задач. При этом, решение создается
                    уникальным, производительным и&nbsp;отлаженным, предоставляя отличный сервис.
                </div>
            </div>
        </div>

        <div class="portfolio">
            <div class="portfolio-inner" style="background-position: 0 98px">
                <h2 class="giant">Наши работы<i class="heart-icon"></i></h2>

                <a href="/portfolio" class="button big yellow dive-in-button">Все работы &rarr;</a>

                <?php echo $_smarty_tpl->getSubTemplate ("include/common/portfolio-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['core']->value->getPortfolio(12)), 0);?>


                <div class="clear"></div>

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

        <div class="inner-block news-shortlist">
            <h2>Последние записи в блоге</h2>

            <a href="/blog" class="button red">Весь блог &rarr;</a>

            <div class="units-row-end">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value->getNewsShort(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <div class="unit-50">
                        <div class="head">
                            <div class="date">
                                <span class="bar">
                                    <i class="pin-l"></i>
                                    <i class="pin-r"></i>
                                </span>

                                <span class="day"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['date'],"d");?>
</span>
                                <span class="month"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['date'],"m");?>
</span>
                                <span class="year"><?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['item']->value['date'],"y");?>
</span>
                            </div>

                            <h3><a class="black-link" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['structure_name'];?>
</a></h3>
                        </div>

                        <?php echo $_smarty_tpl->tpl_vars['item']->value['announce'];?>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>

<script src="/resources/js/parallax.js"></script>

<script>
    $(function(){
        $('#scene').parallax({
            calibrateX: false,
            calibrateY: false,
            invertX: true,
            invertY: true,
            limitX: false,
            limitY: 10,
            scalarX: 5,
            scalarY: 9,
            frictionX: 0.2,
            frictionY: 0.8
        });
    });
</script>

<?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>