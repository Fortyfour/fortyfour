<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:03:03
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:963469506531461678b1d00-74489343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f05f9905e9ab2e7ff44bf08234880cf9e43fb4d6' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/ajax.tpl',
      1 => 1393844285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963469506531461678b1d00-74489343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_531461679cd5a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531461679cd5a')) {function content_531461679cd5a($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['main']->value->ajax_content=='include'){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['ajax_include']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('new'=>$_GET['new']), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['main']->value->ajax_content;?>

<?php }?>
<?php }} ?>