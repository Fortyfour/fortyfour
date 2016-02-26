<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:01:06
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/modules/portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12281163531460f2e15867-38102283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fd62024a783de47f787058a13547b2069372643' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/modules/portfolio.tpl',
      1 => 1393844132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12281163531460f2e15867-38102283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531460fd18af1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531460fd18af1')) {function content_531460fd18af1($_smarty_tpl) {?><div class="portfolio">
    <div class="portfolio-inner" style="background-position: 0 -39px">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div class="relative">
            <nav class="submenu">
                <a <?php if ($_GET['type']=='sites'){?>class="active"<?php }?> href="/portfolio?type=sites">Сайты</a>
                <a <?php if ($_GET['type']=='applications'){?>class="active"<?php }?> href="/portfolio?type=applications">Приложения</a>
                <a <?php if ($_GET['type']=='logotypes'){?>class="active"<?php }?> href="/portfolio?type=logotypes">Логотипы</a>
                <a <?php if (!$_GET['type']){?>class="active"<?php }?> href="/portfolio">Все</a>
            </nav>

            <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>
        </div>

        <hr class="dark">

        <?php echo $_smarty_tpl->getSubTemplate ("include/common/portfolio-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('items'=>$_smarty_tpl->tpl_vars['core']->value->getPortfolio(false,$_GET['type'])), 0);?>


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
</div><?php }} ?>