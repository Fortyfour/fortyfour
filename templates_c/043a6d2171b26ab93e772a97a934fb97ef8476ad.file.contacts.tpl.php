<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 13:24:32
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51459969152ce6991213e47-86447424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043a6d2171b26ab93e772a97a934fb97ef8476ad' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/contacts.tpl',
      1 => 1393676169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51459969152ce6991213e47-86447424',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce699142cfd',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce699142cfd')) {function content_52ce699142cfd($_smarty_tpl) {?><!DOCTYPE html>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/header-inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </header>

    <div class="content-inner">
        <div class="horizontal-limiter">
            <div class="inner-block" style="padding-bottom: 0">

                <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

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
                                Москва, деревня Румянцево,<br>БП &laquo;Румянцево&raquo;, строение 1,<br>корпус Б, офис 525-Б
                            </div>
                        </div>

                        <div class="units-row-end table-row-socials">
                            <div class="unit-40">
                                <span class="color-gray">В соцсетях</span>
                            </div>
                            <div class="unit-60">
                                <div class="social">
                                    <a class="twitter" href="https://twitter.com/fortyfourmedia">Твиттер</a>
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
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </footer>
</div>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>