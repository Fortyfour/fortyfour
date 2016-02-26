<?php /* Smarty version Smarty 3.1.4, created on 2014-03-01 16:43:17
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92914159652ce68edf0eed4-52380506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7642e38d582344b08cb39868d12e02729a4dc079' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/footer.tpl',
      1 => 1393677796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92914159652ce68edf0eed4-52380506',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce68ee08298',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce68ee08298')) {function content_52ce68ee08298($_smarty_tpl) {?><footer class="footer">
    <div class="horizontal-limiter">
        <div class="inner-block">
            <div class="units-row-end">
                <div class="unit-50">
                    +7 (926) 960-40-20<br>
                    <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','main_email');?>
"><?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','main_email');?>
</a><br><br>
                    Москва, деревня Румянцево,<br>БП &laquo;Румянцево&raquo;, строение 1, корпус Б, офис 525-Б
                </div>

                <div class="unit-25">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="/about">О компании</a></li>
                            <li><a href="/portfolio">Портфолио</a></li>
                            <li><a href="/services">Услуги</a></li>
                        </ul>
                    </div>

                    <br>

                    <nobr>
                        &copy; <?php if ($_smarty_tpl->tpl_vars['core']->value->getConstant('common','start_year')<date('Y')){?><?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','start_year');?>
&ndash;<?php }?><?php echo date('Y');?>


                        <?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('common','brand_name');?>

                    </nobr>
                </div>

                <div class="unit-25">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="/projects">Проекты</a></li>
                            <li><a href="/blog">Блог</a></li>
                            <li><a href="/contacts">Контакты</a></li>
                        </ul>
                    </div>

                    <br>

                    <a href="/sitemap">Карта сайта</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php }} ?>