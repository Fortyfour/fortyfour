<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:02:17
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4831608865314613983a740-92189828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3017f9a5dff5f10cdc060572c729d9282c23499f' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/templates/include/common/head.tpl',
      1 => 1393844130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4831608865314613983a740-92189828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_5314613986927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5314613986927')) {function content_5314613986927($_smarty_tpl) {?><title><?php echo $_smarty_tpl->tpl_vars['core']->value->page['title'];?>
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