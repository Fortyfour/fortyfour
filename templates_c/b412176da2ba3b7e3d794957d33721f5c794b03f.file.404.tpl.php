<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 13:30:39
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2122501185542683bf4ce340-16244926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b412176da2ba3b7e3d794957d33721f5c794b03f' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/404.tpl',
      1 => 1411668487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2122501185542683bf4ce340-16244926',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_542683bf4f945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542683bf4f945')) {function content_542683bf4f945($_smarty_tpl) {?><!DOCTYPE html>
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