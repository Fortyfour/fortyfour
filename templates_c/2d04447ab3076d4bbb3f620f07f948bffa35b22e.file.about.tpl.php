<?php /* Smarty version Smarty 3.1.4, created on 2014-01-09 13:41:31
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173273836652ce699675f1a7-49222211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d04447ab3076d4bbb3f620f07f948bffa35b22e' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/about.tpl',
      1 => 1389260475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173273836652ce699675f1a7-49222211',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce69968ab10',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce69968ab10')) {function content_52ce69968ab10($_smarty_tpl) {?><!DOCTYPE html>
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
            <div class="inner-block">
                <?php echo $_smarty_tpl->getSubTemplate ("include/common/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


                <h1><?php echo $_smarty_tpl->tpl_vars['core']->value->page['h1'];?>
</h1>

                <hr>

                <?php echo $_smarty_tpl->tpl_vars['core']->value->page['content'];?>

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