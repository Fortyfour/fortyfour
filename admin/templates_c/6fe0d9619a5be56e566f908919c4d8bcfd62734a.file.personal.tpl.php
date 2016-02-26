<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:03:00
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127457455153146164a1ee84-76575238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe0d9619a5be56e566f908919c4d8bcfd62734a' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/modules/personal.tpl',
      1 => 1393844282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127457455153146164a1ee84-76575238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146164acfd1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146164acfd1')) {function content_53146164acfd1($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['main']->value->h1;?>
</h1>

<div class="left_col">
    <?php if ($_smarty_tpl->tpl_vars['main']->value->module_mode=='settings'){?>
        <?php echo $_smarty_tpl->getSubTemplate ("modules/personal.settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['main']->value->module_mode=='password_change'){?>
        <?php echo $_smarty_tpl->getSubTemplate ("modules/personal.password_change.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
</div>

<div class="right_col">
    <?php echo $_smarty_tpl->getSubTemplate ("modules/personal.tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="cl"></div><?php }} ?>