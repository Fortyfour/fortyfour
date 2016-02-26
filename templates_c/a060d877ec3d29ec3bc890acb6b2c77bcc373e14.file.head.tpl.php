<?php /* Smarty version Smarty 3.1.4, created on 2014-03-01 20:05:23
         compiled from "/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56093331252ce68edc931e0-11584930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a060d877ec3d29ec3bc890acb6b2c77bcc373e14' => 
    array (
      0 => '/Volumes/Black/Users/Ruslan/Sites/fortyfour/templates/include/common/head.tpl',
      1 => 1393689922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56093331252ce68edc931e0-11584930',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_52ce68edce921',
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce68edce921')) {function content_52ce68edce921($_smarty_tpl) {?><title><?php echo $_smarty_tpl->tpl_vars['core']->value->page['title'];?>
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