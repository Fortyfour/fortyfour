<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:02:17
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93809670531461397d19c2-67889896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924cb13408bef6c4fc1f6e4ba1ce67609dd2bd00' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/portfolio.tpl',
      1 => 1393844133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93809670531461397d19c2-67889896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146139832a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146139832a8')) {function content_53146139832a8($_smarty_tpl) {?><!DOCTYPE html>
<html style="background: #eee url(/resources/img/patterns/pattern-white.png) top center;">
<head>
    <?php echo $_smarty_tpl->getSubTemplate ("include/common/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

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
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/header-inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    </header>

    <div class="content-inner">
        <div class="horizontal-limiter">
            <?php echo $_smarty_tpl->tpl_vars['core']->value->page['content'];?>

        </div>
    </div>

    <footer class="footer">
        <?php echo $_smarty_tpl->getSubTemplate ("include/common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    </footer>
</div>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','body_code');?>


</body>
</html><?php }} ?>