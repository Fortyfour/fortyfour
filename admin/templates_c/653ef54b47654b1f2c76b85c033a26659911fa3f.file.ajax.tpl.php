<?php /* Smarty version Smarty 3.1.4, created on 2014-10-30 21:01:47
         compiled from "/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103834627354526efbceede4-42737998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653ef54b47654b1f2c76b85c033a26659911fa3f' => 
    array (
      0 => '/home/fortyfour/web/fortyfour.ru/public_html/admin/templates/system/ajax.tpl',
      1 => 1411668638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103834627354526efbceede4-42737998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_54526efbd3d26',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54526efbd3d26')) {function content_54526efbd3d26($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['main']->value->ajax_content=='include'){?>
    <?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['ajax_include']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('new'=>$_GET['new']), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->tpl_vars['main']->value->ajax_content;?>

<?php }?>
<?php }} ?>