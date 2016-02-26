<?php /* Smarty version Smarty 3.1.4, created on 2014-03-03 15:03:01
         compiled from "/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59088586753146165e0c4d4-55059590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61790f0cd739c63a4bc4fd4ec751655a040ee980' => 
    array (
      0 => '/var/www/fortyfour/data/www/fortyfour.ru/admin/templates/system/form_fields/password.tpl',
      1 => 1393844289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59088586753146165e0c4d4-55059590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.4',
  'unifunc' => 'content_53146166925b6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53146166925b6')) {function content_53146166925b6($_smarty_tpl) {?><div class="item_block">
    <label class="label" for="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</label>
    <div class="cl"></div>

    <input class="text password<?php if ($_smarty_tpl->tpl_vars['item']->value['required']){?> required<?php }?>" type="password" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" autocomplete="off" tabindex="<?php echo $_smarty_tpl->tpl_vars['index']->value+1;?>
" />
</div><?php }} ?>