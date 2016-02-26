<?php /* Smarty version Smarty 3.1.4, created on 2014-09-27 10:33:11
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42383176354265a2707c842-91410409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95e791a60660d4a13108d0a2c7c0ef485d7173fd' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/templates/include/common/head.tpl',
      1 => 1411668489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42383176354265a2707c842-91410409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54265a270993f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54265a270993f')) {function content_54265a270993f($_smarty_tpl) {?><title><?php echo $_smarty_tpl->tpl_vars['core']->value->page['title'];?>
</title>

<meta charset="utf-8">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=1000, maximum-scale=1">

<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['core']->value->page['description'];?>
" />
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['core']->value->page['keywords'];?>
" />

<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="/resources/css/style.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="/resources/plugins/social-likes/social-likes.css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="/resources/plugins/fancybox/source/jquery.fancybox.css" media="screen, projection">

<script src="/resources/js/jquery.js"></script>
<script src="/resources/plugins/social-likes/social-likes.min.js"></script>
<script src="/resources/plugins/flux/flux.js"></script>
<script src="/resources/plugins/fancybox/source/jquery.fancybox.pack.js"></script>

<!--[if lt IE 9]>
<script src="/resources/kube/js/html5.js"></script>
<![endif]-->

<script src="/resources/js/jquery.animate-colors-min.js"></script>
<script src="/resources/js/core.js"></script>
<script src="/resources/js/calc.js"></script>

<?php echo $_smarty_tpl->tpl_vars['core']->value->getConstant('scripts','head_code');?>
<?php }} ?>