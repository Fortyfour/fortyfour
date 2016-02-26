<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 14:59:50
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1293609141531460a6c2cc66-99623053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf20eb42c4ff20c75b79b2f5a1ec4636830ef270' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/404.tpl',
      1 => 1393844128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293609141531460a6c2cc66-99623053',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531460a6caa89',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531460a6caa89')) {function content_531460a6caa89($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
<div class="wrapper">
    <header class="header-inner">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/header-inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </header>

    <div class="content-inner">
        <div class="horizontal-limiter">
            <div class="inner-block" style="background: #eee url(../resources/img/patterns/furley_bg.png)">

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