<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:02:17
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:525290596531461398d2ff4-59180232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2e00aa93a7bbf1f5a363e0caeb8778e298b4fdb' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/footer.tpl',
      1 => 1393844130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '525290596531461398d2ff4-59180232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531461399288e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531461399288e')) {function content_531461399288e($_smarty_tpl) {?><footer class="footer">
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